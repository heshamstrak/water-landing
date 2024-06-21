<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Profolio extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'image', 'category_id'];
    protected $appends = ['image_path'];

    //attr
    public function getImagePathAttribute()
    {
        return Storage::url('uploads/profolios/' . $this->image);
        
    }// end of getPosterPathAttribute

    public function category()
    {
      return $this->belongsTo(Category::class,'category_id', 'id');
    }
    
}
