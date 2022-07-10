<?php

namespace App\Models;

use App\Traits\HasStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends AuditedEntity
{
    use HasStatus, HasFactory;
    protected $table = 'invoices';


    public const RULES = [];

    protected $fillable = [
        ...parent::FILLABLE,
        'customer_id',
        'total',
        'paid',
        'customer_name',
        'address',
        'phone_number',
        'status',
        'note'
    ];

    public function details()
    {
        return $this->hasMany(InvoiceDetail::class, 'invoice_id', 'id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

    public static function getStatusName(int $status)
    {
        switch ($status) {
            case 0:
                return "Đang duyệt";
            case 1:
                return "Đã duyệt";
            case 2:
                return "Đang giao";
            case 3:
                return "Từ chối";
            case 4:
                return "Hoàn thành";
            default:
                return "Đang duyệt";
        }
    }
}
