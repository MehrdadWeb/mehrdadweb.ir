<?php
//سمت کاربر - front end
namespace App\frontmodels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description', 'user_id', 'status', 'image'];

    protected $attribute = [
        'hit' => 300 // بی اثر است
    ];

    /*
    است Article محتوای خود کلاس  $this-> است و Article اشاره گر است و حاوی آدرس کلاس $this
    */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function user()
    {
        //OneToOne
        return $this->belongsTo(User::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function comments()
    {
        //OneToMany  ارتباط مطلب و کامنت ارتباط یک به چند است
        return $this->hasMany(Comment::class);
    }
}
