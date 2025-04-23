<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DirectoryRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Str;

/**
 * Class DirectoryCrudController
 *
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class DirectoryCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Directory::class);
        CRUD::setRoute(config('backpack.base.route_prefix').'/directory');
        CRUD::setEntityNameStrings('directory', 'directories');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     *
     * @return void
     */
    protected function setupListOperation()
    {
        //        CRUD::setFromDb(); // set columns from db columns.
        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */
        //        CRUD::column('country_id')->type('number');
        //        CRUD::column('city_id')->type('number');
        CRUD::column('name');
        CRUD::column('description');
        CRUD::column('phone')->wrapper(['href' => function ($crud, $column, $entry) {
            $cleanedLink = Str::of(urldecode($entry->phone))->replaceMatches('/[^a-zA-Z0-9:\/.]/', '');

            return 'tel:'.$cleanedLink;
        }]);
        CRUD::column('whatsapp')->wrapper(['href' => function ($crud, $column, $entry) {
            $cleanedLink = Str::of(urldecode($entry->whatsapp))->replaceMatches('/[^a-zA-Z0-9:\/.]/', '');

            return 'https://wa.me/'.$cleanedLink;
        }]);
        //        CRUD::column('country');
        //        CRUD::column('city');
        CRUD::column('category');
        CRUD::column('category')->wrapper(['href' => function ($crud, $column, $entry) {
            return backpack_url("/category/$entry->category_id/show");
        }]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     *
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(DirectoryRequest::class);
        CRUD::setFromDb(); // set fields from db columns.

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     *
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
