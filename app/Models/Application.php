<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
protected $fillable = ['app_name','user_id','name_org','typ_org','name_surname','position','addres','phone','email','partner_name','partner_type','priority_id','proj_object','proj_activ','inovat_proj','support_proj','funding_donors'];
    
}
