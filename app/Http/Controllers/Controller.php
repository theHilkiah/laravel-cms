<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $data = [];

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = array_merge($data, $this->data);
        return $this->data;
    }

    public function directories($path, $all = false)
    {
        $dirs = [];
        foreach(glob($path."/*", GLOB_ONLYDIR) as $dir){
            $dirs[basename($dir)] = $dir;
        }
        return collect($dirs);
    }
}
