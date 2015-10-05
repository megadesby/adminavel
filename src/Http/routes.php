<?php

Route::get('admin/test', function() {
    return 'Admin is worked';
});

Route::resource('admin/content','Megadesby\Adminavel\Http\Controllers\Admin\AdminController');
