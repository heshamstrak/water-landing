<?php
namespace App\Actions\Service;
use App\Models\Service;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UpdateServiceAction
{
    public function handle(Service $Service,array $data):Service
    {
        if(isset($data['image'])){
            Storage::disk('local')->delete('public/uploads/services/' . $Service->image);
            $data['image']->store('public/uploads/services');
            $data['image'] = $data['image']->hashName();
        } else {
            $data['image'] = $Service->image;
        }

        $Service->update($data);
        return $Service;
    }
}