<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', ['as' => 'admin', 'uses' => 'HomeController@index']);
    Route::get('login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
    Route::post('login', ['as' => 'login', 'uses' => 'Auth\AuthController@postLogin']);
    Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

    Route::get('profile', ['as' => 'profile', 'uses' => 'HomeController@profile']);
    Route::post('profile', ['as' => 'profile_save', 'uses' => 'HomeController@profile_save']);

    Route::group(['prefix' => 'page'], function () {
        /*
            Route::get('/', ['as' => 'page.index', 'uses' => 'PageController@index']);
            Route::post('create', ['as' => 'page.create', 'uses' => 'PageController@create']);
        */

        Route::get('{template}', ['as' => 'page.edit', 'uses' => 'PageController@edit']);
        Route::post('{template}/save', ['as' => 'page.save', 'uses' => 'PageController@save']);
        Route::post('{template}/delete', ['as' => 'page.delete', 'uses' => 'PageController@delete']);
        Route::post('{template}/variable/add', ['as' => 'page.variable.add', 'uses' => 'PageController@variable_add']);
        Route::post('{template}/variable/edit', ['as' => 'page.variable.edit', 'uses' => 'PageController@variable_edit']);
        Route::post('{template}/variable/delete', ['as' => 'page.variable.delete', 'uses' => 'PageController@variable_delete']);
    });

	Route::group(['prefix' => 'flat-reserve'], function () {
		Route::get('/', ['as' => 'flat-reserve.index', 'uses' => 'FlatReserveController@index']);
		Route::get('delete/{id}', ['as' => 'flat-reserve.delete', 'uses' => 'FlatReserveController@delete']);
	});

    Route::group(['prefix' => 'news'], function () {
        Route::get('/', ['as' => 'news.index', 'uses' => 'NewsController@index']);
        Route::post('create', ['as' => 'news.create', 'uses' => 'NewsController@create']);

        Route::get('edit', ['as' => 'news.edit', 'uses' => 'NewsController@edit']);
        Route::get('edit/{id}', ['as' => 'news.editone', 'uses' => 'NewsController@editone']);
        Route::post('update/{id}', ['as' => 'news.update', 'uses' => 'NewsController@update']);
        Route::get('delete/{id}', ['as' => 'news.delete', 'uses' => 'NewsController@delete']);
    });

    Route::group(['prefix' => 'gallery'], function () {
        Route::get('/', ['as' => 'gallery.index', 'uses' => 'GalleryController@index']);
        Route::post('create', ['as' => 'gallery.create', 'uses' => 'GalleryController@create']);

        Route::get('edit', ['as' => 'gallery.edit', 'uses' => 'GalleryController@edit']);
        Route::get('edit/{id}', ['as' => 'gallery.editone', 'uses' => 'GalleryController@editone']);
        Route::post('update/{id}', ['as' => 'gallery.update', 'uses' => 'GalleryController@update']);
        Route::get('delete/{id}', ['as' => 'gallery.delete', 'uses' => 'GalleryController@delete']);
        Route::post('order', ['as' => 'gallery.order', 'uses' => 'GalleryController@order']);
    });

    Route::group(['prefix' => 'stages'], function () {
        Route::get('/', ['as' => 'stage.index', 'uses' => 'StageController@index']);
        Route::post('create', ['as' => 'stage.create', 'uses' => 'StageController@create']);
        Route::post('media/delete', ['as' => 'stage.media.delete', 'uses' => 'StageController@media_delete']);


        Route::get('edit', ['as' => 'stage.edit', 'uses' => 'StageController@edit']);
        Route::get('edit/{id}', ['as' => 'stage.editone', 'uses' => 'StageController@editone']);
        Route::post('update/{id}', ['as' => 'stage.update', 'uses' => 'StageController@update']);
        Route::get('delete/{id}', ['as' => 'stage.delete', 'uses' => 'StageController@delete']);
    });
});

Route::group(['prefix' => 'news'], function () {
    Route::get('/', ['as' => 'public.news.index', 'uses' => 'NewsPublicController@index']);
});

Route::get('news-{news_id}.html', ['as' => 'public.news.more', 'uses' => 'PublicController@newsDetails']);

Route::get('/mail', ['as' => 'test.mail', 'uses' => 'NewsPublicController@email']);
Route::post('/flat-reserve', ['as' => 'reserve.mail', 'uses' => 'MailController@html_email']);

Route::group(['prefix' => 'flats'], function () {
    Route::get('/', ['as' => 'flats.index', 'uses' => 'FlatController@index']);
    Route::get('design', ['as' => 'flats.design', 'uses' => 'FlatController@index_design']);
    Route::get('newdesign', ['as' => 'flats.newdesign', 'uses' => 'FlatController@index_newdesign']);
    Route::post('best-offer', ['as' => 'flats.best-offer', 'uses' => 'FlatController@best_offer']);
    Route::post('filter', ['as' => 'flats.filter', 'uses' => 'FlatController@filter']);

    Route::get('test', ['as' => 'flats.test', 'uses' => 'FlatController@test']);
});

Route::group(['prefix' => 'phone'], function () {
	Route::get('/flats-parametrics.html', ['as' => 'phone_flats.iframe', 'uses' => 'FlatController@phone_index_design']);
	Route::get('/k{corps}-s{section}-f{flat}.html', ['as' => 'phone_flat.card', 'uses' => 'PublicController@phone_card']);
});

Route::get('parametric-search-frame.html', ['as' => 'flats.iframe', 'uses' => 'FlatController@index_design']);

Route::get('import', ['as' => 'flats.import', 'uses' => 'FlatController@import']);

Route::get('api/mortgage-terms', ['as' => 'api.mortgage_terms', 'uses' => 'PublicController@mortgageTerms']);

Route::get('/', ['as' => 'app.main', 'uses' => 'PublicController@show']);


Route::get('k{corps}-s{section}-f{flat}.html', ['as' => 'flat.card', 'uses' => 'PublicController@card']);
Route::get('k{corps}-s{section}.html', ['as' => 'section.card', 'uses' => 'PublicController@section']);
Route::get('novosti_kvartiry_v_rumyantsevo.html', ['as' => 'app.news', 'uses' => 'PublicController@news']);
Route::get('{slug}.html', ['as' => 'app.dynamic', 'uses' => 'PublicController@show']);
