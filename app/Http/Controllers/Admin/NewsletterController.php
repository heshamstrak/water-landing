<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Yajra\DataTables\DataTables;

class NewsletterController extends Controller
{

    private $name = 'newsletters';

    public function __construct()
    {
        $this->middleware('auth');
    }// end of __construct


    public function index()
    {
         return view('admin.'.$this->name.'.index');

    }// end of index

    public function data()
    {
        $newsletter = Newsletter::get();

        return DataTables::of($newsletter)
            ->addColumn('record_select', 'admin.'.$this->name.'.data_table.record_select')
            ->editColumn('created_at', function (Newsletter $newsletter) {
                return $newsletter->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.'.$this->name.'.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function destroy(Newsletter $newsletter)
    {
        $this->delete($newsletter);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $newsletter = Newsletter::FindOrFail($recordId);
            $this->delete($newsletter);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Newsletter $newsletter)
    {
        $newsletter->delete();
    }// end of delete

}//end of controller
