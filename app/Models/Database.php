<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Database extends Model
{
    use HasFactory;
    protected $fillable = ['host', 'port', 'dbname', 'username', 'password'];

    public function queries()
    {
        //OneToMany  ارتباط دیتابیس و کوئری ارتباط یک به چند است
        return $this->hasMany(Query::class);
    }
}
