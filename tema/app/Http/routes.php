<?php



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);




	Route::group(['prefix' => 'ui-element'], function()
	{
	    Route::get('/buttons', function() {
	        	return View::make('buttons');
	    });
	    Route::get('/dropdown', function() {
	        	return View::make('dropdown');
	    });
	    Route::get('/modal', function() {
	        	return View::make('modal');
	    });
	    Route::get('/progressbars', function() {
	        	return View::make('progressbars');
	    });
	    Route::get('/alerts', function() {
	        	return View::make('alerts');
	    });
	    Route::get('/typography', function() {
	        	return View::make('typography');
	    });
	    Route::get('/icons', function() {
	        	return View::make('icons');
	    });
	    Route::get('/collapse', function() {
	        	return View::make('collapse');
	    });
	    Route::get('/breadcrumbs', function() {
	        	return View::make('breadcrumbs');
	    });
	    Route::get('/navbar', function() {
	        	return View::make('navbar');
	    });
	    Route::get('/other-elements', function() {
	        	return View::make('other-elements');
	    });
	});

    Route::get('/', function() {
    	return View::make('home');
    });

    Route::get('/panel', function() {
    	return View::make('panel');
    });

    Route::get('/calendar', function() {
    	return View::make('calendar');
    });

    Route::get('/table', function() {
    	return View::make('table');
    });

    Route::get('/grid', function() {
    	return View::make('grid');
    });

    Route::get('/inbox', function() {
    	return View::make('inbox');
    });

    Route::get('/form/elements', function() {
    	return View::make('elements');
    });

    Route::get('/form/components', function() {
    	return View::make('components');
    });

    Route::get('/chart/c3charts', function() {
    	return View::make('c3charts');
    });

    Route::get('/chart/chartjs', function() {
    	return View::make('chartjs');
    });

    Route::get('/404', function() {
    	return View::make('404');
    });

    Route::get('/stats', function() {
    	return View::make('stats');
    });

    Route::get('/paneldocumentation', function() {
    	return View::make('paneldocumentation');
    });

    Route::get('/tabledocumentation', function() {
    	return View::make('tabledocumentation');
    });

    Route::get('messages/invoice', function() {
    	return View::make('invoice');
    });

    Route::get('messages/inbox', function() {
    	return View::make('inbox/inbox');
    });

    Route::get('messages/compose', function() {
    	return View::make('inbox/compose');
    });


    Route::get('/profile', function() {
    	return View::make('profile');
    });


    Route::get('/blank', function() {
    	return View::make('blank');
    });


    Route::get('/docs', function() {
        return View::make('docs');
    });


    /**
     * API to set the Session Variable for API
     */

    Route::get('api/change-theme', function() {
    	\Session::set('theme', \Input::get('theme'));
    });

    Route::get('api/change-layout', function() {
    	\Session::set('layout', \Input::get('layout'));
    });


?>