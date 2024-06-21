<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Category;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{

    private $name = 'categories';

    public function __construct()
    {
        $this->middleware('permission:read_'.$this->name)->only(['index']);
        $this->middleware('permission:create_'.$this->name)->only(['create', 'store']);
        $this->middleware('permission:update_'.$this->name)->only(['edit', 'update']);
        $this->middleware('permission:delete_'.$this->name)->only(['delete', 'bulk_delete']);

    }// end of __construct

    public function index()
    {
         return view('admin.'.$this->name.'.index');

    }// end of index

    public function data()
    {
        $categories = Category::get();

        return DataTables::of($categories)
            ->addColumn('record_select', 'admin.'.$this->name.'.data_table.record_select')
            ->editColumn('created_at', function (Category $category) {
                return $category->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.'.$this->name.'.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        return view('admin.'.$this->name.'.create');

    }// end of create

    public function store(CategoryRequest $request)
    {
        $requestData = $request->validated();
        Category::create($requestData);
        session()->flash('success', 'Added Successfully');
        return redirect()->route('admin.'.$this->name.'.index');

    }// end of store

    public function edit(Category $category)
    {
        return view('admin.'.$this->name.'.edit', compact('category'));

    }// end of edit

    public function update(CategoryRequest $request, Category $category)
    {
        $requestData = $request->validated();
        $category->update($requestData);
        session()->flash('success', __('Update Successfully'));
        return redirect()->route('admin.'.$this->name.'.index');

    }// end of update

    public function destroy(Category $category)
    {
        $this->delete($category);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $category = Category::FindOrFail($recordId);
            $this->delete($category);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Category $category)
    {
        $category->delete();
    }// end of delete

}//end of controller
