<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\UserExerciseController;
use App\Http\Controllers\HomeExerciseProgramController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Exercise;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    $userId = Auth::id();
    $exercises = Exercise::where(function ($query) use ($userId) {
        $query->where('isPrivate', false)
              ->orWhere(function ($query) use ($userId) {
                  $query->where('isPrivate', true)
                        ->where('user_id', $userId);
              });
    })->get();
    return Inertia::render('Dashboard', ['exercises' => $exercises, 'userId' => $userId]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/home-exercise-programs/{homeExerciseProgram}/add-user-exercises', [HomeExerciseProgramController::class, 'addUserExercises'])
    ->name('home-exercise-programs.add-user-exercises');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('exercises', ExerciseController::class);
Route::resource('patients', PatientController::class);
Route::resource('providers', ProviderController::class);
Route::resource('user-exercises', UserExerciseController::class);
Route::resource('home-exercise-programs', HomeExerciseProgramController::class);

require __DIR__.'/auth.php';
