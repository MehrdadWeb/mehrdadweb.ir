<?php
// portfolios بخش مدیریت 
//back end
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Service extends Model
{
    protected $fillable = ['name', 'tag', 'link', 'description', 'image', 'icon_class', 'icon_bgcolor', 'icon_color'];
}
