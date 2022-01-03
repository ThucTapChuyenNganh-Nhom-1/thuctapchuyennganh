<?php

namespace App\Controllers\Modules;

use App\Services\Queries;

class ModMember
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module,
            'member' => $this->getMember()
        ];
    }

    protected function getMember()
    {
        return Queries::getMember();
    }
}
