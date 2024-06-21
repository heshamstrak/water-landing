@php $name = 'testimonials' @endphp
@extends('layouts.admin.app')
@section('content')


<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title text-capitalize">{{$name}} | Edit {{$testimonial->name}}</h3>
    </div>
    <div class="card-body">
        
        <form method="post" action="{{ route('admin.'.$name.'.update', $testimonial->id) }}" enctype="multipart/form-data">
            <div class="card-body">
                @csrf
                @method('put')
                @include('admin.partials._errors')

                {{--Title--}}
                @php $nameInput = 'name' @endphp
                <div class="form-group">
                    <label class="text-capitalize">{{$nameInput}} <span class="text-danger">*</span></label>
                    <input type="text" name="{{$nameInput}}" autofocus class="form-control" value="{{ old($nameInput, $testimonial->title) }}" required>
                </div>

                {{-- job --}}
                @php $nameInput = 'job' @endphp
                <div class="form-group">
                    <label>{{$nameInput}} <span class="text-danger">*</span></label>
                    <input type="text" name="{{$nameInput}}" autofocus class="form-control" value="{{ old($nameInput, $testimonial->description) }}" required>
                </div>

                {{--description--}}
                @php $nameInput = 'description' @endphp
                <div class="form-group">
                    <label class="text-capitalize">{{$nameInput}} <span class="text-danger">*</span></label>
                    <textarea name="{{$nameInput}}" class="form-control" cols="30" rows="10">{{ old($nameInput, $testimonial->description) }}</textarea>
                </div>


                {{--image--}}
                <div class="form-group">
                    @php $nameInput = 'image' @endphp
                    <label class="text-capitalize">{{$nameInput}}</label>
                    <input type="file" name="{{$nameInput}}" id="input-file-now" class="dropify" @if(isset($testimonial)) data-default-file="{{$testimonial->image_path}}" data-show-remove="false" @endif data-height="585"/>
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



