<section id="testimonial" class="testimonial-area ptb-100 bg-image">
    <div class="container">
        <div class="section-title">
            <span>{{setting('main_title_testimonial')}}</span>
            <h2>{{setting('title_testimonial')}}</h2>
            <p>{{setting('description_testimonial')}}</p>
        
        </div>
        
        <div class="row">
            <div class="testimonial-slides owl-carousel owl-theme">
                @foreach($testimonials as $testimonial)
                    <div class="col-lg-12 col-md-12">
                        <div class="testimonial-item">
                            <div class="client-image">
                                <img src="{{$testimonial->image_path}}" alt="image" style="height: 100%; object-fit: cover;">
                            </div>

                            <div class="testimonial-content">
                                <div class="desc">
                                    <p>{{$testimonial->description}}</p>
                                </div>

                                <div class="client-info">
                                    <h3>{{$testimonial->name}}</h3>
                                    <span>{{$testimonial->job}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>