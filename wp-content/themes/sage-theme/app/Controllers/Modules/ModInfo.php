<?php

namespace App\Controllers\Modules;
use App\Services\Queries;

class ModInfo
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module,
            'resource' => $this->getResource(),
            'member' => $this->getMemberIn4()
        ];
    }
    protected function getResource()
    {
        return Queries::getResource();
    }

    protected function getMemberIn4()
    {
        return Queries::getMemberIn4();
    }
}
