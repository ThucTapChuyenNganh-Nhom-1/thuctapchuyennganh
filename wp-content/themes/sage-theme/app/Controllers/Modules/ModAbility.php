<?php

namespace App\Controllers\Modules;

class ModAbility
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
