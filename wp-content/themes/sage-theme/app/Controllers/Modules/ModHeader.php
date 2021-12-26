<?php

namespace App\Controllers\Modules;

class ModHeader
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
