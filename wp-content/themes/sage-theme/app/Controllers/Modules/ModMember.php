<?php

namespace App\Controllers\Modules;

class ModMember
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
