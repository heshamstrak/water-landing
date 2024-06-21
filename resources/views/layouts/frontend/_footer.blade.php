        <!-- Start Footer Area -->
        <footer class="footer-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7">
                        <p><i class="icofont-copyright"></i> 2024 NWater - Crafted with <i class="icofont-heart"></i> by <a href="https://thetailorsdev.com" target="_blank">The Tailors DEV</a></p>
                    </div>

                    <div class="col-lg-6 col-md-5">
                        <ul>
                            @if(setting('facebook') != null)<li><a href="{{setting('facebook')}}"><i class="icofont-facebook"></i></a></li>@endif
                            @if(setting('twitter') != null)<li><a href="{{setting('twitter')}}"><i class="icofont-twitter"></i></a></li>@endif
                            @if(setting('instagram') != null)<li><a href="{{setting('instagram')}}"><i class="icofont-instagram"></i></a></li>@endif
                            @if(setting('linkedin') != null)<li><a href="{{setting('linkedin')}}"><i class="icofont-linkedin"></i></a></li>@endif
                            @if(setting('youtube') != null)<li><a href="{{setting('youtube')}}"><i class="icofont-youtube"></i></a></li>@endif
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->

        <div class="go-top"><i class="icofont-swoosh-up"></i></div>

        <!-- JQuery Min JS -->
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="{{asset('frontend/assets')}}/js/jquery.min.js"></script>
        <!-- Bootstrap Min JS -->
        <script src="{{asset('frontend/assets')}}/js/bootstrap.bundle.min.js"></script>
        <!-- Magnific Popup Min JS -->
        <script src="{{asset('frontend/assets')}}/js/jquery.magnific-popup.min.js"></script>
        <!-- Appear Min JS -->
        <script src="{{asset('frontend/assets')}}/js/jquery.appear.min.js"></script>
        <!-- Mixitup Min JS -->
        <script src="{{asset('frontend/assets')}}/js/mixitup.min.js"></script>
        <!-- Particles Min JS -->
        <script src="{{asset('frontend/assets')}}/js/particles.min.js"></script>
        <!-- Ripple Min JS -->
        <script src="{{asset('frontend/assets')}}/js/jquery.ripples-min.js"></script>
        <!-- Paralax Min JS -->
        <script src="{{asset('frontend/assets')}}/js/parallax.min.js"></script>
        <!-- Odometer Min JS -->
        <script src="{{asset('frontend/assets')}}/js/odometer.min.js"></script>
        <!-- Owl Carousel Min JS -->
        <script src="{{asset('frontend/assets')}}/js/owl.carousel.min.js"></script>
        <!-- WOW Min JS -->
        <script src="{{asset('frontend/assets')}}/js/wow.min.js"></script>
        <!-- Form Validator Min JS -->
        <script src="{{asset('frontend/assets')}}/js/form-validator.min.js"></script>
        <!-- Contact Form Min JS -->
        <script src="{{asset('frontend/assets')}}/js/contact-form-script.js"></script>
        <!-- ajaxChimp Min JS -->
        <script src="{{asset('frontend/assets')}}/js/jquery.ajaxchimp.min.js"></script>
        <!-- Main JS -->
        <script src="{{asset('frontend/assets')}}/js/main.js"></script>
        <script>
              $(document).ready(function() {
                $('#contactForm, #contactForm2').submit(function(e) {
                    e.preventDefault();
            
                    var formData = $(this).serializeArray();
            
                    $.ajax({
                        type: 'POST',
                        url: '{{route("contact.store")}}',
                        data: formData,
                        success: function(response) {
                            console.log(response);
                            $('#successMessage2').show();
                            $('#successMessage2').html(response.success);
                            setTimeout(function() {
                                $('#successMessage2').fadeOut();
                            }, 5000); // 5000 milliseconds = 5 seconds
                        },
                        error: function(xhr) {
                            // Handle errors
                            if (xhr.status === 422) {
                                // Validation errors
                                var errors = xhr.responseJSON.errors;
                                $.each(errors, function(key, value) {
                                    // Display error messages, you can customize this part based on your UI structure
                                    alert(value[0]);
                                });
                            } else {
                                // Handle other errors
                                console.log(xhr.responseText);
                            }
                        }
                    });
                });

                $('#newsletters').submit(function(e) {
                    e.preventDefault();
            
                    var formData = $(this).serializeArray();
            
                    $.ajax({
                        type: 'POST',
                        url: '{{route("newsletters.store")}}',
                        data: formData,
                        success: function(response) {
                            console.log(response);
                            $('#successMessage3').show();
                            $('#successMessage3').html(response.success);
                            setTimeout(function() {
                                $('#successMessage3').fadeOut();
                            }, 5000); // 5000 milliseconds = 5 seconds
                        },
                        error: function(xhr) {
                            // Handle errors
                            if (xhr.status === 422) {
                                // Validation errors
                                var errors = xhr.responseJSON.errors;
                                $.each(errors, function(key, value) {
                                    // Display error messages, you can customize this part based on your UI structure
                                    alert(value[0]);
                                });
                            } else {
                                // Handle other errors
                                console.log(xhr.responseText);
                            }
                        }
                    });
                });

            });
        </script>
    </body>