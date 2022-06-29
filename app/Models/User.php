<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

use Kyslik\ColumnSortable\Sortable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    use Sortable;

    protected $path = '/storage/images/';

    public function getPictureAttribute($file) {

        return $this->path . $file;

    }

    public $sortable = ['id', 'name', 'email'];

    // public function getPasswordAttribute($password) {
    //     bcrypt($password);
    // }

    // To make sure that everything is fillable
    protected $guarded = [];

    // No timestamps while registering
    public $timestamps = false;

    // Relationship with posts table
    public function posts() {
        return $this->hasMany(Post::class, 'user_id', 'id');
      }


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        // Commented because I don't have remember column inside users table
        // 'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
