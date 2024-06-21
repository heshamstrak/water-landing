<section id="about" class="about-area ptb-100 bg-image">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="row about-image">
                    <div class="col-6 col-lg-6 col-md-6">
                        <div class="image">
                            <img src="{{Storage::url('public/uploads/settings/'.setting('about_image_one'))}}" alt="about" style="height: 321px; width: 100%; object-fit:cover">
                        </div>
                    </div>

                    <div class="col-6 col-lg-6 col-md-6">
                        <div class="image">
                            <img src="{{Storage::url('public/uploads/settings/'.setting('about_image_two'))}}" alt="about" style="height: 321px; width: 100%; object-fit:cover">
                        </div>
                    </div>

                    <div class="col-6 col-lg-6 col-md-6">
                        <div class="image mt-30">
                            <img src="{{Storage::url('public/uploads/settings/'.setting('about_image_three'))}}" alt="about" style="height: 321px; width: 100%; object-fit:cover">
                        </div>
                    </div>

                    <div class="col-6 col-lg-6 col-md-6">
                        <div class="image mt-30">
                            <img src="{{Storage::url('public/uploads/settings/'.setting('about_image_four'))}}" alt="about" style="height: 321px; width: 100%; object-fit:cover">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-12">
                <div class="about-content">
                    <span>{{setting('main_title_about')}}</span>
                    <h2>{{setting('title_about')}}</h2>
                    {!!setting('description_about')!!}
                </div>
            </div>
        </div>
    </div>
</section>