<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesTransaction extends Model
{
    protected $guarded = ['id'];

    protected function generateInvoiceNumber() {
    	return SalesTransaction::max('invoice_number') + 1;
    }
}