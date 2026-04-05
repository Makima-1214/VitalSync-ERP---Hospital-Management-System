<?php

use App\Http\Controllers\PatientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\QueueController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\MedicalRecordController;
use App\Http\Controllers\LaboratoryController;
use App\Http\Controllers\BedController;
use Illuminate\Support\Facades\Route;

// Dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Patient Management
Route::resource('patients', PatientController::class);

// Queue Management
Route::prefix('queue')->name('queue.')->group(function () {
    Route::get('/', [QueueController::class, 'index'])->name('index');
    Route::get('/display', [QueueController::class, 'display'])->name('display');
});

// Medical Records (EMR)
Route::resource('medical-records', MedicalRecordController::class);

// Pharmacy
Route::prefix('pharmacy')->name('pharmacy.')->group(function () {
    Route::get('/', [PharmacyController::class, 'index'])->name('index');
    Route::get('/prescriptions', [PharmacyController::class, 'prescriptions'])->name('prescriptions'); // Daftar resep dari DB
    Route::get('/inventory', [PharmacyController::class, 'inventory'])->name('inventory'); // Stok obat dari DB
});

// Medicine Management
Route::resource('medicines', MedicineController::class);

// Laboratory
Route::prefix('laboratory')->name('laboratory.')->group(function () {
    Route::get('/', [LaboratoryController::class, 'index'])->name('index');
    Route::get('/orders', [LaboratoryController::class, 'orders'])->name('orders');
    Route::get('/results', [LaboratoryController::class, 'results'])->name('results');
});

// Bed Management
Route::prefix('beds')->name('beds.')->group(function () {
    Route::get('/', [BedController::class, 'index'])->name('index');
    Route::get('/rooms', [BedController::class, 'rooms'])->name('rooms');
});

// Billing
Route::resource('billing', BillingController::class);

// Reports
Route::prefix('reports')->name('reports.')->group(function () {
    Route::get('/', function () { return view('reports.index'); })->name('index');
    Route::get('/patients', function () { return view('reports.patients'); })->name('patients');
    Route::get('/financial', function () { return view('reports.financial'); })->name('financial');
    Route::get('/inventory', function () { return view('reports.inventory'); })->name('inventory');
});

// Settings
Route::prefix('settings')->name('settings.')->group(function () {
    Route::get('/', function () { return view('settings.index'); })->name('index');
    Route::get('/users', function () { return view('settings.users'); })->name('users');
    Route::get('/roles', function () { return view('settings.roles'); })->name('roles');
});
