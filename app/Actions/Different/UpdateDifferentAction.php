<?php
namespace App\Actions\different;
use App\Models\Different;
use Illuminate\Support\Facades\Storage;

class UpdateDifferentAction
{
    public function handle(Different $Different,array $data):Different
    {
        if(isset($data['image'])){
            Storage::disk('local')->delete('public/uploads/differents/' .$Different->image);
            $data['image']->store('public/uploads/differents');
            $data['image'] = $data['image']->hashName();
        } else {
            $data['image'] = $Different->image;
        }
        $Different->update($data);
        return $Different;
    }
}