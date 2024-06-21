@php $name = 'testimonials' @endphp
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
                
                {{-- Name --}}
                @php $nameInput = 'name' @endphp
                <div class="form-group">
                    <label class="text-capitalize">{{$nameInput}} <span class="text-danger">*</span></label>
                    <input type="text" name="{{$nameInput}}" autofocus class="form-control" value="{{ old($nameInput) }}" required>
                </div>

                {{-- job --}}
                @php $nameInput = 'job' @endphp
                <div class="form-group">
                    <label class="text-capitalize">{{$nameInput}} <span class="text-danger">*</span></label>
                    <input type="text" name="{{$nameInput}}" autofocus class="form-control" value="{{ old($nameInput) }}" required>
                </div>

                {{--description--}}
                @php $nameInput = 'description' @endphp
                <div class="form-group">
                    <label class="text-capitalize">{{$nameInput}} <span class="text-danger">*</span></label>
                    <textarea name="{{$nameInput}}" class="form-control" cols="30" rows="10">{{ old($nameInput) }}</textarea>
                </div>

                {{--poster--}}
                @php $nameInput = 'image' @endphp
                <div class="form-group">
                    <label class="text-capitalize">{{$nameInput}}</label>
                    <input type="file" name="{{$nameInput}}" id="input-file-now" class="dropify" data-show-remove="false"  data-height="355"/>
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




