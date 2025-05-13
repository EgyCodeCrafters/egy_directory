<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DirectoryRequest;
use App\Models\CategoryDirectory;
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

    protected function query()
    {
        return parent::query()->approved();
    }

    /**
     * Override the default store action.
     */
    public function store(DirectoryRequest $request)
    {
        try {
            $directory = Directory::create($request->all());
            $selectedCategories = array_filter($request->input('category_ids'));
            foreach ($selectedCategories as $category_id) {
                CategoryDirectory::create([
                    'category_id' => $category_id,
                    'directory_id' => $directory->id,
                ]);
            }

            return response()->json([
                'status' => 'success',
                'message' => 'directory created successfully',
            ], 200);
        } catch (\Exception $e) {
            // 4) Catch any unexpected errors
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
