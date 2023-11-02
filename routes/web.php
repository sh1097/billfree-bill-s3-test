<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\FileUploadController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::apiResource('c', 'InvoiceController');
// Route::apiResource('line-items', 'LineItemController');
Route::get('/create', function () {
    return view('invoice_template');
});

Route::get('/create', [InvoiceController::class, 'create']);
Route::post('submit-invoice', [InvoiceController::class, 'store']);
Route::post('/invoices/{invoice}/line-items', 'LineItemController@store');
Route::get('/', [InvoiceController::class, 'index']);
Route::get('/invoices/downloadPdf',  [InvoiceController::class, 'downloadPdf'])->name('invoices.downloadPdf');
Route::get('/upload', function () {
    return view('file');
})->name('upload-form');


// routes/web.php
Route::get('/invoices/create',  [InvoiceController::class, 'create'])->name('invoices.create');

Route::get('invoices/{id}', 'InvoiceController@show'); // Retrieve an invoice
Route::get('invoices/{id}/pdf', 'InvoiceController@generatePDF'); // G


Route::get('/upload', [FileUploadController::class, 'showUploadForm'])->name('upload-form');
Route::post('/upload', [FileUploadController::class, 'uploadFile'])->name('upload');
