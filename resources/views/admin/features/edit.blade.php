@php $name = 'features' @endphp
@extends('layouts.admin.app')
@section('content')


<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title text-capitalize">{{$name}} | Edit {{$feature->name}}</h3>
    </div>
    <div class="card-body">
        
<<<<<<< HEAD:resources/views/admin/products/edit.blade.php
        <form method="post" action="{{ route('admin.'.$name.'.update', $product->id) }}" enctype="multipart/form-data">
            @csrf @method('put')
            <div class="card card-custom gutter-b">
                <div class="card-header card-header-tabs-line">
                    <div class="card-toolbar">
                        <ul class="nav nav-tabs nav-bold nav-tabs-line">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_4">
                                    <span class="nav-icon"><i class="flaticon2-chat-1"></i></span>
                                    <span class="nav-text">Product</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_4">
                                    <span class="nav-icon"><i class="flaticon2-chat-1"></i></span>
                                    <span class="nav-text">Shipping</span>
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_6_4">
                                    <span class="nav-icon"><i class="flaticon2-drop"></i></span>
                                    <span class="nav-text">Image</span>
                                </a>
                            </li>
                        </ul>
                    </div>
=======
        <form method="post" action="{{ route('admin.'.$name.'.update', $feature->id) }}" enctype="multipart/form-data">
            <div class="card-body">
                @csrf
                @method('put')
                @include('admin.partials._errors')

                {{--Title--}}
                <div class="form-group">
                    <label>Title <span class="text-danger">*</span></label>
                    <input type="text" name="title" autofocus class="form-control" value="{{ old('title', $feature->title) }}" required>
>>>>>>> 5ef127c (update):resources/views/admin/features/edit.blade.php
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kt_tab_pane_1_4" role="tabpanel" aria-labelledby="kt_tab_pane_2_4">
                            <h6>Product</h6>
                            @php $nameInput = 'name' @endphp
                            <div class="form-group">
                                <label class="text-capitalize">{{$nameInput}} <span class="text-danger">*</span></label>
                                <input type="text" name="{{$nameInput}}" autofocus class="form-control" value="{{ old($nameInput, $product->{$nameInput}) }}" required />
                            </div>

<<<<<<< HEAD:resources/views/admin/products/edit.blade.php
                            {{--Main Description--}} @php $nameInput = 'main_description' @endphp
                            <div class="form-group">
                                <label class="text-capitalize">Main Description <span class="text-danger">*</span></label>
                                <textarea name="{{$nameInput}}" class="form-control" cols="30" rows="10">{{ old($nameInput, $product->{$nameInput}) }}</textarea>
                            </div>

                            {{--Description--}} @php $nameInput = 'description' @endphp
                            <div class="form-group">
                                <label class="text-capitalize">{{$nameInput}} <span class="text-danger">*</span></label>
                                <textarea name="{{$nameInput}}" id="editor" class="form-control" cols="30" rows="10">{{ old($nameInput, $product->{$nameInput}) }}</textarea>
                            </div>

                            {{-- ingredient --}}
                            @php $nameInput = 'ingredients' @endphp
                            <div class="form-group">
                                <label class="text-capitalize">{{$nameInput}} <span class="text-danger">*</span></label>
                                <textarea name="{{$nameInput}}" id="editor3" class="form-control" cols="30" rows="10">{{ old($nameInput, $product->{$nameInput}) }}</textarea>
                            </div>

                            <div class="row">
                      
                                <div class="col-12">
                                    {{-- ingredient --}}
                                    @php $nameInput = 'weights' @endphp
                                    <div class="form-group">
                                        <label class="text-capitalize">{{$nameInput}} <span class="text-danger">*</span></label>
                                        <select class="js-example-basic-multiple" name="{{$nameInput}}[]" multiple="multiple" style="width: 100%" >
                                            <option value="">Select Weight</option>
                                            @foreach($weights as $row)
                                                <option value="{{$row->id}}" {{ $product->weights->contains($row->id) ? 'selected' : '' }}>{{$row->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    {{-- Count --}} @php $nameInput = 'count' @endphp
                                    <div class="form-group">
                                        <label class="text-capitalize">{{$nameInput}} <span class="text-danger">*</span></label>
                                        <input type="text" name="{{$nameInput}}" autofocus class="form-control" value="{{ old($nameInput, $product->{$nameInput}) }}" required />
                                    </div>
                                </div>
                                <div class="col-3">
                                    {{-- Price --}} @php $nameInput = 'price' @endphp
                                    <div class="form-group">
                                        <label class="text-capitalize">{{$nameInput}} <span class="text-danger">*</span></label>
                                        <input type="text" name="{{$nameInput}}" autofocus class="form-control" value="{{ old($nameInput, $product->{$nameInput}) }}" required />
                                    </div>
                                </div>
                                <div class="col-3">
                                    @php $nameInput = 'discount_type' @endphp
                                    <div class="form-group">
                                        <label class="text-capitalize">{{$nameInput}}</label>
                                        <select name="{{$nameInput}}" class="form-control">
                                            <option value="" {{$product->{$nameInput} == null ? 'selected' : '' }}>Select Your Discount Type</option>
                                            <option value="0" {{$product->{$nameInput} == 0 ? 'selected' : '' }}>Percent</option>
                                            <option value="1" {{$product->{$nameInput} == 1 ? 'selected' : '' }}>Amount</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    {{-- discount --}} @php $nameInput = 'discount' @endphp
                                    <div class="form-group">
                                        <label class="text-capitalize">{{$nameInput}}</label>
                                        <input type="text" name="{{$nameInput}}" autofocus class="form-control" value="{{ old($nameInput, $product->{$nameInput}) }}" />
                                    </div>
                                </div>
                            </div>

                            {{-- Category --}} @php $nameInput = 'category_id' @endphp
                            <div class="form-group">
                                <label class="text-capitalize">Category</label>
                                <select name="{{$nameInput}}" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}" {{$category->id == old($nameInput, $product->{$nameInput}) ? 'selected' : ''}}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @php $nameInput = 'type' @endphp
                            <label for="" class="text-capitalize">{{$nameInput}}</label>
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="radio" value="1" id="flexRadioDefault1" name="{{$nameInput}}" {{$product->{$nameInput} == 1 ? 'checked' : ''}} />
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Master
                                </label>
                            </div>
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="radio" value="2" id="flexRadioDefault2" name="{{$nameInput}}" {{$product->{$nameInput} == 2 ? 'checked' : ''}} />
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Main
                                </label>
                            </div>
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="radio" value="3" id="flexRadioDefault3" name="{{$nameInput}}" {{$product->{$nameInput} == 3 ? 'checked' : ''}} />
                                <label class="form-check-label" for="flexRadioDefault3">
                                    About
                                </label>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kt_tab_pane_2_4" role="tabpanel" aria-labelledby="kt_tab_pane_1_4">
                            <h4>Shipping</h4>
                            {{--Description--}} @php $nameInput = 'shipping_description' @endphp
                            <div class="form-group">
                                <label class="text-capitalize">Shipping Description<span class="text-danger">*</span></label>
                                <textarea id="editor2" name="{{$nameInput}}" class="form-control" cols="30" rows="10">{{ old($nameInput, $product->{$nameInput}) }}</textarea>
                            </div>

                            {{-- discount --}} @php $nameInput = 'shipping_price' @endphp
                                <div class="form-group">
                                <label class="text-capitalize">Shipping Price</label>
                                <input type="text" name="{{$nameInput}}" autofocus class="form-control" value="{{ old($nameInput, $product->{$nameInput}) }}" placeholder="Free"/>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="kt_tab_pane_6_4" role="tabpanel" aria-labelledby="kt_tab_pane_6_4">
                            <h4>Image</h4>
                            <div class="input-images" style="padding-top: 0.5rem; padding-bottom: 0.5rem;"></div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="text-capitalize">Icon</label>
                                        <input type="file" name="icon" id="input-file-now" class="dropify" @if(isset($product)) data-default-file="{{$product->icon_path}}" @endif data-show-remove="false"  data-height="255"/>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="text-capitalize">Small Image</label>
                                        <input type="file" name="small_image" id="input-file-now" class="dropify" @if(isset($product)) data-default-file="{{$product->image_path}}" @endif  data-show-remove="false"  data-height="255"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                 
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-8">
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        </div>
=======
                {{--description--}}
                <div class="form-group">
                    <label>Description <span class="text-danger">*</span></label>
                    <textarea name="description" class="form-control" cols="30" rows="10">{{ old('description', $feature->description) }}</textarea>
                </div>


                 {{--Icon--}}
                 @php $name = 'icon' @endphp
                 <div class="form-group">
                     <label class="text-capitalize">{{$name}} | get icon form <a href="https://icofont.com"> IcoFont</a></label>
                     <input type="text" name="{{$name}}" autofocus class="form-control" value="{{ old($name, $feature->icon) }}" required>
                 </div>
            
            </div>

            <div class="card-footer">
                <div class="row">
                    <div class="col-lg-8">
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
>>>>>>> 5ef127c (update):resources/views/admin/features/edit.blade.php
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@push('js')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
    ClassicEditor.create(document.querySelector("#editor"));
    ClassicEditor.create(document.querySelector("#editor2"));
    ClassicEditor.create(document.querySelector("#editor3"));
      
      let preloaded = [
          @foreach ($product->images as $image)
              {id: {{$image->id}}, src: "{{ Storage::url('uploads/products/'.$product->id.'/'.$image->image) }}"},
          @endforeach
      ];

      $('.input-images').imageUploader({
          preloaded: preloaded,
          imagesInputName: 'images',
          preloadedInputName: 'old',
          maxSize: 2 * 1024 * 1024,
          maxFiles: 10
      });
</script>
@endpush





