<?php 
namespace Jakedewitt87\Infusionsoft;

use Illuminate\Support\ServiceProvider;
use Jakedewitt87\Infusionsoft\Infusionsoft;

class InfusionsoftServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;
	
	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('jakedewitt87/infusionsoft');
		
		//Config::package('jakedewitt87/infusionsoft', __DIR__.'/../../../config');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//load config file for package
		//$this->app['config']->package('Jakedewitt87/infusionsoft', __DIR__.'/../../../config', 'Jakedewitt87/infusionsoft');
		
		// Register 'infusionsoft' instance container to our Infusionsoft object
		$this->app['infusionsoft'] = $this->app->share(function($app)
		{
			return new \Jakedewitt87\Infusionsoft\Infusionsoft;
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('infusionsoft');
	}

}