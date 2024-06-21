<?php
namespace App\Actions\Testimonial;
use App\Models\Testimonial;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class StoreTestimonialAction
{
    public function handle(array $data): Testimonial
    {
        if(isset($data['image'])){
            $data['image']->store('public/uploads/testimonials');
            $data['image'] = $data['image']->hashName();
        }
        $testimonials = Testimonial::create($data);
        return $testimonials;
    }
}