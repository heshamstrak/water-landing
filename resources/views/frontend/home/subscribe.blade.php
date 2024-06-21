<section class="subscribe-area ptb-100">
    <div class="container">
        <div class="newsletter">
            <h2>Join Our <b>Newsletter</b></h2>
            <form id="newsletters" action="{{route('newsletters.store')}}" method="post">
                @csrf
                <input type="email" class="form-control" placeholder="Your Email Address" name="email" required autocomplete="off">
                <button type="submit">Subscribe</button>
                <br>
                <br>
                <div class="col-lg-12">
                    <div class="alert alert-success" role="alert" id="successMessage3" style="display: none"></div>
                </div>
            </form>
        </div>
    </div>
</section>