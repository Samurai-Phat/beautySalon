<?php
/**
 * Created by PhpStorm.
 * User: phatlv
 * Date: 2019-08-25
 * Time: 13:08
 */



$namespace = 'App\Modules\Admin\Controllers';

Route::group(
    ['module'=>'Admin', 'namespace' => $namespace],
    function() {
        Route::get('admin', [
            # middle here
            'as' => 'index',
            'uses' => 'AdminController@index'
        ]);
    }
);
