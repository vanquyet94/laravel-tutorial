<?php 
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Validator;
class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Validator::extend('is_even', function($attribute, $value, $parameters, $validator) {
            if(!empty($value) && $value % 2 == 0){ //check biến đó không rỗng và chia hết cho 2
                return true;
            }
                return false;
        });
    }
    public function register()
    {
    }
}

/** lang
return [
	'is_even' => "The :attribute must be even.",
	'accepted' => 'The :attribute must be accepted.',
	.....
]
*/
