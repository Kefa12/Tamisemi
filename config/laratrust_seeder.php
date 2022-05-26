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
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'administrator' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'Weo' => [
            'users1' => 'c,r,u,d',
            'profile1' => 'r,u'
        ],
        'DEO' => [
            'users2' => 'c,r,u,d',
            'profile2' => 'r,u'
        ],
        'DED' => [
            'users3' => 'c,r,u,d',
            'profile3' => 'r,u'
        ],
        'Health_Worker' => [
            'module_3_name' => 'c,r,u,d',
        ],
        'Tamisemi_Director' => [
            'profile5' => 'r,u',
        ],
        'Headmaster' => [
            'profile3' => 'r,u',
        ],
        'Teacher' => [
            'module_2_name' => 'c,r,u,d',
        ]
     
    ],
   

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
