<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Biodata extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'height',
        'weight',
        'dob',
        'occupation',
        'father_name',
        'father_occupation',
        'mother_name',
        'mother_occupation',
        'siblings',
        'education',
        'mob_no',
        'tel_no',
        'email_address',
        'address'
    ];
    
    /**
    * Users table filter
    *
    * @return array
    */
    public function scopeFilter($query, $params)
    {
//        $query->select('id','first_name','last_name'); 
        
        if ( isset($params['name']) && !empty($params['name'])) {
            $name = $params['name'];
            $query->where(function($que) use($name) {
                $que->orWhere(DB::raw("CONCAT(first_name,' ',last_name)"), 'LIKE', "%{$name}%");
                $que->orWhere(DB::raw("CONCAT(last_name,' ',first_name)"), 'LIKE', "%{$name}%");
            });
        }
        if ( isset($params['height']) && !empty($params['height']) ){
            $query->where('height', $params['height']);
        }
        if ( isset($params['weight']) && !empty($params['weight']) ){
            $query->where('weight', $params['weight']);
        }
        return $query;
    }
    
    public static function deleteById($id){
        return Biodata::where('id', $id)->delete();
    }
}
