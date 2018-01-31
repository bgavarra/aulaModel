<?php

namespace App\Deposito;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    protected $primaryKey='codigo';
    public $incrementing = false;
    protected $fillable=['codigo','nome'];
}
