<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DirectoryRequest;
use App\Models\Directory;
use LaravelApiBase\Http\Controllers\ApiControllerBehavior;

class DirectoryController extends Controller
{
    use ApiControllerBehavior;

    public function __construct(Directory $directory)
    {
        $this->setApiModel($directory);
        $this->setApiFormRequest(DirectoryRequest::class);
    }
}
