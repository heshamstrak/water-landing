<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Testimonial\StoreTestimonialAction;
use App\Actions\Testimonial\UpdateTestimonialAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TestimonialRequest;
use App\Models\Testimonial;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{

    private $name = 'testimonials';

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
        $testimonials = Testimonial::get();

        return DataTables::of($testimonials)
            ->addColumn('record_select', 'admin.'.$this->name.'.data_table.record_select')
            ->addColumn('image', function (Testimonial $testimonial) {
                return view('admin.'.$this->name.'.data_table.image', compact('testimonial'));
            })
            ->editColumn('created_at', function (Testimonial $testimonial) {
                return $testimonial->created_at->format('Y-m-d');
            })
            ->addColumn('actions', 'admin.'.$this->name.'.data_table.actions')
            ->rawColumns(['record_select', 'actions'])
            ->toJson();

    }// end of data

    public function create()
    {
        return view('admin.'.$this->name.'.create');

    }// end of create

    public function store(TestimonialRequest $request)
    {
        app(StoreTestimonialAction::class)->handle($request->validated());
        return redirect()->route('admin.'.$this->name.'.index')->with('success', 'Added Successfully');

    }// end of store

    public function edit(Testimonial $testimonial)
    {
        return view('admin.'.$this->name.'.edit', compact('testimonial'));

    }// end of edit


    public function update(TestimonialRequest $request, $id)
    {       
        $data = Testimonial::findOrFail($id); 
        app(UpdateTestimonialAction::class)->handle($data,$request->validated());
        return redirect()->route('admin.'.$this->name.'.index')->with('success', 'Update Successfully');

    }// end of update

    public function destroy(Testimonial $testimonial)
    {
        $this->delete($testimonial);
        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of destroy

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $testimonial = Testimonial::FindOrFail($recordId);
            $this->delete($testimonial);

        }//end of for each

        session()->flash('success', __('site.deleted_successfully'));
        return response(__('site.deleted_successfully'));

    }// end of bulkDelete

    private function delete(Testimonial $testimonial)
    {
        Storage::disk('local')->delete('public/uploads/'.$this->name.'/' . $testimonial->icon);

        $testimonial->delete();

    }// end of delete

}//end of controller
