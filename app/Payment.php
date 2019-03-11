<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    public function payments() {
        return $this->belongsTo(Account_Number::class, 'Id');
    }

}
