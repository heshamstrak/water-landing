<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
class Service extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'image', 'icon'];
    protected $appends = ['icon_path', 'image_path'];

    //attr
    public function getIconPathAttribute()
    {
        return Storage::url('uploads/services/' . $this->icon);
        
    }// end of getIconPathAttribute

    public function getImagePathAttribute()
    {
        return Storage::url('uploads/services/' . $this->image);
        
    }// end of getImagePathAttribute

}
