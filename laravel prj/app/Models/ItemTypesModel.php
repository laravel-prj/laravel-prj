<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ItemDetailModel;
use App\Models\ItemTypesModel;
use App\Models\ImageModel;

class ItemTypesModel extends Model
{

    use SoftDeletes;
    protected $table = 'item_types';
    protected $primaryKey = 'id';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'brand_id',
        'name',
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

    public function brand()
    {
       return $this->belongsTo('App\Models\BrandModel', 'brand_id', 'id');
    }
    public function item()
    {
       return $this->hasMany('App\Models\ItemModel', 'item_type_id', 'id');
    }
    public function images()
    {
        // imagesM,itemsM,item_type_id,item_id
        return $this->hasManyThrough('App\Models\ImageModel', 'App\Models\ItemModel', 'item_type_id', 'item_id');
    }
    public function item_details()
    {
        // imagesM,itemsM,item_type_id,item_id
        return $this->hasManyThrough('App\Models\ItemDetailModel', 'App\Models\ItemModel', 'item_type_id', 'item_id');
    }
    public static function deleteType($id)
    {
        $type = ItemTypesModel::find($id);
        $type->item_details()->delete();
        $type->images()->delete();
        $type->item()->delete();
        $type->delete();
    }
    // public function producerOrderBy()
    // {
    //    return $this->belongsTo('App\Models\ProducerModel', 'producer_id', 'id')->orderBy('producer.id');
    // }
}
