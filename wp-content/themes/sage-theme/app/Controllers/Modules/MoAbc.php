<?php

namespace App\Controllers\Modules;

class MoAbc
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
