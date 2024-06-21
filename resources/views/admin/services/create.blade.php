@php $name = 'services' @endphp
@extends('layouts.admin.app')
@section('content')


<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title text-capitalize">{{$name}} | Create</h3>
    </div>
    <div class="card-body">
        <form class="form" action="{{ route('admin.'.$name.'.store') }}" method="POST" enctype="multipart/form-data">
            <div class="card-body">
  
                @csrf
                @method('post')
                @include('admin.partials._errors')
                
                {{-- Title --}}
                @php $name = 'title' @endphp
                <div class="form-group">
                    <label class="text-capitalize">{{$name}} <span class="text-danger">*</span></label>
                    <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name) }}" required>
                </div>

                {{--description--}}
                @php $name = 'description' @endphp
                <div class="form-group">
                    <label class="text-capitalize">{{$name}} <span class="text-danger">*</span></label>
                    <textarea name="{{$name}}" class="form-control" cols="30" rows="10">{{ old($name) }}</textarea>
                </div>

                {{--Icon--}}
                @php $name = 'icon' @endphp
                <div class="form-group">
                    <label class="text-capitalize">{{$name}} | get icon form <a href="https://icofont.com"> IcoFont</a></label>
                    <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name) }}" required>
                </div>

                {{--Image--}}
                @php $name = 'image' @endphp
                <div class="form-group">
                    <label class="text-capitalize">{{$name}}</label>
                    <input type="file" name="image" id="input-file-now" class="dropify" data-show-remove="false"  data-height="355"/>
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




