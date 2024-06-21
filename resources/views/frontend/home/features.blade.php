<section class="features-area ptb-100 bg-image">
    <div class="container">
        <div class="section-title">
            <span>{{setting('main_title_feature')}}</span>
            <h2>{{setting('title_feature')}}</h2>
            <p>{{setting('description_feature')}}</p>
        </div>

        <div class="row">
            @foreach ($features as $feature)
                <div class="col-lg-4 col-md-6">
                    <div class="single-features">
                        <div class="icon">
                            <i class="{{$feature->icon}}"></i>
                        </div>
                        <h3>{{$feature->title}}</h3>
                        <p>{{Str::words($feature->description, 15, ' ....')}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>