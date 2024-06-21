<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Partner\StorePartnerAction;
use App\Actions\Partner\UpdatePartnerAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PartnerRequest;
use App\Models\Partner;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{

    private $name = 'partners';

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
        $partners = Partner::get();

        return DataTables::of($partners)
            ->addColumn('record_select', 'admin.'.$this->name.'.data_table.record_select')
            ->addColumn('image', function (Partner $partner) {
                return view('admin.'.$this->name.'.data_table.image', compact('partner'));
            })
            ->editColumn('created_at', function (Partner $partner) {
                return $partner->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.'.$this->name.'.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        return view('admin.'.$this->name.'.create');

    }// end of create

    public function store(PartnerRequest $request)
    {
        app(StorePartnerAction::class)->handle($request->validated());
        return redirect()->route('admin.'.$this->name.'.index')->with('success', 'Added Successfully');

    }// end of store

    public function edit(Partner $partner)
    {
        return view('admin.'.$this->name.'.edit', compact('partner'));

    }// end of edit


    public function update(PartnerRequest $request, $id)
    {       
        $data = Partner::findOrFail($id); 
        app(UpdatePartnerAction::class)->handle($data,$request->validated());
        return redirect()->route('admin.'.$this->name.'.index')->with('success', 'Update Successfully');

    }// end of update

    public function destroy(Partner $partner)
    {
        $this->delete($partner);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $partner = Partner::FindOrFail($recordId);
            $this->delete($partner);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Partner $partner)
    {
        Storage::disk('local')->delete('public/uploads/'.$this->name.'/' . $partner->icon);

        $partner->delete();

    }// end of delete

}//end of controller
