<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'super_admin' => [
            'roles'         => 'c,r,u,d',
            'admins'        => 'c,r,u,d',
            'users'         => 'c,r,u,d',
            'blogs'         => 'c,r,u,d',
            'abouts'        => 'c,r,u,d',
            'weights'       => 'c,r,u,d',
            'ingredients'   => 'c,r,u,d',
            'categories'    => 'c,r,u,d',
<<<<<<< HEAD
            'products'      => 'c,r,u,d',
            'orders'        => 'c,r,u,d',
=======
            'profolios'     => 'c,r,u,d',
>>>>>>> 5ef127c (update)
            'settings'      => 'c,r,u,d',
            'features'      => 'c,r,u,d',
            'services'      => 'c,r,u,d',
            'skills'        => 'c,r,u,d',
            'testimonials'  => 'c,r,u,d',
            'partners'      => 'c,r,u,d',
            'differents'    => 'c,r,u,d',
        ],
        'admin' => [],
        'user' => [],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
