<?php

namespace App\Controllers\Modules;

class ModContact
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
