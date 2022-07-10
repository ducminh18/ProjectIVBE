<?php

namespace App\Services;

use App\Http\Resources\InvoiceResource;
use App\Models\Invoice;
use App\Models\InvoiceDetail;
use Illuminate\Support\Facades\DB;

class InvoiceService
{
    private readonly CustomerService $customer_service;
    public function __construct(CustomerService $customer_service)
    {
        $this->customer_service = $customer_service;
    }
    public function refresh($id)
    {
        $invoice = Invoice::find($id);
        if ($invoice) {
            $invoice->total = InvoiceDetail::query()
                ->where('invoice_id', $invoice->id)
                ->sum('quantity*price');
            $invoice->save();
            $this->customer_service->refresh($invoice->customer_id);
        }
    }

    public function update($id, array $data)
    {
        $invoice = Invoice::find($id);
        $updated = Invoice::where('id', $id)
            ->update($data);
        if ($updated && ($data['status'] != 0 && $data['status'] != 3) && ($invoice->status == 0 || $invoice->status == 3)) {
            DB::statement("UPDATE product_details SET remaining_quantity = remaining_quantity - (SELECT quantity FROM invoice_details WHERE invoice_details.invoice_id = {$invoice->id} AND invoice_details.product_detail_id = product_details.id) WHERE id IN (SELECT product_detail_id FROM invoice_details WHERE invoice_id = {$invoice->id})");
            DB::statement("UPDATE products SET quantity = (SELECT SUM(remaining_quantity) FROM product_details WHERE product_details.product_id = products.id)");
        }
        else if ($updated && ($data['status'] == 0 || $data['status'] == 3) && ($invoice->status != 0 && $invoice->status != 3))
        {
            DB::statement("UPDATE product_details SET remaining_quantity = remaining_quantity + (SELECT quantity FROM invoice_details WHERE invoice_details.invoice_id = {$invoice->id} AND invoice_details.product_detail_id = product_details.id) WHERE id IN (SELECT product_detail_id FROM invoice_details WHERE invoice_id = {$invoice->id})");
            DB::statement("UPDATE products SET quantity = (SELECT SUM(remaining_quantity) FROM product_details WHERE product_details.product_id = products.id)");
        }
        // if (isset($data['customer_id']) && ($invoice->customer_id != $data['customer_id'])) {
        //     $this->customer_service->refresh($data['customer_id']);
        //     $this->customer_service->refresh($invoice->customer_id);
        // }
        return $updated > 0;
    }

    public function delete($id)
    {
        $invoice = Invoice::find($id);
        if ($invoice) {
            $deleted = Invoice::destroy($id);
            $this->customer_service->refresh($invoice->customer_id);
        }
        return $deleted;
    }

    public function create(array|Invoice $data)
    {
        $invoice = is_array($data) ?
            Invoice::create($data)
            : $data;
        if ($invoice->save()) {
            $this->customer_service->refresh($invoice->customer_id);
            return $invoice->id;
        } else return 0;
    }

    public function getAll(
        array $orderBy = [],
        int $page_index = 0,
        int $page_size = 10,
        array $option = []
    ) {
        $query = Invoice::query();
        if ($option['with_detail'] == 'true') {
            $query->with('details.productDetail');
            $query->with('customer');
        }
        // if ($option['search']) {
        //     $query->where('name', 'LIKE', "%".$option['search']."%")
        //     ->orWhere('code', 'LIKE', "%".$option['search']."%");
        // }
        if ($orderBy) {
            $query->orderBy($orderBy['column'], $orderBy['sort']);
        }
        return InvoiceResource::collection($query->paginate($page_size, page: $page_index));
    }

    public function getById(int $id)
    {
        $query = Invoice::query();
        $query->with('details.productDetail.product.image');
        $query->with('details.productDetail.image');
        $query->with('customer');
        return new InvoiceResource($query->find($id));
    }
}
