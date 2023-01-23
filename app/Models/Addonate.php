<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Addonate extends Model
{
    use HasFactory;

    protected $fillable = ['header','location','photo','description','funding_goal','funding_raised','final_day','status','user_id','lang_id'];

     public static function uploadimage(Request $request, $image = NULL)
    {
            if($request->hasFile('photo')){
                if ($image){
                    Storage::delete($image);
                }
                $folder = date('Y-m-d');
                return $request->file('photo')->store("images/{$folder}", 'public');
            }
        return null;    
    }
    public function getimage()
    {
        if (!$this->photo){
            return asset("no-image.png");
        }
        return asset("storage/{$this->photo}");
    }

}
