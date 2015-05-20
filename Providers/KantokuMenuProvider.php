<?php
namespace App\Modules\Kantoku\Providers;

use App\Providers\MenuServiceProvider;

use Auth;
use Lang;
use Menu;

class KantokuMenuProvider extends MenuServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{

// navbar menu
//		$menu = Menu::get('navbar');

// right side drop down
		$menu = Menu::get('admin');
		$menu->add(Lang::choice('kotoba::general.module', 2), 'admin/modules');

	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
//
	}



}
