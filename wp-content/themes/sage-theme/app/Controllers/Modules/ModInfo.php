<?php

namespace App\Controllers\Modules;

class ModInfo
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
