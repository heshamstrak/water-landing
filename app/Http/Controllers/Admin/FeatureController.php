<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Feature\StoreFeatureAction;
use App\Actions\Feature\UpdateFeatureAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FeatureRequest;
use App\Models\Feature;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class FeatureController extends Controller
{

    private $name = 'features';

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
        $features = Feature::get();

        return DataTables::of($features)
            ->addColumn('record_select', 'admin.'.$this->name.'.data_table.record_select')
            ->addColumn('icon', function (Feature $feature) {
                return view('admin.'.$this->name.'.data_table.icon', compact('feature'));
            })
            ->editColumn('created_at', function (Feature $feature) {
                return $feature->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.'.$this->name.'.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        return view('admin.'.$this->name.'.create');

    }// end of create

    public function store(FeatureRequest $request)
    {
        app(StoreFeatureAction::class)->handle($request->validated());
        return redirect()->route('admin.'.$this->name.'.index')->with('success', 'Added Successfully');

    }// end of store

    public function edit(Feature $feature)
    {
        return view('admin.'.$this->name.'.edit', compact('feature'));

    }// end of edit


    public function update(FeatureRequest $request, $id)
    {       
        $data = Feature::findOrFail($id); 
        app(UpdateFeatureAction::class)->handle($data,$request->validated());
        return redirect()->route('admin.'.$this->name.'.index')->with('success', 'Update Successfully');

    }// end of update

    public function destroy(Feature $feature)
    {
        $this->delete($feature);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $feature = Feature::FindOrFail($recordId);
            $this->delete($feature);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Feature $feature)
    {
        Storage::disk('local')->delete('public/uploads/'.$this->name.'/' . $feature->icon);

        $feature->delete();

    }// end of delete

}//end of controller
