<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;

    const ACTIVE = 'active';
    const DISABLED = 'disabled';

    const ADMIN_ROLE = 'admin';
    const MANAGER_ROLE = 'manager';
    const USER_ROLE = 'user';

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
     * Rules for create method
     *
     * @return array
     */
    public static function rules()
    {

        return array(
            'email' => 'required|email|unique:users,email',
            'name' => 'required',
            'password' => 'required|min:6|alpha_num'
        );
    }

    /**
     * Rules for update method
     *
     * @param $userId - excluded user
     * @return array
     */
    public static function updateRules($userId)
    {
        return array(
            'email' => 'required|email|unique:users,email,' . $userId,
            'name' => 'required',
            'password' => 'required|min:6|alpha_num'
        );
    }

    /**
     * Texts for errors messages
     *
     * @return array
     */
    public static function messages()
    {
        return array(
            'required' => 'The :attribute field is required.',
            'unique' => 'The :attribute field is already in use by another user.',
        );
    }

    public function isAdmin()
    {
        return $this->hasRole(self::ADMIN_ROLE);
    }

    /**
     * Attach role to user
     *
     * @param $userId
     * @param $role
     *
     * @return bool
     */
    public function attachUserRole($roleName) {
        $role = DB::table('roles')->where('name',$roleName)->first();
        $this->attachRole($role->id); // parameter can be an Role object, array, or id
        return true;
    }
}
