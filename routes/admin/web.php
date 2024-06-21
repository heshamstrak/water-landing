<?php

<<<<<<< HEAD
Route::middleware(['auth','role:admin|super_admin'])->group(function () {

        Route::name('admin.')->prefix('admin')->group(function () {
=======
Route::middleware([
    // 'localeSessionRedirect',
    // 'localizationRedirect',
    // 'localeViewPath',
    'auth',
    'role:admin|super_admin',
])
    ->group(function () {Route::name('admin.')->group(function () {
>>>>>>> 5ef127c (update)

            //home
            Route::get('/home/top_statistics', 'HomeController@topStatistics')->name('home.top_statistics');
            Route::get('/home/movies_chart', 'HomeController@moviesChart')->name('home.movies_chart');
            Route::get('/', 'HomeController@index')->name('home');

            //role routes
            Route::get('/roles/data', 'RoleController@data')->name('roles.data');
            Route::delete('/roles/bulk_delete', 'RoleController@bulkDelete')->name('roles.bulk_delete');
            Route::resource('roles', 'RoleController');

            //admin routes
            Route::get('/admins/data', 'AdminController@data')->name('admins.data');
            Route::delete('/admins/bulk_delete', 'AdminController@bulkDelete')->name('admins.bulk_delete');
            Route::resource('admins', 'AdminController');

            //user routes
            Route::get('/users/data', 'UserController@data')->name('users.data');
            Route::delete('/users/bulk_delete', 'UserController@bulkDelete')->name('users.bulk_delete');
            Route::resource('users', 'UserController');


            //Blog routes
            Route::get('/blogs/data', 'BlogController@data')->name('blogs.data');
            Route::delete('/blogs/bulk_delete', 'BlogController@bulkDelete')->name('blogs.bulk_delete');
            Route::resource('blogs', 'BlogController');

            //Cateogory routes
            Route::get('/categories/data', 'CategoryController@data')->name('categories.data');
            Route::delete('/categories/bulk_delete', 'CategoryController@bulkDelete')->name('categories.bulk_delete');
            Route::resource('categories', 'CategoryController');

<<<<<<< HEAD
            //Ingredient routes
            Route::get('/ingredients/data', 'IngredientController@data')->name('ingredients.data');
            Route::delete('/ingredients/bulk_delete', 'IngredientController@bulkDelete')->name('ingredients.bulk_delete');
            Route::resource('ingredients', 'IngredientController');

            //Weight routes
            Route::get('/weights/data', 'WeightController@data')->name('weights.data');
            Route::delete('/weights/bulk_delete', 'WeightController@bulkDelete')->name('weights.bulk_delete');
            Route::resource('weights', 'WeightController');

            //Product routes
            Route::get('/products/data', 'ProductController@data')->name('products.data');
            Route::delete('/products/bulk_delete', 'ProductController@bulkDelete')->name('products.bulk_delete');
            Route::resource('products', 'ProductController');

            //Orders routes
            Route::get('/orders/data', 'OrderController@data')->name('orders.data');
            Route::delete('/orders/bulk_delete', 'OrderController@bulkDelete')->name('orders.bulk_delete');
            Route::resource('orders', 'OrderController');

            //Galleries routes
            Route::get('/galleries/data', 'GalleryController@data')->name('galleries.data');
            Route::delete('/galleries/bulk_delete', 'GalleryController@bulkDelete')->name('galleries.bulk_delete');
            Route::resource('galleries', 'GalleryController');
=======
            //Profolio routes
            Route::get('/profolios/data', 'ProfolioController@data')->name('profolios.data');
            Route::delete('/profolios/bulk_delete', 'ProfolioController@bulkDelete')->name('profolios.bulk_delete');
            Route::resource('profolios', 'ProfolioController');

            //Feature routes
            Route::get('/features/data', 'FeatureController@data')->name('features.data');
            Route::delete('/features/bulk_delete', 'FeatureController@bulkDelete')->name('features.bulk_delete');
            Route::resource('features', 'FeatureController');

            //Service routes
            Route::get('/services/data', 'ServiceController@data')->name('services.data');
            Route::delete('/services/bulk_delete', 'ServiceController@bulkDelete')->name('services.bulk_delete');
            Route::resource('services', 'ServiceController');

            //Skill routes
            Route::get('/skills/data', 'SkillController@data')->name('skills.data');
            Route::delete('/skills/bulk_delete', 'SkillController@bulkDelete')->name('skills.bulk_delete');
            Route::resource('skills', 'SkillController');

            //Testimonials routes
            Route::get('/testimonials/data', 'TestimonialController@data')->name('testimonials.data');
            Route::delete('/testimonials/bulk_delete', 'TestimonialController@bulkDelete')->name('testimonials.bulk_delete');
            Route::resource('testimonials', 'TestimonialController');


            //Partners routes
            Route::get('/partners/data', 'PartnerController@data')->name('partners.data');
            Route::delete('/partners/bulk_delete', 'PartnerController@bulkDelete')->name('partners.bulk_delete');
            Route::resource('partners', 'PartnerController');

            //Differents routes
            Route::get('/differents/data', 'DifferentController@data')->name('differents.data');
            Route::delete('/differents/bulk_delete', 'DifferentController@bulkDelete')->name('differents.bulk_delete');
            Route::resource('differents', 'DifferentController');
>>>>>>> 5ef127c (update)



            //Contact Us routes
            Route::get('/contacts/data', 'ContactController@data')->name('contacts.data');
            Route::delete('/contacts/bulk_delete', 'ContactController@bulkDelete')->name('contacts.bulk_delete');
            Route::get('/contacts/reply/{contact}', 'ContactController@reply')->name('contacts.reply');
            Route::post('/contacts/reply/{contact}', 'ContactController@store_reply')->name('contacts.reply.store');
            Route::resource('contacts', 'ContactController');
<<<<<<< HEAD
=======

            //Newsletter
            Route::get('/newsletters/data', 'NewsletterController@data')->name('newsletters.data');
            Route::delete('/newsletters/bulk_delete', 'ContactController@bulkDelete')->name('newsletters.bulk_delete');
            Route::resource('newsletters', 'NewsletterController');
>>>>>>> 5ef127c (update)

            //setting routes
            Route::get('/settings/general', 'SettingController@general')->name('settings.general');
            Route::resource('settings', 'SettingController')->only(['store']);

            //profile routes
            Route::get('/profile/edit', 'ProfileController@edit')->name('profile.edit');
            Route::put('/profile/update', 'ProfileController@update')->name('profile.update');

            Route::name('profile.')->namespace('Profile')->group(function () {
                //password routes
                Route::get('/password/edit', 'PasswordController@edit')->name('password.edit');
                Route::put('/password/update', 'PasswordController@update')->name('password.update');
            });

        });

    });
