<?php

namespace App\Controllers\Modules;

class ModBanner
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
