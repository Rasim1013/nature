<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    use HasFactory;
    protected $fillable = ['name','surname','gift','id_donate','email','country','is_publish','address','unit','city','state_province','credit_card','expiration','cvv'];


    







}
