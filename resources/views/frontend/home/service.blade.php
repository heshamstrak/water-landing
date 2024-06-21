<section id="services" class="services-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>{{setting('main_title_service')}}</span>
            <h2>{{setting('title_service')}}</h2>
            <p>{{setting('description_service')}}</p>
        </div>

        <div class="row">
            @foreach($services as $service)
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="services-image">
                        <img src="{{$service->image_path}}" alt="image" style="width: 100%; height: 304px; object-fit: cover;">
                        <div class="icon">
                            <i class="{{$service->icon}}"></i>
                        </div>
                    </div>

                    <div class="services-content">
                        <h3>{{$service->title}}</h3>
                        <p>{{Str::words($service->description, 15, ' ...')}}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>