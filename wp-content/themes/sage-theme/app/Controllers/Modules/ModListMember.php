<?php

namespace App\Controllers\Modules;

class ModListMember
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
