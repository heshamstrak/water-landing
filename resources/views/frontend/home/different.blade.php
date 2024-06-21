<section class="why-we-different ptb-100 bg-image">
    <div class="container">
        <div class="section-title">
            <span>{{setting('main_title_different')}}</span>
            <h2>{{setting('title_different')}}</h2>
            <p>{{setting('description_different')}}</p> 
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="tab">
                    <ul class="tabs">
                        @foreach ($differents as $different)
                            <li><a href="#">{{$different->title}}</a></li>
                        @endforeach
                    </ul>

                    <div class="tab_content">
                        @foreach ($differents as $different)
                        <div class="tabs_item">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-12 why-we-different-content">
                                    <div class="tabs_item_content">
                                        <h3>{{$different->title}}</h3>
                           
                                        {!! $different->description !!}

                                        <a href="#portfolio" class="btn btn-primary">Our Work</a>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-12 why-we-different-img">
                                    <div class="tabs_item_img">
                                        <img src="{{$different->image_path}}" alt="img" style="height: 477px; width: 100%; object-fit: cover;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>