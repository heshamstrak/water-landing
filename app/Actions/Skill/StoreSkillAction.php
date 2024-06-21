<?php
namespace App\Actions\Skill;
use App\Models\Skill;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class StoreSkillAction
{
    public function handle(array $data): Skill
    {
        $skills = Skill::create(($data));
        return $skills;
    }
}