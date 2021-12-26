<?php

namespace App\Controllers\Modules;

class ModNavInfo
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
