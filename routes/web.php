<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;
use App\Models\User;
use App\Http\Controllers\UsersController;


Route::get('/', function () {
 /*   return Inertia::render('Welcome', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
*/



});

/*Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

*/

Route::resource('users', UsersController::class);

require __DIR__.'/settings.php';
