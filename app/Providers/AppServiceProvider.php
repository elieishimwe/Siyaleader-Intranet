<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Department;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		if (\Schema::hasTable('departments'))
        {

            $departments        	= Department::all();
            $selectDepartments  	= array();
            $selectDepartments[0] 	= "Select Department";

            foreach ($departments as $department) {
               $selectDepartments[$department->id] = $department->name;
            }

            \View::share('selectDepartments',$selectDepartments);

        }

         View()->composer('master',function($view){

          if(\Auth::check())
          {

            $view->with('departmentName',Department::where('id','=',\Auth::user()->department)->pluck('name'));

          }





        });
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
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'App\Services\Registrar'
		);
	}

}
