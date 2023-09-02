<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::post('users/media', 'UsersApiController@storeMedia')->name('users.storeMedia');
    Route::apiResource('users', 'UsersApiController');

    // Share
    Route::apiResource('shares', 'ShareApiController');

    // Savings
    Route::apiResource('savings', 'SavingsApiController');

    // Faq
    Route::post('faqs/media', 'FaqApiController@storeMedia')->name('faqs.storeMedia');
    Route::apiResource('faqs', 'FaqApiController');
});
