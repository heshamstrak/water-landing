<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Different\StoreDifferentAction;
use App\Actions\Different\UpdateDifferentAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DifferentRequest;
use App\Models\Different;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class DifferentController extends Controller
{

    private $name = 'differents';

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
        $differents = Different::get();

        return DataTables::of($differents)
            ->addColumn('record_select', 'admin.'.$this->name.'.data_table.record_select')
            ->addColumn('image', function (Different $different) {
                return view('admin.'.$this->name.'.data_table.image', compact('different'));
            })
            ->editColumn('created_at', function (Different $different) {
                return $different->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.'.$this->name.'.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        return view('admin.'.$this->name.'.create');

    }// end of create

    public function store(DifferentRequest $request)
    {
        app(StoreDifferentAction::class)->handle($request->validated());
        return redirect()->route('admin.'.$this->name.'.index')->with('success', 'Added Successfully');

    }// end of store

    public function edit(Different $different)
    {
        return view('admin.'.$this->name.'.edit', compact('different'));

    }// end of edit


    public function update(DifferentRequest $request, $id)
    {       
        $data = Different::findOrFail($id); 
        app(UpdateDifferentAction::class)->handle($data,$request->validated());
        return redirect()->route('admin.'.$this->name.'.index')->with('success', 'Update Successfully');

    }// end of update

    public function destroy(Different $different)
    {
        $this->delete($different);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $different = Different::FindOrFail($recordId);
            $this->delete($different);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Different $different)
    {
        Storage::disk('local')->delete('public/uploads/'.$this->name.'/' . $different->icon);

        $different->delete();

    }// end of delete

}//end of controller
