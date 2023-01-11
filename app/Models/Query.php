<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'query', 'user_id', 'user_name'];

    public function database()
    {
        /* ارتباط کوئری و دیتابیس
    OneToOneارتباط یک به یک است*/
        return $this->belongsTo(Database::class);
    }

    public function forms()
    {
        /*  ارتباط بین کوئری و فرم 
        ManyToManyارتباط چند به چند است*/
        return $this->belongsToMany(Form::class);
    }
    public function user()
    {
        /* ارتباط کوئری و کاربر
    OneToOneارتباط یک به یک است*/
        return $this->belongsTo(User::class);
    }
}
