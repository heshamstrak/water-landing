@php $name = 'skills' @endphp
@extends('layouts.admin.app')
@section('content')


<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title text-capitalize">{{$name}} | Edit {{$skill->name}}</h3>
    </div>
    <div class="card-body">
        
        <form method="post" action="{{ route('admin.'.$name.'.update', $skill->id) }}">
            <div class="card-body">
                @csrf
                @method('put')
                @include('admin.partials._errors')

                {{--Name--}}
                @php $name = 'name' @endphp
                <div class="form-group">
                    <label>{{$name}} <span class="text-danger">*</span></label>
                    <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name, $skill->name) }}" required>
                </div>

                {{-- Power --}}
                @php $name = 'power' @endphp
                <div class="form-group">
                    <label class="text-capitalize">{{$name}} <span class="text-danger">*</span></label>
                    <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name, $skill->power) }}" required>
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




