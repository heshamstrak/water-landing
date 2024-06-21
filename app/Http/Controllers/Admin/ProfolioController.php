<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Profolio\StoreProfolioAction;
use App\Actions\Profolio\UpdateProfolioAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProfolioRequest;
use App\Models\Profolio;
use App\Models\Category;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class ProfolioController extends Controller
{

    private $name = 'profolios';

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
        $profolios = Profolio::get();

        return DataTables::of($profolios)
            ->addColumn('record_select', 'admin.'.$this->name.'.data_table.record_select')
            ->addColumn('image', function (Profolio $profolio) {
                return view('admin.'.$this->name.'.data_table.image', compact('profolio'));
            })
            ->addColumn('category', function (Profolio $profolio) {
                return $profolio->category->name;
            })
            ->editColumn('created_at', function (Profolio $profolio) {
                return $profolio->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.'.$this->name.'.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        $categories = Category::get();
        return view('admin.'.$this->name.'.create', compact('categories'));

    }// end of create

    public function store(ProfolioRequest $request)
    {
        app(StoreProfolioAction::class)->handle($request->validated());
        return redirect()->route('admin.'.$this->name.'.index')->with('success', 'Added Successfully');

    }// end of store

    public function edit(Profolio $profolio)
    {
        $categories = Category::get();
        return view('admin.'.$this->name.'.edit', compact('profolio', 'categories'));

    }// end of edit


    public function update(ProfolioRequest $request, $id)
    {       
        $data = Profolio::findOrFail($id); 
        app(UpdateProfolioAction::class)->handle($data,$request->validated());
        return redirect()->route('admin.'.$this->name.'.index')->with('success', 'Update Successfully');

    }// end of update

    public function destroy(Profolio $profolio)
    {
        $this->delete($profolio);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $profolio = Profolio::FindOrFail($recordId);
            $this->delete($profolio);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Profolio $profolio)
    {
        Storage::disk('local')->delete('public/uploads/'.$this->name.'/' . $profolio->icon);

        $profolio->delete();

    }// end of delete

}//end of controller
