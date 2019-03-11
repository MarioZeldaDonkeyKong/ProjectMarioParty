<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountNumber extends Model
{
    //
    public function user() {
        return $this->belongsTo(User::class, 'Id');
    }

    public function payments() {
        return $this->hasMany(Payment::class, 'Id');
    }

}
