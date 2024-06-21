<?php

namespace App\Actions\Skill;
use App\Models\Skill;

class UpdateSkillAction
{
    public function handle(Skill $Skill,array $data):Skill
    {
        $Skill->update($data);
        return $Skill;
    }
}