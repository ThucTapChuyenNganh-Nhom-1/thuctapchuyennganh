<?php

namespace App\Controllers\Modules;
use App\Services\Queries;

class ModInfo
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module,
            'resource' => $this->getResource($module['id']),
            'memberid' => $this->getMemberID($module['id'])
        ];
    }
    protected function getResource($id)
    {
        $resource = Queries::getResource();
        $project = $resource->posts[0]->project;
    $i = 0;
    foreach ($project as $load) {
        foreach ($load['link_member'] as $sub_load) {
            if ($sub_load['link']['title'] == $id) {
                $arr_pj[$i] = $load;
                $i++;
            }
        }
    }
        return $arr_pj;
    }
  
    protected function getMemberID($id)
    {
        $member = Queries::getMemberIn4();
        foreach ($member->posts as $value) {
            if ($value->post_title == $id) {
                $mem = $value;
            }
        }
        return $mem;
    }
}
