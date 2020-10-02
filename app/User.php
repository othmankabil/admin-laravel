<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function roles()
    {
        return  $this->belongsToMany(Role::class,'user_role');
    }
    public function hasRole($role)
    {
        if($this->roles()->where('name',$role)->first())
        {
            return true;
        }return false;
    }
    public static function newUser($name,$prenom,$login,$password,$role)
    {
        $admin_role =  Role::where('nom',$role)->first();
        DB::table('users')->insert([
            'name' => $name,
            'prenom' => $prenom,
            'login' => $login,
            'password' => Hash::make($password),

        ]);
        $user = User::where('login',$login)->first();
        $user->roles()->attach($admin_role);
    }
    public function sales()
    {
     return $this->hasMany(sale::class);
    }



}
