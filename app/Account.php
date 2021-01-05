<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Account extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','card_number', 'cvc', 'valid', 'amount'
    ];


    public function id(){
        //    return $this->hasOne(Account::class, 'id', 'account');
        return $this->hasOne(Account::class, 'user_id', 'id');
    }
}
