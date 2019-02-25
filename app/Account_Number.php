<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account_Number extends Model
{
    //
    public function user() {
        return $this->belongsTo(User::class, 'Id');
    }

    public function payments() {
        return $this->hasMany(Payment::class, 'Id');
    }

}
