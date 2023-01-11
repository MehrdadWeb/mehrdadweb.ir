<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['body', 'name', 'email', 'status','article_name'];

    protected $attributes = [
        //
    ];

    /*
    است Article محتوای خود کلاس  $this-> است و Article اشاره گر است و حاوی آدرس کلاس $this
    */
    public function article()
    {
        //OneToOne ارتباط کامنت و مطلب ارتباط یک به یک است
        return $this->belongsTo(Article::class);
    }
}
