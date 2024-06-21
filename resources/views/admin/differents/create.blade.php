@php $name = 'differents' @endphp
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
                <div class="form-group">
                    <label>Title <span class="text-danger">*</span></label>
                    <input type="text" name="title" autofocus class="form-control" value="{{ old('title') }}" required>
                </div>

                {{-- Description --}}
                @php $name = 'description' @endphp
                <div class="form-group">
                    <label class="text-capitalize">Description</label>                        
                    <textarea name="{{$name}}" id="description_about" class="form-control" cols="30" rows="10">{{ old($name,  setting($name) != null ? setting($name) : '') }}</textarea>
                </div> 
             
                {{--Icon--}}
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



@push('js')
<script>
  CKEDITOR.replace('description_about', {
    height: 300,
  });
</script>
@endpush