<section id="contact" class="contact-area ptb-100 bg-image">
    <div class="container">
        <div class="section-title">
            <span><?php echo e(setting('main_title_contact')); ?></span>
            <h2><?php echo e(setting('title_contact')); ?></h2>
            <p><?php echo e(setting('description_contact')); ?></p>  
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2035.4213760960808!2d18.081945816154498!3d59.32591851833804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465f9d5641a77669%3A0xe02744b36aab9f53!2sExercisplan%204%2C%20111%2049%20Stockholm%2C%20Sweden!5e0!3m2!1sen!2sbd!4v1619717152047!5m2!1sen!2sbd"></iframe>
                </div>

                <div class="contact-info">
                    <ul>
                        <li><i class="icofont-google-map"></i> <?php echo e(setting('address')); ?></li>
                        <li><i class="icofont-envelope"></i> <a href="#"><span class="__cf_email__" data-cfemail="e99e88859b9c9aa98e84888085c78a8684"><?php echo e(setting('email')); ?></span></a></li>
                        <li><i class="icofont-phone"></i> <a href="#"><?php echo e(setting('phone')); ?></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="contact-form">
                    <h2>Stay Connected</h2>

                    <form id="contactForm2" action="<?php echo e(route('contact.store')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Name" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone" class="form-control" required data-error="Please enter your number" placeholder="Phone Number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea placeholder="Message" name="message" id="message" class="form-control" cols="30" rows="4" required data-error="Write your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="alert alert-success" role="alert" id="successMessage2" style="display: none"></div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Send Message</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><?php /**PATH /Volumes/DATA/Projects/Laravel/Work/water-landing/resources/views/frontend/home/contact.blade.php ENDPATH**/ ?>