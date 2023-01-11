<?php

namespace App\frontmodels;;

use Illuminate\Database\Eloquent\Model;


class Service extends Model
{
    protected $fillable = ['name', 'tag', 'link', 'description', 'image', 'icon_class', 'icon_bgcolor', 'icon_color'];
}
