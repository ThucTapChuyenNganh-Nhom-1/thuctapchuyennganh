<?php

namespace App\Controllers\Modules;

class ModProject
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
