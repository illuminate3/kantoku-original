<?php
namespace App\Modules\Kantoku\Providers;

use App;
use Config;
use Lang;
use View;
use Illuminate\Support\ServiceProvider;

class KantokuServiceProvider extends ServiceProvider
{
	/**
	 * Register the Kagi module service provider.
	 *
	 * @return void
	 */
	public function register()
	{

		App::register('App\Modules\Kantoku\Providers\RouteServiceProvider');
		App::register('App\Modules\Kantoku\Providers\KantokuMenuProvider');

		$this->mergeConfigFrom(
			__DIR__.'/../Config/kantoku.php', 'kantoku'
		);

		$this->registerNamespaces();

// Broken .. not sure why yet ...
//		$this->registerConsoleCommands();

	}

	/**
	 * Register the module kantoku resource namespaces.
	 *
	 * @return void
	 */
	protected function registerNamespaces()
	{
//		Lang::addNamespace('kantoku', __DIR__.'/../Resources/Lang/');
		View::addNamespace('kantoku', __DIR__.'/../Resources/Views/');
	}

	/**
	 * Boot the service provider.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes([
			__DIR__.'/../Config/kantoku.php' => config_path('kantoku.php'),
		]);
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return string
	 */
/*
	public function provides()
	{
		return ['kantoku'];
	}
*/
	/**
	 * Register the package console commands.
	 *
	 * @return void
	 */
/*
	protected function registerConsoleCommands()
	{
		$this->registerInstallCommand();

		$this->commands([
			'kantoku.install'
		]);
	}
*/

	/**
	 * Register the "module:seed" console command.
	 *
	 * @return Console\ModuleSeedCommand
	 */
/*
	protected function registerInstallCommand()
	{
		$this->app->bindShared('kantoku.install', function() {
			return new App\Modules\Kantoku\Console\Commands\KantokuCommand;
		});
	}
*/

}
