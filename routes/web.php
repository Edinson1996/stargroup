<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'MainController@home')->name("index");
Route::get('/nosotros', 'MainController@about')->name("about");
Route::get('/servicios', 'MainController@services')->name("services");
Route::get('/catalogo', 'MainController@catalog')->name("catalog");
Route::get('/blog', 'MainController@blog')->name("blog");
Route::get('/blog/{post:slug}', 'MainController@blogSingle')->name('blog-single');
Route::get('/contactanos', 'MainController@contact')->name("contact");

Route::group(['prefix'=>'panel','middleware'=>'auth'],function(){
    Route::get('/', function(){
        return redirect(route('sliders.index'));
    })->name('sliders.index');

    Route::get('/sliders', 'SliderController@index')->name('sliders.index');
    Route::get('/sliders/create', 'SliderController@create')->name('sliders.create');
    Route::get('/sliders/edit/{slider}', 'SliderController@edit')->name('sliders.edit');
    Route::post('/sliders/', 'SliderController@store')->name('sliders.store');
    Route::put('/sliders/update/{slider}', 'SliderController@update')->name('sliders.update');
    Route::delete('/sliders/{slider}', 'SliderController@destroy')->name('sliders.delete');

    Route::get('/nosotros', 'PanelController@abouts')->name('abouts.index');

    Route::get('/equipo', 'PanelController@teams')->name('teams.index');
    Route::get('/teams/edit/{team}', 'PanelController@teamEdit')->name('teams.edit');
    Route::put('/teams/update/{team}', 'PanelController@teamUpdate')->name('teams.update');

    Route::get('/sections/edit/{section}', 'PanelController@sectionEdit')->name('sections.edit');
    Route::put('/sections/update/{section}', 'PanelController@sectionUpdate')->name('sections.update');

	Route::get('/servicios', 'PanelController@services')->name('services.index');
    Route::get('/services/edit/{service}', 'PanelController@serviceEdit')->name('services.edit');
    Route::put('/services/update/{service}', 'PanelController@serviceUpdate')->name('services.update');

    Route::get('/estrategias', 'PanelController@strategies')->name('strategies.index');
    Route::get('/estrategias/edit/{strategy}', 'PanelController@strategyEdit')->name('strategies.edit');
    Route::put('/estrategias/update/{strategy}', 'PanelController@strategyUpdate')->name('strategies.update');

    Route::get('/clientes', 'ImageController@index')->name('clients.index');
    Route::get('/clientes/create', 'ImageController@create')->name('clients.create');
    Route::get('/clientes/edit/{image}', 'ImageController@edit')->name('clients.edit');
    Route::post('/clientes/', 'ImageController@store')->name('clients.store');
    Route::put('/clientes/update/{image}', 'ImageController@update')->name('clients.update');
    Route::delete('/clientes/{image}', 'ImageController@destroy')->name('clients.delete');

    Route::get('/quienes-somos', 'PanelController@about')->name('about.index');
    Route::put('/about-update/{about}', 'PanelController@aboutUpdate')->name('about.update');

    Route::get('/historia', 'PanelController@history')->name('history.index');
    Route::get('/historia/edit/{about}', 'PanelController@historyEdit')->name('history.edit');

    Route::get('/empresa', 'PanelController@enterprise')->name('enterprise.index');
    Route::get('/empresa/edit/{about}', 'PanelController@enterpriseEdit')->name('enterprise.edit');

    Route::get('/estadisticas', 'PanelController@statistic')->name('statistics.index');
    Route::get('/estadisticas/edit/{about}', 'PanelController@statisticEdit')->name('statistics.edit');

    Route::get('/contacto', 'PanelController@contact')->name('contact.index');

    Route::get('/productos', 'ProductController@index')->name('products.index');
    Route::get('/productos/table', 'ProductController@table')->name('products.table');
    Route::get('/productos/nuevo', 'ProductController@create')->name('products.create');
    Route::post('/productos', 'ProductController@store')->name('products.store');
    Route::get('/productos/{product}/editar', 'ProductController@edit')->name('products.edit');
    Route::put('/productos/{product}', 'ProductController@update')->name('products.update');
    Route::get('/productos/papelera', 'ProductController@trashed')->name('products.trashed');
    Route::get('/productosTrashed/table', 'ProductController@trashedTable')->name('products.trashedTable');
    Route::patch('/productos/{product}/papelera', 'ProductController@trash')->name('products.trash');
    Route::get('/productos/restore/{product}', 'ProductController@restore')->name('products.restore');
    Route::delete('/productos/{product}', 'ProductController@destroy')->name('products.destroy');

    Route::get('/posts', 'PostController@index')->name('posts.index');
    Route::get('/posts/table', 'PostController@table')->name('posts.table');
    Route::get('/posts/crear', 'PostController@create')->name('posts.create');
    Route::post('/posts', 'PostController@store')->name('posts.store');
    Route::get('/posts/editar/{post}', 'PostController@edit')->name('posts.edit');
    Route::put('/posts/{post}', 'PostController@update')->name('posts.update');
    Route::delete('/posts/{post}', 'PostController@destroy')->name('posts.destroy');

    Route::get('/categories', 'CategoryController@index')->name('categories.index');
    Route::get('/categories/create', 'CategoryController@create')->name('categories.create');
    Route::get('/categories/edit/{category}', 'CategoryController@edit')->name('categories.edit');
    Route::post('/categories/', 'CategoryController@store')->name('categories.store');
    Route::put('/categories/update/{category}', 'CategoryController@update')->name('categories.update');
    Route::delete('/categories/{category}', 'CategoryController@destroy')->name('categories.delete');

    Route::get('/mensajes', 'MessageController@index')->name('messages.index');
    Route::get('/mensajes/table', 'MessageController@table')->name('messages.table');
    Route::post('/mensajes', 'MessageController@store')->name('messages.store');

    Route::get('/baners', 'PanelController@banners')->name('banners.index');
    Route::get('/banners/edit/{banner}', 'PanelController@bannerEdit')->name('banners.edit');
    Route::put('/banners/{banner}', 'PanelController@bannerUpdate')->name('banners.update');

    Route::post('/libro-reclamaciones', 'PanelController@complaintsBook')->name('complaintsBook');
});

Auth::routes(['register'=>'false']);

Route::get('/home', function(){
    return redirect()->route("sliders.index");
})->name('home');
