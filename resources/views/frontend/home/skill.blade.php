<section class="skill-area">
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-lg-6 col-md-12 p-0">
                <div class="skill-content ptb-100">
                    <div class="section-title">
                        <span>{{setting('main_title_skill')}}</span>
                        <h2>{{setting('title_skill')}}</h2>
                        <p>{{setting('description_skill')}}</p>
                    
                    </div>

                    <div class="skills">
                        @foreach ($skills as $skill)
                        <div class="skill-item">
                            <div class="skill-header">
                                <h3 class="skill-title">{{$skill->name}}</h3>

                                <div class="skill-percentage">
                                    <div class="count-box"><span class="count-text" data-speed="2000" data-stop="{{$skill->power}}">0</span>%</div>
                                </div>
                            </div>

                            <div class="skill-bar">
                                <div class="bar-inner"><div class="bar progress-line" data-width="{{$skill->power}}"></div></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 p-0">
                <div class="skill-image">
                    <img src="{{asset('frontend/assets')}}/img/skill-bg.jpg" alt="skill-image">
                </div>
            </div>
        </div>
    </div>
</section>