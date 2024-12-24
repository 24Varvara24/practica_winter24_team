<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PerformanceController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Ticket;
use App\Models\Performance;


Route::get('/', function () {
    return view('welcome');
});
Route::resource('/afisha', PerformanceController::class);


Route::get('/ticket/create',[TicketController::class,'create'])->name('ticket.create');
Route::resource('/ticket', TicketController::class);




Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/dashboard', function () {
    $user=Auth::user();//Получаем текущего аутентифицированного пользователя

    //получаем вместе с тикетом возможность обращаться к таблицам с котороми у него есть всязи типо $ticket->user->name
    $tickets = Ticket::with(['user', 'performance'])->get();
    
    return view('dashboard', compact('user','tickets'));

})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
