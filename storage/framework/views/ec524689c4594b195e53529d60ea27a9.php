<?php $__env->startSection('content'); ?>

<div class="card card-custom gutter-b">
  <div class="card-header flex-wrap py-3">
      <div class="card-title">
          <h3 class="card-label text-capitalize">
              Settings
          </h3>
      </div>
  </div>
  <div class="card-body">
    <form action="<?php echo e(route('admin.settings.store')); ?>" method="post" enctype="multipart/form-data" id="setting-form">
      <?php echo csrf_field(); ?>
      <?php echo method_field('post'); ?>

      <?php echo $__env->make('admin.partials._errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <h6>General Setting</h6>
      <div class="card card-custom gutter-b">
        <div class="card-header card-header-tabs-line">
            <div class="card-toolbar">
                <ul class="nav nav-tabs nav-bold nav-tabs-line">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_4">
                            <span class="nav-icon"><i class="flaticon2-chat-1"></i></span>
                            <span class="nav-text">Main Setting</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_4">
                            <span class="nav-icon"><i class="flaticon2-chat-1"></i></span>
                            <span class="nav-text">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_3_4">
                            <span class="nav-icon"><i class="flaticon2-drop"></i></span>
                            <span class="nav-text">Social Links</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_4_4">
                            <span class="nav-icon"><i class="flaticon2-drop"></i></span>
                            <span class="nav-text">Images</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_5_4">
                            <span class="nav-icon"><i class="flaticon2-drop"></i></span>
                            <span class="nav-text">Counter</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_6_4">
                            <span class="nav-icon"><i class="flaticon2-drop"></i></span>
                            <span class="nav-text">CTA</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="kt_tab_pane_1_4" role="tabpanel" aria-labelledby="kt_tab_pane_2_4">
                    <h6>Main Setting</h6>
                    <?php $name = 'email' ?>
                    <div class="form-group">
                        <label for="<?php echo e($name); ?>" class="text-capitalize"><?php echo e($name); ?> :</label>
                        <input type="text" name="<?php echo e($name); ?>" class="form-control" id="<?php echo e($name); ?>" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                    </div>
                    <?php $name = 'phone' ?>
                    <div class="form-group">
                        <label for="<?php echo e($name); ?>" class="text-capitalize"><?php echo e($name); ?> :</label>
                        <input type="text" name="<?php echo e($name); ?>" class="form-control" id="<?php echo e($name); ?>" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                    </div>
                    <?php $name = 'address' ?>
                    <div class="form-group">
                        <label for="<?php echo e($name); ?>" class="text-capitalize"><?php echo e($name); ?> :</label>
                        <input type="text" name="<?php echo e($name); ?>" class="form-control" id="<?php echo e($name); ?>" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                    </div>
                    <?php $name = 'location' ?>
                    <div class="form-group">
                        <label for="<?php echo e($name); ?>" class="text-capitalize"><?php echo e($name); ?> :</label>
                        <input type="text" name="<?php echo e($name); ?>" class="form-control" id="<?php echo e($name); ?>" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                    </div>
                </div> 
                <div class="tab-pane fade" id="kt_tab_pane_2_4" role="tabpanel" aria-labelledby="kt_tab_pane_1_4">

                  <div class="home">
                    <div class="row">
                      <div class="col-md-6">
                        
                        <?php $name = 'main_title_home' ?>
                        <div class="form-group">
                            <label class="text-capitalize">Main Title Home</label>
                            <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        
                        <?php $name = 'title_home' ?>
                        <div class="form-group">
                            <label class="text-capitalize">Home Title</label>
                            <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                        </div>
                      </div>
                    </div>
                    
                    <?php $name = 'video_home' ?>
                    <div class="form-group">
                        <label class="text-capitalize">Video Title</label>
                        <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                    </div>

                    
                    <?php $name = 'description_home' ?>
                    <div class="form-group">
                        <label class="text-capitalize">Home Description</label>
                        <textarea name="<?php echo e($name); ?>" class="form-control" cols="30" rows="10"><?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?></textarea>
                    </div>  
                  </div>
     
                  <hr>

                  <div class="feature">
                    <h4>Feature</h4>
                    <div class="row">
                      <div class="col-md-6">
                        
                        <?php $name = 'main_title_feature' ?>
                        <div class="form-group">
                            <label class="text-capitalize">Main Title Feature</label>
                            <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        
                        <?php $name = 'title_feature' ?>
                        <div class="form-group">
                            <label class="text-capitalize">Feature Title</label>
                            <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                        </div>
                      </div>
                    </div>
                    
                    <?php $name = 'description_feature' ?>
                    <div class="form-group">
                        <label class="text-capitalize">Feature Description</label>
                        <textarea name="<?php echo e($name); ?>" class="form-control" cols="30" rows="10"><?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?></textarea>
                    </div>    
                  </div>

                  <hr>

                  <div class="about">
                    <h4>About Us</h4>
                    <div class="row">
                      <div class="col-md-6">
                        
                        <?php $name = 'main_title_about' ?>
                        <div class="form-group">
                            <label class="text-capitalize">Main Title About</label>
                            <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        
                        <?php $name = 'title_about' ?>
                        <div class="form-group">
                            <label class="text-capitalize">About Title</label>
                            <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                        </div>
                      </div>
                    </div>
                    
                    <?php $name = 'description_about' ?>
                    <div class="form-group">
                        <label class="text-capitalize">About Description</label>
                        
                        <textarea name="<?php echo e($name); ?>" id="<?php echo e($name); ?>" class="form-control" cols="30" rows="10"><?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?></textarea>
                    </div> 
                  </div>
             
                  
                  <hr>

                  <div class="service">
                    <h4>Services</h4>
                    <div class="row">
                      <div class="col-md-6">
                        
                        <?php $name = 'main_title_service' ?>
                        <div class="form-group">
                            <label class="text-capitalize">Main Title Service</label>
                            <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        
                        <?php $name = 'title_service' ?>
                        <div class="form-group">
                            <label class="text-capitalize">Service Title</label>
                            <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                        </div>
                      </div>
                    </div>
                    
                    <?php $name = 'description_service' ?>
                    <div class="form-group">
                        <label class="text-capitalize">Service Description</label>
                        <textarea name="<?php echo e($name); ?>" class="form-control" cols="30" rows="10"><?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?></textarea>
                    </div> 
                  </div>
              
                  <hr>

                  <div class="skill">
                    <h4>Skills</h4>
                    <div class="row">
                      <div class="col-md-6">
                        
                        <?php $name = 'main_title_skill' ?>
                        <div class="form-group">
                            <label class="text-capitalize">Main Title Skill</label>
                            <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        
                        <?php $name = 'title_skill' ?>
                        <div class="form-group">
                            <label class="text-capitalize">Skill Title</label>
                            <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                        </div>
                      </div>
                    </div>
                    
                    <?php $name = 'description_skill' ?>
                    <div class="form-group">
                        <label class="text-capitalize">Skill Description</label>
                        <textarea name="<?php echo e($name); ?>" class="form-control" cols="30" rows="10"><?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?></textarea>
                    </div>      
                             
                  </div>
         
                  <hr>

                  <div class="different">
                    <h4>Different</h4>
                    <div class="row">
                      <div class="col-md-6">
                        
                        <?php $name = 'main_title_different' ?>
                        <div class="form-group">
                            <label class="text-capitalize">Main Title Different</label>
                            <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        
                        <?php $name = 'title_different' ?>
                        <div class="form-group">
                            <label class="text-capitalize">Different Title</label>
                            <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                        </div>
                      </div>
                    </div>
                    
                    <?php $name = 'description_different' ?>
                    <div class="form-group">
                        <label class="text-capitalize">Different Description</label>
                        <textarea name="<?php echo e($name); ?>" class="form-control" cols="30" rows="10"><?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?></textarea>
                    </div> 
                  </div>
               
                  <hr>

                  <div class="portfolio">
                    <h4>Portfolio</h4>
                    <div class="row">
                      <div class="col-md-6">
                        
                        <?php $name = 'main_title_portfolio' ?>
                        <div class="form-group">
                            <label class="text-capitalize">Main Title Portfolio</label>
                            <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        
                        <?php $name = 'title_portfolio' ?>
                        <div class="form-group">
                            <label class="text-capitalize">Portfolio Title</label>
                            <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                        </div>
                      </div>
                    </div>
                    
                    <?php $name = 'description_portfolio' ?>
                    <div class="form-group">
                        <label class="text-capitalize">Portfolio Description</label>
                        <textarea name="<?php echo e($name); ?>" class="form-control" cols="30" rows="10"><?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?></textarea>
                    </div>
                  </div>
                          
                  <hr>

                  <div class="testimonial">
                    <h4>Testimonial</h4>
                    <div class="row">
                      <div class="col-md-6">
                        
                        <?php $name = 'main_title_testimonial' ?>
                        <div class="form-group">
                            <label class="text-capitalize">Main Title Testimonial</label>
                            <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        
                        <?php $name = 'title_testimonial' ?>
                        <div class="form-group">
                            <label class="text-capitalize">Testimonial Title</label>
                            <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                        </div>
                      </div>
                    </div>
                    
                    <?php $name = 'description_testimonial' ?>
                    <div class="form-group">
                        <label class="text-capitalize">Testimonial Description</label>
                        <textarea name="<?php echo e($name); ?>" class="form-control" cols="30" rows="10"><?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?></textarea>
                    </div>      
                          
                  </div>
                
                  <hr>

                  <div class="blog">
                    <h4>Blog</h4>
                    <div class="row">
                      <div class="col-md-6">
                        
                        <?php $name = 'main_title_blog' ?>
                        <div class="form-group">
                            <label class="text-capitalize">Main Title Blog</label>
                            <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        
                        <?php $name = 'title_blog' ?>
                        <div class="form-group">
                            <label class="text-capitalize">Blog Title</label>
                            <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                        </div>
                      </div>
                    </div>
                    
                    <?php $name = 'description_blog' ?>
                    <div class="form-group">
                        <label class="text-capitalize">Blog Description</label>
                        <textarea name="<?php echo e($name); ?>" class="form-control" cols="30" rows="10"><?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?></textarea>
                    </div>  
                  </div>

                  <hr>

                  <div class="contact">
                    <h4>Contact Us</h4>
                    <div class="row">
                      <div class="col-md-6">
                        
                        <?php $name = 'main_title_contact' ?>
                        <div class="form-group">
                            <label class="text-capitalize">Main Title Contact</label>
                            <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        
                        <?php $name = 'title_contact' ?>
                        <div class="form-group">
                            <label class="text-capitalize">Contact Title</label>
                            <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                        </div>
                      </div>
                    </div>
                    
                    <?php $name = 'description_contact' ?>
                    <div class="form-group">
                        <label class="text-capitalize">Contact Description</label>
                        <textarea name="<?php echo e($name); ?>" class="form-control" cols="30" rows="10"><?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?></textarea>
                    </div>     
                  </div>
            

                </div>
                <div class="tab-pane fade" id="kt_tab_pane_3_4" role="tabpanel" aria-labelledby="kt_tab_pane_2_4">
                    <h6>Social Links</h6>
                    <?php $socials = ['facebook', 'twitter', 'linkedin', 'youtube', 'instagram']; ?>
                    <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="form-group">
                          <label for="<?php echo e($social); ?>" class="text-capitalize"><?php echo e($social); ?> :</label>
                          <input type="text" name="<?php echo e($social); ?>" class="form-control" id="<?php echo e($social); ?>" value="<?php echo e(old($social,  setting($social) != null ? setting($social) : '')); ?>">
                          
                      </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="tab-pane fade" id="kt_tab_pane_4_4" role="tabpanel" aria-labelledby="kt_tab_pane_3_4">

                  <div class="home">
                      <h4>Home</h4>
                      <?php $name = 'logo_image' ?>
                      <div class="form-group">
                        <label class="text-capitalize">Logo Image</label>
                        <input type="file" name="<?php echo e($name); ?>" id="input-file-now" class="<?php echo e($name); ?>" data-show-remove="false" <?php if(setting($name) != null): ?> data-default-file="<?php echo e(Storage::url('public/uploads/settings/'.setting($name))); ?>" data-show-remove="false" alue="<?php echo e(old($name, setting($name))); ?>"<?php endif; ?>  data-height="250"/>
                      </div> 
                      
                  </div>

                  <hr>
                  
                  <div class="about">
                      <h4>About Us</h4>
                      <div class="row">
                        <div class="col-md-6">
                          <?php $name = 'about_image_one' ?>
                          <div class="form-group">
                            <label class="text-capitalize">About Image One</label>
                            <input type="file" name="<?php echo e($name); ?>" id="input-file-now" class="<?php echo e($name); ?>" data-show-remove="false" <?php if(setting($name) != null): ?> data-default-file="<?php echo e(Storage::url('public/uploads/settings/'.setting($name))); ?>" data-show-remove="false" alue="<?php echo e(old($name, setting($name))); ?>"<?php endif; ?>  data-height="250"/>
                          </div> 
                        </div>
                        <div class="col-md-6">
                          <?php $name = 'about_image_two' ?>
                          <div class="form-group">
                            <label class="text-capitalize">About Image Two</label>
                            <input type="file" name="<?php echo e($name); ?>" id="input-file-now" class="<?php echo e($name); ?>" data-show-remove="false" <?php if(setting($name) != null): ?> data-default-file="<?php echo e(Storage::url('public/uploads/settings/'.setting($name))); ?>" data-show-remove="false" alue="<?php echo e(old($name, setting($name))); ?>"<?php endif; ?>  data-height="250"/>
                          </div> 
                        </div>
                        <div class="col-md-6">
                          <?php $name = 'about_image_three' ?>
                          <div class="form-group">
                            <label class="text-capitalize">About Image Three</label>
                            <input type="file" name="<?php echo e($name); ?>" id="input-file-now" class="<?php echo e($name); ?>" data-show-remove="false" <?php if(setting($name) != null): ?> data-default-file="<?php echo e(Storage::url('public/uploads/settings/'.setting($name))); ?>" data-show-remove="false" alue="<?php echo e(old($name, setting($name))); ?>"<?php endif; ?>  data-height="250"/> 
                          </div> 
                        </div>
                        <div class="col-md-6">
                          <?php $name = 'about_image_four' ?>
                          <div class="form-group">
                            <label class="text-capitalize">About Image Four</label>
                            <input type="file" name="<?php echo e($name); ?>" id="input-file-now" class="<?php echo e($name); ?>" data-show-remove="false" <?php if(setting($name) != null): ?> data-default-file="<?php echo e(Storage::url('public/uploads/settings/'.setting($name))); ?>" data-show-remove="false" alue="<?php echo e(old($name, setting($name))); ?>"<?php endif; ?>  data-height="250"/> 
                          </div> 
                        </div>
                      </div>
                  </div>

                  <hr>

                  <div class="skill">
                      <h4>Skill</h4>
                      <?php $name = 'skill_image' ?>
                      <div class="form-group">
                        <label class="text-capitalize">Skill Image</label>
                        <input type="file" name="<?php echo e($name); ?>" id="input-file-now" class="<?php echo e($name); ?>" data-show-remove="false" <?php if(setting($name) != null): ?> data-default-file="<?php echo e(Storage::url('public/uploads/settings/'.setting($name))); ?>" data-show-remove="false" alue="<?php echo e(old($name, setting($name))); ?>"<?php endif; ?>  data-height="250"/>
                      </div> 
                  </div>

                </div>
                <div class="tab-pane fade" id="kt_tab_pane_5_4" role="tabpanel" aria-labelledby="kt_tab_pane_5_4">

                  <h4>Counter</h4>
                  <div class="row">

                    <div class="col-md-3">
                      
                      <?php $name = 'title_counter_one' ?>
                      <div class="form-group">
                          <label class="text-capitalize">Title Counter One</label>
                          <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>" >
                      </div>
                      
                      <?php $name = 'icon_counter_one' ?>
                      <div class="form-group">
                          <label class="text-capitalize">Icon Counter One | get icon form <a href="https://icofont.com"> IcoFont</a></label>
                          <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>" >
                      </div>
                      
                      <?php $name = 'count_counter_one' ?>
                      <div class="form-group">
                          <label class="text-capitalize">Count Counter One</label>
                          <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>" >
                      </div>
                    </div>

                    <div class="col-md-3">
                      
                      <?php $name = 'title_counter_two' ?>
                      <div class="form-group">
                          <label class="text-capitalize">Title Counter two</label>
                          <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>" >
                      </div>
                      
                      <?php $name = 'icon_counter_two' ?>
                      <div class="form-group">
                          <label class="text-capitalize">Icon Counter two | get icon form <a href="https://icofont.com"> IcoFont</a></label>
                          <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>" >
                      </div>
                      
                      <?php $name = 'count_counter_two' ?>
                      <div class="form-group">
                          <label class="text-capitalize">Count Counter Two</label>
                          <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>" >
                      </div>
                    </div>

                    <div class="col-md-3">
                      
                      <?php $name = 'title_counter_three' ?>
                      <div class="form-group">
                          <label class="text-capitalize">Title Counter Three</label>
                          <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>" >
                      </div>
                      
                      <?php $name = 'icon_counter_three' ?>
                      <div class="form-group">
                          <label class="text-capitalize">Icon Counter Three | get icon form <a href="https://icofont.com"> IcoFont</a></label>
                          <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>" >
                      </div>
                      
                      <?php $name = 'count_counter_three' ?>
                      <div class="form-group">
                          <label class="text-capitalize">Count Counter Three</label>
                          <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                      </div>
                    </div>

                    <div class="col-md-3">
                      
                      <?php $name = 'title_counter_four' ?>
                      <div class="form-group">
                          <label class="text-capitalize">Title Counter Four</label>
                          <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                      </div>
                      
                      <?php $name = 'icon_counter_four' ?>
                      <div class="form-group">
                          <label class="text-capitalize">Icon Counter Four | get icon form <a href="https://icofont.com"> IcoFont</a></label>
                          <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>" >
                      </div>
                      
                      <?php $name = 'count_counter_four' ?>
                      <div class="form-group">
                          <label class="text-capitalize">Count Counter Four</label>
                          <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>" >
                      </div>
                    </div>

                  </div>
                </div>
                <div class="tab-pane fade" id="kt_tab_pane_6_4" role="tabpanel" aria-labelledby="kt_tab_pane_6_4">

                  <h4>CTA</h4>
                  <?php $name = 'title_cta' ?>
                  <div class="form-group">
                      <label class="text-capitalize">CTA Title</label>
                      <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                  </div>
                
                  
                  <?php $name = 'description_cta' ?>
                  <div class="form-group">
                      <label class="text-capitalize">CTA Description</label>
                      <textarea name="<?php echo e($name); ?>" class="form-control" cols="30" rows="10"><?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?></textarea>
                  </div> 

                  <hr>

                  <h4>Who We Are</h4>

                  <div class="row">
                    <div class="col-md-6">
                      
                      <?php $name = 'main_title_who' ?>
                      <div class="form-group">
                          <label class="text-capitalize">Main Title Who We Are</label>
                          <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                      </div>
                    </div>
                    <div class="col-md-6">
                      
                      <?php $name = 'title_who' ?>
                      <div class="form-group">
                          <label class="text-capitalize">Campony Title Who We Are</label>
                          <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                      </div>
                    </div>
                  </div>
                  
                  <?php $name = 'description_who' ?>
                  <div class="form-group">
                      <label class="text-capitalize">Campony Description</label>
                      <textarea name="<?php echo e($name); ?>" class="form-control" cols="30" rows="10"><?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?></textarea>
                  </div> 

                  
                  <?php $name = 'second_description_who' ?>
                  <div class="form-group">  
                      <label class="text-capitalize">Campony Second Description</label>
                      <textarea name="<?php echo e($name); ?>" class="form-control" cols="30" rows="10"><?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?></textarea>
                  </div> 

                  <hr>

                  <h4>COMPANY</h4>

                  <div class="row">
                    <div class="col-md-6">
                      
                      <?php $name = 'main_title_company' ?>
                      <div class="form-group">
                          <label class="text-capitalize">Main Title Campony</label>
                          <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                      </div>
                    </div>
                    <div class="col-md-6">
                      
                      <?php $name = 'title_company' ?>
                      <div class="form-group">
                          <label class="text-capitalize">Campony Title</label>
                          <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                      </div>
                    </div>
                  </div>
                  
                  <?php $name = 'description_company' ?>
                  <div class="form-group">
                      <label class="text-capitalize">Campony Description</label>
                      <textarea name="<?php echo e($name); ?>" class="form-control" cols="30" rows="10"><?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?></textarea>
                  </div> 

                  <hr>

                  <h4>Partner</h4>

                  <div class="row">
                    <div class="col-md-6">
                      
                      <?php $name = 'main_title_partner' ?>
                      <div class="form-group">
                          <label class="text-capitalize">Main Title Partner</label>
                          <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                      </div>
                    </div>
                    <div class="col-md-6">
                      
                      <?php $name = 'title_partner' ?>
                      <div class="form-group">
                          <label class="text-capitalize">Partner Title</label>
                          <input type="text" name="<?php echo e($name); ?>" autofocus class="form-control" value="<?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?>">
                      </div>
                    </div>
                  </div>
                  
                  <?php $name = 'description_partner' ?>
                  <div class="form-group">
                      <label class="text-capitalize">Partner Description</label>
                      <textarea name="<?php echo e($name); ?>" class="form-control" cols="30" rows="10"><?php echo e(old($name,  setting($name) != null ? setting($name) : '')); ?></textarea>
                  </div> 

                  
                </div>

            </div>
        </div>
      </div>
      <div class="card-footer">
        <div class="row">
            <div class="col-lg-8">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </div>
        </div>
    </div>
    </form>
  </div>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>


<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js" integrity="sha512-bE0ncA3DKWmKaF3w5hQjCq7ErHFiPdH2IGjXRyXXZSOokbimtUuufhgeDPeQPs51AI4XsqDZUK7qvrPZ5xboZg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  $(document).ready(function(){
    $('.logo_image, .home_background_image, .about_image_one, .about_image_two, .about_image_three, .about_image_four, .skill_image').dropify();
  });

  $(".number-tab-stepss").steps({
    headerTag: "h6",
    bodyTag: "fieldset",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: 'Submit'
    },
      onFinished: function (event, currentIndex) {
        var form = $(this);
        form.submit();
      }
  });

  CKEDITOR.replace('description_about', {
    height: 300,
  });

  CKEDITOR.replace('second_description_who', {
    height: 300,
  });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/DATA/Projects/Laravel/Work/water-landing/resources/views/admin/settings.blade.php ENDPATH**/ ?>