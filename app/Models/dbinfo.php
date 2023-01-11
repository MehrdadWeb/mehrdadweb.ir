<?php
// portfolios بخش مدیریت 
//back end
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class dbinfo extends Model
{
    protected $fillable = ['host', 'port', 'dbname', 'username', 'password'];
}
