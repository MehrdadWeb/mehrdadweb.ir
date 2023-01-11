<?php
// portfolios بخش مدیریت 
//back end
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Portfolio extends Model
{
    protected $fillable = ['name', 'tag', 'link', 'description', 'image'];
}
