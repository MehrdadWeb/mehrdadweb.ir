<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    use HasFactory;
    use Sluggable;
    protected $fillable = ['name', 'slug', 'description', 'user_id', 'status', 'image'];

    protected $attributes = [
        'hit' => 1 /* این موثر است. 
        مقدار اولیه دلخواه است*/
    ];

    /*
    است Article محتوای خود کلاس  $this-> است و Article اشاره گر است و حاوی آدرس کلاس $this
    */
    public function categories()
    {
        /* ارتباط بین مطلب و دسته بندی
        ManyToManyارتباط چند به چند است*/
        return $this->belongsToMany(Category::class);
    }
    public function user()
    {
        /* ارتباط مطلب و کاربر
    OneToOneارتباط یک به یک است*/
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        //OneToMany  ارتباط مطلب و کامنت ارتباط یک به چند است
        return $this->hasMany(Comment::class);
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ''
            ]
        ];
    }
}
