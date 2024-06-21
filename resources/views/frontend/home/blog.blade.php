<section id="blog" class="blog-area ptb-100 bg-image">
    <div class="container">
        <div class="section-title">
            <span>{{setting('main_title_blog')}}</span>
            <h2>{{setting('title_blog')}}</h2>
            <p>{{setting('description_blog')}}</p> 
        </div>

        <div class="row">
            <div class="blog-slides owl-carousel owl-theme">
                @foreach ($blogs as $blog)
                <div class="col-lg-12 col-md-12">
                    <div class="single-blog-post">
                        <div class="blog-image">
                            <a href="{{route('single-blog', $blog->id)}}"><img src="{{$blog->poster_path}}" alt="image" style="height: 309px; width: 100%; object-fit:cover"></a>
                        </div>

                        <div class="blog-post-content">
                            <span class="date">{{date('M d, y',strtotime($blog->created_at))}}</span>
                            <h3><a href="{{route('single-blog', $blog->id)}}">{{$blog->title}}</a></h3>
                            <p>{{Str::words($blog->description, 15, ' ...')}}</p>
                            <a href="{{route('single-blog', $blog->id)}}" class="read-more-btn">Read More <i class="icofont-double-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
    
            </div>
        </div>
    </div>
</section>