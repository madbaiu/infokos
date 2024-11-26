<?php

use Illuminate\Http\Request;
use App\Http\Livewire\HasilKomponen;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\ProfilKomponen;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\KriteriaKomponen;
use App\Http\Livewire\PenilaianKomponen;
use App\Http\Livewire\AlternatifKomponen;
use App\Http\Livewire\DashboardKomponen;

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

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function (Request $request) {

    $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
    ]);

    if (Auth::attempt(['username' => $request['username'], 'password' => $request['password']])) {
        $request->session()->regenerate();

        return redirect()->intended('/');
    }
    return back()->withErrors(
        ['loginError' => 'Username atau Password salah']
    );
});

Route::post('/logout', function (Request $request) {
    Auth::logout();

    return redirect()->route('login');
})->name('logout');


Route::get('/', DashboardKomponen::class)->name('dashboard');
Route::get('/hasil', HasilKomponen::class)->name('hasil');



Route::middleware('auth')->group(function () {
    Route::get('/alternatif', AlternatifKomponen::class)->name('alternatif');
    Route::get('/kriteria', KriteriaKomponen::class)->name('kriteria');
    Route::get('/penilaian', PenilaianKomponen::class)->name('penilaian');
    // Route::get('/hasil', HasilKomponen::class)->name('hasil');
    Route::get('/profil', ProfilKomponen::class)->name('profil');
});
