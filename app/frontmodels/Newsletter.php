<?php

namespace App\frontmodels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Newsletter extends Model
{
    use HasFactory;
    public static function isSubscribed()
    {
    }
    public static function subscribePending()
    {
    }
    protected $fillable = ['email'];
}
