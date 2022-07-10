<?php

namespace App\Http\Resources;

use App\Models\Invoice;
use App\Models\InvoiceDetail;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class InvoiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'customer_id' => $this->customer_id,
            'customer_name' => $this->customer_name,
            'address' => $this->address,
            'phone_number' => $this->phone_number,
            'total' => $this->total,
            'paid' => $this->paid,
            'status' => $this->status,
            'status_name' => Invoice::getStatusName($this->status),
            'note' => $this->note,
            'created_at' => date('d/m/y H:i', strtotime($this->created_at)),
            'updated_at' => $this->updated_at,
            'details' => InvoiceDetailResource::collection($this->whenLoaded('details'))
        ];
    }
}
