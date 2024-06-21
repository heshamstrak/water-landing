<section class="partner-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>{{setting('main_title_partner')}}</span>
            <h2>{{setting('title_partner')}}</h2>
            <p>{{setting('description_partner')}}</p>
        </div>

        <div class="row">
            <div class="partner-slides owl-carousel owl-theme">
                @foreach ($partners as $partner)
                    <div class="col-lg-12 col-md-12">
                        <div class="partner-item">
                            <a href="#">
                                <img src="{{$partner->image_path}}" alt="{{$partner->name}}" style="height: 60px">
                            </a>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
</section>