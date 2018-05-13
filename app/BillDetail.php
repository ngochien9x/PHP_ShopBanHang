<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table = "bill_detail";

    public function bill_detail() {
    	return $this->belongsTo('App\Prodouct', 'id_product', 'id');
    }

    public function bill() {
    	return $this->belongsTo('App\Bill', 'id_bill', 'id');
    }
}
