<?php

return [

    /*
     |--------------------------------------------------------------------------
     | Porto Settings
     |--------------------------------------------------------------------------
     |
     | This is the namespace all you Actions/Tasks will reside
     |
     */

    'namespace' => 'App\\Containers\\',

    /*
    |--------------------------------------------------------------------------
    | Custom generator stub
    |--------------------------------------------------------------------------
    |
    | If you want to override the default stub this package provides
    | you can enter the path to your own at this point
    |
    */
    'generator' => [
        'action-stub' => app_path('stubs/action.stub'),
        'task-stub' => app_path('stubs/task.stub')
    ]
];
