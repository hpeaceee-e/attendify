<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
        'role',
        'avatar',
        'status',
        'schedule',
        'delete',
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
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Relasi ke model Role
    public function role()
    {
        return $this->belongsTo(Role::class);
    }


    // Relasi ke model Schedule
    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

    // Relasi ke model Attendance
    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'enhancer');
    }

    // Relasi ke model Leave
    public function leaves()
    {
        return $this->hasMany(Leave::class, 'enhancer');
    }
}
