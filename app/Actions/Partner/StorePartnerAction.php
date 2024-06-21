<?php
namespace App\Actions\Partner;
use App\Models\Partner;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class StorePartnerAction
{
    public function handle(array $data): Partner
    {
        if(isset($data['image'])){
            $data['image']->store('public/uploads/partners');
            $data['image'] = $data['image']->hashName();
        }
        $partners = Partner::create(($data));
        return $partners;
    }
}