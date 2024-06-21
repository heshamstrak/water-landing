<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Skill\StoreSkillAction;
use App\Actions\Skill\UpdateSkillAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SkillRequest;
use App\Models\Skill;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class SkillController extends Controller
{

    private $name = 'skills';

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
        $skills = Skill::get();

        return DataTables::of($skills)
            ->addColumn('record_select', 'admin.'.$this->name.'.data_table.record_select')
            ->editColumn('created_at', function (Skill $skill) {
                return $skill->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.'.$this->name.'.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        return view('admin.'.$this->name.'.create');

    }// end of create

    public function store(SkillRequest $request)
    {
        app(StoreSkillAction::class)->handle($request->validated());
        return redirect()->route('admin.'.$this->name.'.index')->with('success', 'Added Successfully');

    }// end of store

    public function edit(Skill $skill)
    {
        return view('admin.'.$this->name.'.edit', compact('skill'));

    }// end of edit


    public function update(SkillRequest $request, $id)
    {       
        $data = Skill::findOrFail($id); 
        app(UpdateSkillAction::class)->handle($data,$request->validated());
        return redirect()->route('admin.'.$this->name.'.index')->with('success', 'Update Successfully');

    }// end of update

    public function destroy(Skill $skill)
    {
        $this->delete($skill);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $skill = Skill::FindOrFail($recordId);
            $this->delete($skill);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Skill $skill)
    {
        $skill->delete();

    }// end of delete

}//end of controller
