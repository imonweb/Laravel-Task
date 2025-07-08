<?php

use Illuminate\Support\Facades\Route;
// use Inertia\Inertia;

Route::get('/', function () {
    // return Inertia::render('welcome');
    return view('index');
});

Route::get('/hello', function () {
    return view('index', [
        'name' => 'Imon',
    ]);
});

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('dashboard', function () {
//         return Inertia::render('dashboard');
//     })->name('dashboard');
// });

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

<table><tbody>
<tr>
    <th style="text-align: center; font-size:22px;">Luxury Suite:</th><th style="text-align: center;"></th>
</tr>

<td style="text-align: center; font-size:18px; font-weight: bold">1 Cat</td><<td style="text-align: center; font-size:18px; font-weight: bold">£17 per day (inc VAT)
</td> 

</tr><tr><td style="text-align: center; font-size:18px; font-weight: bold">2 Cats</td><td style="text-align: center; font-size:18px; font-weight: bold">£24 per day (inc VAT)</td></tr></tbody></table>