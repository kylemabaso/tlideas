<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\GeolocationController;
use App\Http\Controllers\ManifestController;
use App\Http\Controllers\RequisitionController;
use App\Http\Controllers\UsersController;
use App\Http\Livewire\CreateUser;
use App\Models\Requisition;
use App\Models\User;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('system.dashboard');
    })->name('/');
});

Route::middleware(['auth', 'role:admin|owner|staff|driver'])->group(function () {
    Route::get('requisitions', [RequisitionController::class, 'index'])->name('requisitions');
    Route::get('requisitions/create', [RequisitionController::class, 'create'])->name('requisitions.create');
    Route::get('requisitions/{requisition}', [RequisitionController::class, 'show']);
    Route::patch('requisitions/{requisition}', [RequisitionController::class, 'update'])->name('requisitions.update');
    Route::post('requisitions/store', [RequisitionController::class, 'store'])->name('requisitions.store');

    Route::get('manifests', [ManifestController::class, 'index'])->name('manifests');
    Route::get('manifests/{manifest}', [ManifestController::class, 'show'])->name('manifest.show');
    Route::get('requisitions/{requisition}/manifests/create', [ManifestController::class, 'create'])->name('manifest.create');
    Route::post('requisitions/{requisition}/manifests', [ManifestController::class, 'store'])->name('manifest.store');

    Route::get('geolocation/{requisition}/locate', [GeolocationController::class, 'index'])->name('geolocation.locate');
});

Route::middleware(['auth', 'role:admin|owner|staff'])->group(function () {
    Route::get('users', [UsersController::class, 'index'])->name('users');
    Route::get('users/create', [UsersController::class, 'create'])->name('users.create');
    Route::post('users/store', [UsersController::class, 'store'])->name('users.store');

    Route::get('clients', [ClientController::class, 'index'])->name('clients');
    Route::get('clients/create', [ClientController::class, 'create'])->name('clients.create');
    Route::post('clients/store', [ClientController::class, 'store'])->name('clients.store');

    Route::get('requisitions/{requisition}/manifests/create', [ManifestController::class, 'create'])->name('manifest.create');
    Route::post('requisitions/{requisition}/manifests', [ManifestController::class, 'store'])->name('manifest.store');
    Route::post('requisitions/assign', [ManifestController::class, 'assign'])->name('manifest.assign');

    Route::get('user/{user}', function (User $user) {
        return view('system.users.index', [
            'user' => $user
        ]);
    });

    Route::get('print', function () {
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('print_pdf'));

// (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
        $dompdf->render();

// Output the generated PDF to Browser
        $dompdf->stream('Manifest.pdf');
    })->name('print');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
