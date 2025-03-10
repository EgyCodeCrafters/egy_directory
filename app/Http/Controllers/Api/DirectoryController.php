<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Directory;
use LaravelApiBase\Http\Controllers\ApiControllerBehavior;

class DirectoryController extends Controller
{
    use ApiControllerBehavior;

    public function __construct(Directory $directory)
    {
        $this->setApiModel($directory);
    }
}
