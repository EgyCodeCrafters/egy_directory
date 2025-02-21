<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use LaravelApiBase\Http\Controllers\ApiControllerBehavior;

class CategoryController extends Controller
{
    use ApiControllerBehavior;

    public function __construct(Category $category)
    {
        $this->setApiModel($category);
    }
}
