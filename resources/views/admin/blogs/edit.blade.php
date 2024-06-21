@php $name = 'blogs' @endphp
@extends('layouts.admin.app')
@section('content')


<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title text-capitalize">{{$name}} | Edit {{$blog->name}}</h3>
    </div>
    <div class="card-body">
        
<<<<<<< HEAD
        <form method="post" action="{{ route('admin.'.$name.'.update', $blog->id) }}"  enctype="multipart/form-data">
=======
        <form method="post" action="{{ route('admin.'.$name.'.update', $blog->id) }}" enctype="multipart/form-data">
>>>>>>> 5ef127c (update)
            <div class="card-body">
                @csrf
                @method('put')
                @include('admin.partials._errors')

                {{--Title--}}
                <div class="form-group">
                    <label>Title <span class="text-danger">*</span></label>
                    <input type="text" name="title" autofocus class="form-control" value="{{ old('title', $blog->title) }}" required>
                </div>

                {{--description--}}
                <div class="form-group">
                    <label>Description <span class="text-danger">*</span></label>
                    <textarea name="description"  id="editor" class="form-control" cols="30" rows="10">{{ old('description', $blog->description) }}</textarea>
                </div>


                {{--image--}}
                <div class="form-group">
                    <label class="text-capitalize">Poster</label>
                    <input type="file" name="poster" id="input-file-now" class="dropify" @if(isset($blog)) data-default-file="{{$blog->poster_path}}" data-show-remove="false" @endif data-height="585"/>
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
        ClassicEditor.create(document.querySelector("#editor"));
    </script>
@endpush

