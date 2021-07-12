<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShopModel extends Model
{
    use SoftDeletes;
    protected $table = 'shops';
    protected $primaryKey = 'id';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',
        'city',
        'area',
        'address',
        'tel',
        'email',
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
        'deleted_at'
    ];
}
