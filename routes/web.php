<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\BicycleController;
use App\Http\Controllers\StationController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\PricingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::controller(StudentController::class)->group(function () {
    Route::get('/students', 'index')->name('students.index');
    Route::get('/students/create', 'create')->name('students.create');
    Route::post('/students', 'store')->name('students.store');
    Route::get('/students/{student}', 'show')->name('students.show');
    Route::get('/students/{student}/edit', 'edit')->name('students.edit');
    Route::put('/students/{student}', 'update')->name('students.update');
    Route::delete('/students/{student}/delete', 'destroy')->name('students.delete');
});

Route::controller(DepartmentController::class)->group(function () {
    Route::get('/departments', 'index')->name('departments.index');
    Route::get('/departments/create', 'create')->name('departments.create');
    Route::post('/departments', 'store')->name('departments.store');
    Route::get('/departments/{department}/edit', 'edit')->name('departments.edit');
    Route::put('/departments/{department}', 'update')->name('departments.update');
    Route::delete('/departments/{department}/delete', 'destroy')->name('departments.delete');
});

Route::controller(FacultyController::class)->group(function () {
    Route::get('/faculties', 'index')->name('faculties.index');
    Route::get('/faculties/create', 'create')->name('faculties.create');
    Route::post('/faculties', 'store')->name('faculties.store');
    Route::get('/faculties/{faculty}/edit', 'edit')->name('faculties.edit');
    Route::put('/faculties/{faculty}', 'update')->name('faculties.update');
    Route::delete('/faculties/{faculty}/delete', 'destroy')->name('faculties.delete');
});

Route::controller(BicycleController::class)->group(function () {
    Route::get('/bicycles', 'index')->name('bicycles.index');
    Route::get('/bicycles/create', 'create')->name('bicycles.create');
    Route::post('/bicycles', 'store')->name('bicycles.store');
    Route::get('/bicycles/{bicycle}/edit', 'edit')->name('bicycles.edit');
    Route::put('/bicycles/{bicycle}', 'update')->name('bicycles.update');
    Route::delete('/bicycles/{bicycle}/delete', 'destroy')->name('bicycles.delete');
});

Route::controller(StationController::class)->group(function () {
    Route::get('/stations', 'index')->name('stations.index');
    Route::get('/stations/create', 'create')->name('stations.create');
    Route::post('/stations', 'store')->name('stations.store');
    Route::get('/stations/{station}/edit', 'edit')->name('stations.edit');
    Route::put('/stations/{station}', 'update')->name('stations.update');
    Route::delete('/stations/{station}/delete', 'destroy')->name('stations.delete');
});

Route::controller(PricingController::class)->group(function () {
    Route::get('/pricings', 'index')->name('pricings.index');
    Route::get('/pricings/create', 'create')->name('pricings.create');
    Route::post('/pricings', 'store')->name('pricings.store');
    Route::get('/pricings/{pricing}/edit', 'edit')->name('pricings.edit');
    Route::put('/pricings/{pricing}', 'update')->name('pricings.update');
    Route::delete('/pricings/{pricing}/delete', 'destroy')->name('pricings.delete');
});


Route::controller(RentalController::class)->group(function () {
    Route::get('/rentals', 'index')->name('rentals.index');
    Route::get('/rentals/create', 'create')->name('rentals.create');
    Route::post('/rentals', 'store')->name('rentals.store');
    Route::get('/rentals/{rental}/edit', 'edit')->name('rentals.edit');
    Route::put('/rentals/{rental}', 'update')->name('rentals.update');
    Route::delete('/rentals/{rental}/delete', 'destroy')->name('rentals.delete');
});



require __DIR__.'/auth.php';
