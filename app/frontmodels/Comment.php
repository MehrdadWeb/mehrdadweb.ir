<?php
//سمت کاربر - front end
namespace App\frontmodels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['body', 'name', 'email','article_name'];

    protected $attribute = [
        //
    ];
}
