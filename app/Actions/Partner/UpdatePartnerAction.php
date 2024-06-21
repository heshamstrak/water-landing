<?php
namespace App\Actions\Partner;
use App\Models\Partner;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UpdatePartnerAction
{
    public function handle(Partner $Partner,array $data):Partner
    {
        if(isset($data['image'])){
            Storage::disk('local')->delete('public/uploads/partners/' . $Partner->image);
            $data['image']->store('public/uploads/partners');
            $data['image'] = $data['image']->hashName();
        } else {
            $data['image'] = $Partner->image;
        }
        $Partner->update($data);
        return $Partner;
    }
}