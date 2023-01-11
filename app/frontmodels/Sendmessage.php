<?php

namespace App\frontmodels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Sendmessage extends Model
{
    use HasFactory;
    public static function isSubscribed()
    {
    }
    public static function subscribePending()
    {
    }
    protected $fillable = ['name', 'email', 'phone', 'subject', 'message','description'];
}
