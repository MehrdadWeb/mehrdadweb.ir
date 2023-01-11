<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'user_id', 'user_name', 'product_id', 'product_name', 'form_id'];

    public function queries()
    {
        /* ارتباط بین فرم و کوئری 
        ManyToManyارتباط چند به چند است*/
        return $this->belongsToMany(Query::class);
    }
    public function user()
    {
        /* ارتباط فرم و کاربر
    OneToOneارتباط یک به یک است*/
        return $this->belongsTo(User::class);
    }
}
