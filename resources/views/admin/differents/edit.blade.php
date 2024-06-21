@php $name = 'differents' @endphp
@extends('layouts.admin.app')
@section('content')


<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title text-capitalize">{{$name}} | Edit {{$different->name}}</h3>
    </div>
    <div class="card-body">
        
        <form method="post" action="{{ route('admin.'.$name.'.update', $different->id) }}" enctype="multipart/form-data">
            <div class="card-body">
                @csrf
                @method('put')
                @include('admin.partials._errors')

                {{--Title--}}
                <div class="form-group">
                    <label>Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" autofocus class="form-control" value="{{ old('name', $different->name) }}" required>
                </div>

                {{-- Description --}}
                @php $name = 'description' @endphp
                <div class="form-group">
                    <label class="text-capitalize">Description</label>
                    <textarea name="{{$name}}" id="{{$name}}" class="form-control" cols="30" rows="10">{{ old($name, $different->description) }}</textarea>
                </div>

                {{--Image--}}
                @php $nameInput = 'image' @endphp
                <div class="form-group">
                    <label class="text-capitalize">{{$nameInput}}</label>
                    <input type="file" name="poster" id="input-file-now" class="dropify" @if(isset($different)) data-default-file="{{$different->image_path}}" data-show-remove="false" @endif data-height="385"/>
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
@push('js')
    <script>
        CKEDITOR.replace('description', {
        height: 300,
        });
    </script>
@endpush



