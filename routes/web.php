<?php

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

// Route::get('/', function () {return view('welcome');});

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return redirect('dashboard/index'); });

/* Dashboard */
Route::get('dashboard', function () { return redirect('dashboard/index'); });
Route::get('dashboard/index', 'DashboardController@index')->name('dashboard.index');

/* Profile */
Route::get('profile', function () { return redirect('profile/my-profile'); });
Route::get('profile/my-profile', 'ProfileController@myProfile')->name('profile.my-profile');


/* Project */
Route::get('project', function () { return redirect('project/project-list'); });
Route::get('project/project-list', 'ProjectController@projectList')->name('project.project-list');
Route::get('project/taskboard', 'ProjectController@taskboard')->name('project.taskboard');
Route::get('project/ticket-list', 'ProjectController@ticketList')->name('project.ticket-list');
Route::get('project/ticket-detail', 'ProjectController@ticketDetail')->name('project.ticket-detail');

/* File Manager */
Route::get('file-manager', function () { return redirect('file-manager/all'); });
Route::get('file-manager/all', 'FileManagerController@all')->name('file-manager.all');
Route::get('file-manager/documents', 'FileManagerController@documents')->name('file-manager.documents');
Route::get('file-manager/media', 'FileManagerController@media')->name('file-manager.media');
Route::get('file-manager/image', 'FileManagerController@image')->name('file-manager.image');

/* Blog */
Route::get('blog', function () { return redirect('blog/dashboard'); });
Route::get('blog/dashboard', 'BlogController@dashboard')->name('blog.dashboard');
Route::get('blog/new-post', 'BlogController@newPost')->name('blog.new-post');
Route::get('blog/list', 'BlogController@list')->name('blog.list');
Route::get('blog/grid', 'BlogController@grid')->name('blog.grid');
Route::get('blog/detail', 'BlogController@detail')->name('blog.detail');

/* Ecommerce */
Route::get('ecommerce', function () { return redirect('ecommerce/dashboard'); });
Route::get('ecommerce/dashboard', 'EcommerceController@dashboard')->name('ecommerce.dashboard');
Route::get('ecommerce/product', 'EcommerceController@product')->name('ecommerce.product');
Route::get('ecommerce/product-list', 'EcommerceController@productList')->name('ecommerce.product-list');
Route::get('ecommerce/product-detail', 'EcommerceController@productDetail')->name('ecommerce.product-detail');

/* components */
Route::get('components', function () { return redirect('components/ui'); });
Route::get('components/ui', 'ComponentsController@ui')->name('components.ui');
Route::get('components/alerts', 'ComponentsController@alerts')->name('components.alerts');
Route::get('components/collapse', 'ComponentsController@collapse')->name('components.collapse');
Route::get('components/colors', 'ComponentsController@colors')->name('components.colors');
Route::get('components/dialogs', 'ComponentsController@dialogs')->name('components.dialogs');
Route::get('components/list', 'ComponentsController@list')->name('components.list');
Route::get('components/media', 'ComponentsController@media')->name('components.media');
Route::get('components/modals', 'ComponentsController@modals')->name('components.modals');
Route::get('components/notifications', 'ComponentsController@notifications')->name('components.notifications');
Route::get('components/progressbars', 'ComponentsController@progressbars')->name('components.progressbars');
Route::get('components/range', 'ComponentsController@range')->name('components.range');
Route::get('components/sortable', 'ComponentsController@sortable')->name('components.sortable');
Route::get('components/tabs', 'ComponentsController@tabs')->name('components.tabs');
Route::get('components/waves', 'ComponentsController@waves')->name('components.waves');

/* Font Icons */
Route::get('icons', function () { return redirect('icons/material'); });
Route::get('icons/material', 'IconsController@material')->name('icons.material');
Route::get('icons/themify', 'IconsController@themify')->name('icons.themify');
Route::get('icons/weather', 'IconsController@weather')->name('icons.weather');

/* Form */
Route::get('form', function () { return redirect('form/basic'); });
Route::get('form/basic', 'FormController@basic')->name('form.basic');
Route::get('form/advanced', 'FormController@advanced')->name('form.advanced');
Route::get('form/examples', 'FormController@examples')->name('form.examples');
Route::get('form/validation', 'FormController@validation')->name('form.validation');
Route::get('form/wizard', 'FormController@wizard')->name('form.wizard');
Route::get('form/editors', 'FormController@editors')->name('form.editors');
Route::get('form/upload', 'FormController@upload')->name('form.upload');
Route::get('form/summernote', 'FormController@summernote')->name('form.summernote');

/* Tables */
Route::get('tables', function () { return redirect('tables/normal'); });
Route::get('tables/normal', 'TablesController@normal')->name('tables.normal');
Route::get('tables/datatable', 'TablesController@datatable')->name('tables.datatable');
Route::get('tables/editable', 'TablesController@editable')->name('tables.editable');
Route::get('tables/footable', 'TablesController@footable')->name('tables.footable');
Route::get('tables/color', 'TablesController@color')->name('tables.color');

/* Chart */
Route::get('chart', function () { return redirect('chart/echarts'); });
Route::get('chart/echarts', 'ChartController@echarts')->name('chart.echarts');
Route::get('chart/c3', 'ChartController@c3')->name('chart.c3');
Route::get('chart/morris', 'ChartController@morris')->name('chart.morris');
Route::get('chart/flot', 'ChartController@flot')->name('chart.flot');
Route::get('chart/chartjs', 'ChartController@chartjs')->name('chart.chartjs');
Route::get('chart/sparkline', 'ChartController@sparkline')->name('chart.sparkline');
Route::get('chart/knob', 'ChartController@knob')->name('chart.knob');

/* Widgets */
Route::get('widgets', function () { return redirect('widgets/app'); });
Route::get('widgets/app', 'WidgetsController@app')->name('widgets.app');
Route::get('widgets/data', 'WidgetsController@data')->name('widgets.data');

/* Authentication */
Route::get('auth', function () { return redirect('auth/login'); });
Route::get('auth/login', 'AuthenticationController@login')->name('auth.login');
Route::get('auth/register', 'AuthenticationController@register')->name('auth.register');
Route::get('auth/lockscreen', 'AuthenticationController@lockscreen')->name('auth.lockscreen');
Route::get('auth/forgot', 'AuthenticationController@forgot')->name('auth.forgot');
Route::get('auth/page404', 'AuthenticationController@page404')->name('auth.page404');
Route::get('auth/page500', 'AuthenticationController@page500')->name('auth.page500');
Route::get('auth/offline', 'AuthenticationController@offline')->name('auth.offline');
//Route::post('auth/login/','LoginController@login')->name('login');
\Illuminate\Support\Facades\Auth::routes();
/* Pages */
Route::get('pages', function () { return redirect('pages/blank-page'); });
Route::get('pages/blank', 'PagesController@blank')->name('pages.blank');
Route::get('pages/gallery', 'PagesController@gallery')->name('pages.gallery');
Route::get('pages/invoices1', 'PagesController@invoices1')->name('pages.invoices1');
Route::get('pages/invoices2', 'PagesController@invoices2')->name('pages.invoices2');
Route::get('pages/pricing', 'PagesController@pricing')->name('pages.pricing');
Route::get('pages/profile', 'PagesController@profile')->name('pages.profile');
Route::get('pages/search', 'PagesController@search')->name('pages.search');
Route::get('pages/timeline', 'PagesController@timeline')->name('pages.timeline');

/* Maps */
Route::get('map', function () { return redirect('map/google'); });
Route::get('map/yandex', 'MapController@yandex')->name('map.yandex');
Route::get('map/jvector', 'MapController@jvector')->name('map.jvector');

/* Offres */
Route::resource('sales','SalesController');
Route::get('sales/{sale}/delete','SalesController@delete')->name('sales.delete');

/* Users */
Route::resource('users','UsersController');
Route::get('users/{user}/delete','UsersController@delete')->name('users.delete');

/* Prouit */
Route::resource('produits','ProduitsController');
Route::get('produits/{produit}/delete','ProduitsController@delete')->name('produits.delete');



