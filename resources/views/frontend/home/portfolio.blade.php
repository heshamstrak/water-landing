<section id="portfolio" class="portfolio-area ptb-100 bg-image">
    <div class="container">
        <div class="section-title">
            <span>{{setting('main_title_portfolio')}}</span>
            <h2>{{setting('title_portfolio')}}</h2>
            <p>{{setting('description_portfolio')}}</p>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="shorting-menu">
                    <button class="filter" data-filter="all">All</button>
                    @foreach ($categories as $category)
                        <button class="filter" data-filter=".{{$category->name}}">{{$category->name}}</button>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="shorting">
            <div class="row">
                @foreach($categories as $category)
                    @foreach($category->profolio as $row)
                        <div class="col-lg-4 col-md-6 mix {{$category->name}}">
                            <div class="single-work">
                                <a href="{{$row->image_path}}" class="popup-btn"></a>

                                <div class="work-image">
                                    <img src="{{$row->image_path}}" alt="work-image" style="width: 100%; height: 410px; object-fit: cover;">
                                    <div class="work-overlay">
                                        <h3>{{$row->name}}</h3>
                                        <span>{{$row->description}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
</section>