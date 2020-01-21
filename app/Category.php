<?php 
namespace App;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    
	protected $table = 'category';
	  
	protected $fillable = [
        'id','name','created_by','user_of','created_at','update_at'
    ];

	static function getValidationRules(){
    	$rules = [
		    'id' => 'required','name' => 'required','created_by' => 'required','user_of' => 'required','created_at' => 'required','update_at' => 'required'
		];
		return $rules;
    }

		static function Search(){
    	$pageSize = (isset($_GET['pageSize'])?$_GET['pageSize']:15);
    	//$query = Category::table('Category'); // it will also work , make sure table case is correct
    	$query = Category::where('id','>',0);

			if(!empty(Input::get("id"))){
    			$query->where("id","=",Input::get("id"));
    			} 
if(!empty(Input::get("name"))){
    			$query->where("name","=",Input::get("name"));
    			} 
if(!empty(Input::get("created_by"))){
    			$query->where("created_by","=",Input::get("created_by"));
    			} 
if(!empty(Input::get("user_of"))){
    			$query->where("user_of","=",Input::get("user_of"));
    			} 
if(!empty(Input::get("created_at"))){
    			$query->where("created_at","=",Input::get("created_at"));
    			} 
if(!empty(Input::get("update_at"))){
    			$query->where("update_at","=",Input::get("update_at"));
    			} 


    	
    	
		//$result = $query->get();
		$result = $query->paginate(2);
		//print_r($result);die();
		return $result;

    }
}
