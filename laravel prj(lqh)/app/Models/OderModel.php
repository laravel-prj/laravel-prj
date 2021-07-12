<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OderModel extends Model
{
    use SoftDeletes;
    protected $table = 'orders';
    protected $primaryKey = 'id';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_id',
        'order_date',
        'status',
        'delivery_time ',
        'total_price',
        'total_discount',
        'total_item',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $casts = [
        'order_date'=> 'date:Y-m-d H:i:s',
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

    public function orderItem()
    {
        return $this->hasMany('App\Models\OderItemModel', 'order_id', 'id');
    }

    public function customer()
    {
       return $this->belongsTo('App\Models\CustomerModel', 'customer_id', 'id');
    }
}
