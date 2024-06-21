@php $name = 'services' @endphp
@extends('layouts.admin.app')
@section('content')


<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title text-capitalize">{{$name}} | Edit {{$service->name}}</h3>
    </div>
    <div class="card-body">
        
        <form method="post" action="{{ route('admin.'.$name.'.update', $service->id) }}" enctype="multipart/form-data">
            <div class="card-body">
                @csrf
                @method('put')
                @include('admin.partials._errors')

                {{--Title--}}
                <div class="form-group">
                    <label class="text-capitalize">Title <span class="text-danger">*</span></label>
                    <input type="text" name="title" autofocus class="form-control" value="{{ old('title', $service->title) }}" required>
                </div>

                {{--description--}}
                <div class="form-group">
                    <label class="text-capitalize">Description <span class="text-danger">*</span></label>
                    <textarea name="description" class="form-control" cols="30" rows="10">{{ old('description', $service->description) }}</textarea>
                </div>

                {{--Icon--}}
                @php $name = 'icon' @endphp
                <div class="form-group">
                    <label class="text-capitalize">{{$name}} | get icon form <a href="https://icofont.com"> IcoFont</a></label>
                    <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name, $service->{$name}) }}" required>
                </div>
                
    
                {{--image--}}
                @php $name = 'image' @endphp
                <div class="form-group">
                    <label class="text-capitalize">{{$name}}</label>
                    <input type="file" name="{{$name}}" id="input-file-now" class="dropify" @if(isset($service)) data-default-file="{{$service->image_path}}" data-show-remove="false" @endif data-height="585"/>
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




