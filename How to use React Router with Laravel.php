<?php 
// Router laravel
Route::get('{reactRoutes}', function () {
    return view('welcome'); // your start view
})->where('reactRoutes', '^((?!api).)*$'); // except 'api' word


// api Router laravel
Route::get('api/whatever/1', function() {
    return [
        'one' => 'two',
        'first' => 'second'
    ];
});

Route::get('api/something/2', function() {
    return [
        'hello' => 'good bye',
        'dog' => 'cat'
    ];
});
?>
