@php $name = 'partners' @endphp
@extends('layouts.admin.app')
@section('content')


<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title text-capitalize">{{$name}} | Edit {{$partner->name}}</h3>
    </div>
    <div class="card-body">
        
        <form method="post" action="{{ route('admin.'.$name.'.update', $partner->id) }}" enctype="multipart/form-data">
            <div class="card-body">
                @csrf
                @method('put')
                @include('admin.partials._errors')

                {{--Title--}}
                <div class="form-group">
                    <label>Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" autofocus class="form-control" value="{{ old('name', $partner->name) }}" required>
                </div>

                {{--Image--}}
                @php $nameInput = 'image' @endphp
                <div class="form-group">
                    <label class="text-capitalize">{{$nameInput}}</label>
                    <input type="file" name="image" id="input-file-now" class="dropify" @if(isset($partner)) data-default-file="{{$partner->image_path}}" data-show-remove="false" @endif data-height="385"/>
                </div>
                        
            </div>

            <div class="card-footer">
                <div class="row">
                    <div class="col-lg-8">
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection



