<?php

namespace App\Controllers\Modules;

class ModAboutUs
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
