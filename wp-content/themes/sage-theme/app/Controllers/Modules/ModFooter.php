<?php

namespace App\Controllers\Modules;

class ModFooter
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
