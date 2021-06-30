<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ItemDetailModel;
use App\Models\BrandModel;
use App\Models\ImageModel;

class BrandModel extends Model
{
    use SoftDeletes;
    protected $table = 'brand';
    protected $primaryKey = 'id';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
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

    public function type()
    {
        return $this->hasMany('App\Models\ItemTypesModel', 'brand_id', 'id');
    }

    public function item()
    {
        return $this->hasManyThrough('App\Models\ItemModel', 'App\Models\ItemTypesModel', 'brand_id', 'item_type_id');
    }

    public static function deleteBand($id)
    {
        $brand = BrandModel::find($id);
        $item = $brand->item()->get();
        if (count($item)>0) {
            foreach ($item as $key => $value) {
                ItemDetailModel::where('item_id',$value->id)->delete();
                ImageModel::where('item_id',$value->id)->delete();
            }
        }
        $brand->item()->delete();
        $brand->type()->delete();
        $brand->delete();
    }
}
