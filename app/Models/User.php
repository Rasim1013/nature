<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Status_user;
use App\Models\Role;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    public function group_name()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }
    
    protected $fillable = [
        'name',
        'surname',
        'group_id',
        'phone',
        'email',
        'password',
        'date_of_birthday',
        'adress',
        'city',
        'country', 
        'about',
        'role_id',
        'status',
        'last_online_at',
        'telegram_id',
        ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function stat() {
         return $this->belongsTo(Status_user::class, 'status');
     }


public function role() {
         return $this->belongsTo(Role::class, 'role_id');
     }
}

