<?php

namespace App\Models;
use App\Models\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerModel extends Authenticatable
{
    use SoftDeletes;
    protected $table = 'customers';
    protected $primaryKey = 'id';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'birthday',
        'city',
        'email',
        'password',
        'tel',
        'gender',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $casts = [
        'created_at' => 'date:Y-m-d H:i:s',
        'updated_at' => 'date:Y-m-d H:i:s',
        'deleted_at' => 'date:Y-m-d H:i:s',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'deleted_at'
    ];

    public function orders()
    {
        return $this->hasMany('App\Models\OderModel', 'customer_id', 'id');
    }

    public function orderItem(){
		return $this->hasManyThrough('App\Models\OderItemModel', 'App\Models\OderModel', 'customer_id', 'order_id', 'id');
	}
}
