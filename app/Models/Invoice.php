<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{


    protected $table = 'invoices';

    protected $fillable = [
        'invoice_date',
        'invoice_number',
        'your_business_name',
        'your_business_address',
        'customer_name',
        'customer_address',
        'item_description', // Assuming it's a JSON or serialized field for item descriptions
        'item_quantity',    // Assuming it's a JSON or serialized field for item quantities
        'item_price',       // Assuming it's a JSON or serialized field for item prices
        'tax_rate',
        'due_date',
        'payment_instructions',
        'total_amount',     // Assuming you calculate it and store it
        // Add any other fields you need here
    ];
    use HasFactory;
    public function lineItems()
    {
        return $this->hasMany(LineItem::class);
    }

}
