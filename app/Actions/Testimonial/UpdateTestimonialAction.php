<?php
namespace App\Actions\Testimonial;
use App\Models\Testimonial;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UpdateTestimonialAction
{
    public function handle(Testimonial $Testimonial,array $data):Testimonial
    {
        if(isset($data['image'])){
            Storage::disk('local')->delete('public/uploads/testimonials/' . $Testimonial->image);
            $data['image']->store('public/uploads/testimonials');
            $data['image'] = $data['image']->hashName();
        } else {
            $data['image'] = $Testimonial->image;
        }
        $Testimonial->update($data);
        return $Testimonial;
    }
}