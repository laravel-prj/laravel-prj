<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemModel extends Model
{
    use SoftDeletes;
    protected $table = 'items';
    protected $primaryKey = 'id';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'item_type_id',
        'shop_id',
        'image',
        'name',
        'description',
        'price',
        'feature',
        'discout_item',
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

    public function shops()
    {
        return $this->belongsTo('App\Models\ShopModel', 'shop_id', 'id');
    }

    public function type()
    {
       return $this->belongsTo('App\Models\ItemTypesModel', 'item_type_id', 'id');
    }

    public function item_details()
    {
        return $this->hasMany('App\Models\ItemDetailModel', 'item_id', 'id');
    }
    public function images()
    {
        return $this->hasMany('App\Models\ImageModel', 'item_id', 'id');
    }
    // public function image_default()
    // {
    //     return $this->hasMany('App\Models\ImageModel', 'item_id', 'id');
    // }

    public static function deleteItem($id)
    {
        $item = ItemModel::find($id);
        if ($item) {
            $item->item_details()->delete();
            $item->images()->delete();
            $item->delete();
        }
    }
}
