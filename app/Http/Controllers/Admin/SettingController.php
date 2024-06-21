<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }// end of __construct


    public function general()
    {
        return view('admin.settings');

    }// end of index

    public function store(Request $request)
    {

        $request->validate([
            'email'         => 'sometimes|nullable|email',
            'phone'         => 'sometimes|nullable',
            'address'       => 'sometimes|nullable',
            'map_link'      => 'sometimes|nullable',
            'logo_header'   => 'sometimes|nullable|mimes:jpeg,png,jpg,gif,svg,webp',
            'logo_footer'   => 'sometimes|nullable|mimes:jpeg,png,jpg,gif,svg,webp',
            'facebook'      => 'sometimes|nullable',
            'twitter'       => 'sometimes|nullable',
            'linkedin'      => 'sometimes|nullable',
            'youtube'       => 'sometimes|nullable',
            'instagram'     => 'sometimes|nullable',
            'title'         => 'sometimes|nullable',
            'description'   => 'sometimes|nullable',
            'link_video'    => 'sometimes|nullable',
        ]);
        $requestData = $request->except(['_token', '_method']);
<<<<<<< HEAD

        if ($request->logo_image) {
            
            setting('logo_image') != null ? Storage::disk('local')->delete('public/uploads/' . setting('logo_image')) : '';
            $request->logo_image->store('public/uploads/settings/');
            $requestData['logo_image'] = $request->logo_image->hashName();
        }
        if ($request->footer_logo_image) {
            
            setting('footer_logo_image') != null ? Storage::disk('local')->delete('public/uploads/' . setting('footer_logo_image')) : '';
            $request->footer_logo_image->store('public/uploads/settings/');
            $requestData['footer_logo_image'] = $request->footer_logo_image->hashName();
        }

        if ($request->header_image) {
            setting('header_image') != null ? Storage::disk('local')->delete('public/uploads/settings/' . setting('header_image')) : '';
            $request->header_image->store('public/uploads/settings');
            $requestData['header_image'] = $request->header_image->hashName();
        }
        if ($request->contact_image) {
            setting('contact_image') != null ? Storage::disk('local')->delete('public/uploads/' . setting('contact_image')) : '';
            $request->contact_image->store('public/uploads/settings/');
            $requestData['contact_image'] = $request->contact_image->hashName();
        }

        if ($request->about_image) {
            setting('about_image') != null ? Storage::disk('local')->delete('public/uploads/settings/' . setting('about_image')) : '';
            $request->about_image->store('public/uploads/settings');
            $requestData['about_image'] = $request->about_image->hashName();
        }
        
        if ($request->blog_header_image) {
            setting('blog_header_image') != null ? Storage::disk('local')->delete('public/uploads/settings/' . setting('blog_header_image')) : '';
            $request->blog_header_image->store('public/uploads/settings');
            $requestData['blog_header_image'] = $request->blog_header_image->hashName();
        }
        
        if ($request->about_header_image) {
            setting('about_header_image') != null ? Storage::disk('local')->delete('public/uploads/settings/' . setting('about_header_image')) : '';
            $request->about_header_image->store('public/uploads/settings');
            $requestData['about_header_image'] = $request->about_header_image->hashName();
        }
        
        if ($request->shop_header_image) {
            setting('shop_header_image') != null ? Storage::disk('local')->delete('public/uploads/settings/' . setting('shop_header_image')) : '';
            $request->shop_header_image->store('public/uploads/settings');
            $requestData['shop_header_image'] = $request->shop_header_image->hashName();
        }
        
        if ($request->contact_header_image) {
            setting('contact_header_image') != null ? Storage::disk('local')->delete('public/uploads/settings/' . setting('contact_header_image')) : '';
            $request->contact_header_image->store('public/uploads/settings');
            $requestData['contact_header_image'] = $request->contact_header_image->hashName();
        }
          
        if ($request->cart_header_image) {
            setting('cart_header_image') != null ? Storage::disk('local')->delete('public/uploads/settings/' . setting('cart_header_image')) : '';
            $request->cart_header_image->store('public/uploads/settings');
            $requestData['cart_header_image'] = $request->cart_header_image->hashName();
        }

        if ($request->checkout_header_image) {
            setting('checkout_header_image') != null ? Storage::disk('local')->delete('public/uploads/settings/' . setting('checkout_header_image')) : '';
            $request->checkout_header_image->store('public/uploads/settings');
            $requestData['checkout_header_image'] = $request->checkout_header_image->hashName();
        }

        if ($request->product_header_image) {
            setting('product_header_image') != null ? Storage::disk('local')->delete('public/uploads/settings/' . setting('product_header_image')) : '';
            $request->product_header_image->store('public/uploads/settings');
            $requestData['product_header_image'] = $request->product_header_image->hashName();
=======
        $image = ['logo_image', 'home_background_image', 'about_image_one', 'about_image_two', 'about_image_three', 'about_image_four', 'skill_image'];
        
        if ($request->logo_image) {
            Storage::disk('local')->delete('public/uploads/' . setting('logo_image'));
            $request->logo_image->store('public/uploads/settings/');
            $requestData['logo_image'] = $request->logo_image->hashName();
        }
        if ($request->home_background_image) {
            Storage::disk('local')->delete('public/uploads/' . setting('home_background_image'));
            $request->home_background_image->store('public/uploads/settings/');
            $requestData['home_background_image'] = $request->home_background_image->hashName();
        }
        if ($request->about_image_one) {
            Storage::disk('local')->delete('public/uploads/' . setting('about_image_one'));
            $request->about_image_one->store('public/uploads/settings/');
            $requestData['about_image_one'] = $request->about_image_one->hashName();
        }
        if ($request->about_image_two) {
            Storage::disk('local')->delete('public/uploads/' . setting('about_image_two'));
            $request->about_image_two->store('public/uploads/settings/');
            $requestData['about_image_two'] = $request->about_image_two->hashName();
        }
        if ($request->about_image_three) {
            Storage::disk('local')->delete('public/uploads/' . setting('about_image_three'));
            $request->about_image_three->store('public/uploads/settings/');
            $requestData['about_image_three'] = $request->about_image_three->hashName();
        }
        if ($request->about_image_four) {
            Storage::disk('local')->delete('public/uploads/' . setting('about_image_four'));
            $request->about_image_four->store('public/uploads/settings/');
            $requestData['about_image_four'] = $request->about_image_four->hashName();
        }
        if ($request->skill_image) {
            Storage::disk('local')->delete('public/uploads/' . setting('skill_image'));
            $request->skill_image->store('public/uploads/settings/');
            $requestData['skill_image'] = $request->skill_image->hashName();
>>>>>>> 5ef127c (update)
        }

        setting($requestData)->save();
        session()->flash('success', __('Update Successfully'));
        return redirect()->back();

    }// end of store

}//end of controller


