<?php


//site routes
Route::redirect('/', '/index');
Route::group(['namespace' => 'Site'], function () {
Route::get('/index','SiteController@index')->name('site.index');
Route::get('/about','SiteController@about')->name('site.about');
Route::get('/contact','SiteController@contact')->name('site.contact');
Route::get('/faq','SiteController@faq')->name('site.faq');
Route::get('/team','SiteController@team')->name('site.team');

});


//member auth
Route::group(['namespace' => 'Member'], function () {
    //login
Route::get('/member/signin','auth\LoginController@showMemberLoginForm')->name('site.memberloginform')->middleware('memberauth');
Route::post('/member/signin/post','auth\LoginController@memberLogin')->name('site.memberloginpost');
//register
Route::get('/member/signup','auth\RegisterController@showMemberRegisterForm')->name('site.memberregform')->middleware('memberauth');
Route::post('/member/signup/post','auth\RegisterController@memberregister')->name('site.memberregpost');
//reset password
Route::get('/member/password/reset','auth\ForgotPasswordController@showLinkReqForm')->name('site.memberresetpwd');
Route::post('/member/password/email','auth\ForgotPasswordController@sendResLinkEmail')->name('site.memberpwdemail');
Route::get('/member/password/reset/{token}','auth\ResetPasswordController@showResetForm')->name('site.membertoken');
Route::post('/member/password/reset/post','auth\ResetPasswordController@reset')->name('site.memberresetpwd.post');
});



//Member Dashboard
Route::group(['namespace' => 'Member'], function () {
    Route::get('/member/index','HomeController@index')->name('member.index');
    Route::get('/member/logout','HomeController@logout')->name('member.logout');

    //shares
 Route::resource('membershares','SharesController');
 Route::resource('membersavings','SavingsController');
 //profile
 Route::get('/member/profile','auth\ProfileController@profile')->name('member.profile');
 Route::post('/member/change/pwd','auth\ProfileController@changepwd')->name('member.changepwd');
    });


Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::post('users/media', 'UsersController@storeMedia')->name('users.storeMedia');
    Route::post('users/ckmedia', 'UsersController@storeCKEditorImages')->name('users.storeCKEditorImages');
    Route::post('users/parse-csv-import', 'UsersController@parseCsvImport')->name('users.parseCsvImport');
    Route::post('users/process-csv-import', 'UsersController@processCsvImport')->name('users.processCsvImport');
    Route::resource('users', 'UsersController');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // Member
    Route::get('members/activate/{member}', 'MemberController@activate')->name('members.activate');
    Route::get('members/deactivate/{member}', 'MemberController@deactivate')->name('members.deactivate');
    Route::get('members/approve/{member}', 'MemberController@approve')->name('members.approve');
    Route::get('members/deapprove/{member}', 'MemberController@deapprove')->name('members.deapprove');
    Route::delete('members/destroy', 'MemberController@massDestroy')->name('members.massDestroy');
    Route::post('members/media', 'MemberController@storeMedia')->name('members.storeMedia');
    Route::post('members/ckmedia', 'MemberController@storeCKEditorImages')->name('members.storeCKEditorImages');
    Route::post('members/parse-csv-import', 'MemberController@parseCsvImport')->name('members.parseCsvImport');
    Route::post('members/process-csv-import', 'MemberController@processCsvImport')->name('members.processCsvImport');
    Route::post('member/shares', 'MemberController@getshares')->name('member.shares');
    Route::post('member/savings/shares', 'MemberController@getsavingshares')->name('member.savingshares');
    Route::resource('members', 'MemberController');

    // Share
    Route::delete('shares/destroy', 'ShareController@massDestroy')->name('shares.massDestroy');
    Route::post('shares/parse-csv-import', 'ShareController@parseCsvImport')->name('shares.parseCsvImport');
    Route::post('shares/process-csv-import', 'ShareController@processCsvImport')->name('shares.processCsvImport');
    Route::resource('shares', 'ShareController');

    // Savings
    Route::delete('savings/destroy', 'SavingsController@massDestroy')->name('savings.massDestroy');
    Route::post('savings/parse-csv-import', 'SavingsController@parseCsvImport')->name('savings.parseCsvImport');
    Route::post('savings/process-csv-import', 'SavingsController@processCsvImport')->name('savings.processCsvImport');
    Route::resource('savings', 'SavingsController');

    // Setting
    Route::delete('settings/destroy', 'SettingController@massDestroy')->name('settings.massDestroy');
    Route::resource('settings', 'SettingController');

    // Faq
    Route::delete('faqs/destroy', 'FaqController@massDestroy')->name('faqs.massDestroy');
    Route::post('faqs/media', 'FaqController@storeMedia')->name('faqs.storeMedia');
    Route::post('faqs/ckmedia', 'FaqController@storeCKEditorImages')->name('faqs.storeCKEditorImages');
    Route::resource('faqs', 'FaqController');

    // Team
    Route::delete('teams/destroy', 'TeamController@massDestroy')->name('teams.massDestroy');
    Route::post('teams/media', 'TeamController@storeMedia')->name('teams.storeMedia');
    Route::post('teams/ckmedia', 'TeamController@storeCKEditorImages')->name('teams.storeCKEditorImages');
    Route::resource('teams', 'TeamController');

    // About Us
    Route::delete('about-uss/destroy', 'AboutUsController@massDestroy')->name('about-uss.massDestroy');
    Route::post('about-uss/media', 'AboutUsController@storeMedia')->name('about-uss.storeMedia');
    Route::post('about-uss/ckmedia', 'AboutUsController@storeCKEditorImages')->name('about-uss.storeCKEditorImages');
    Route::resource('about-uss', 'AboutUsController');

    Route::get('global-search', 'GlobalSearchController@search')->name('globalSearch');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
