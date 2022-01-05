<?php

namespace App\Controllers\Modules;

use App\Services\Queries;

class ModResourceProject
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module,
            'resource' => $this->getResource()
        ];
    }

    protected function getResource()
    {
        return Queries::getResource();
    }

}
