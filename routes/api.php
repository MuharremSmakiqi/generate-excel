<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Exports\OrdersExport;
use Maatwebsite\Excel\Facades\Excel;
 

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); 

Route::get('/generate-report', function(){
   return Excel::download(new OrdersExport, 'Orders.xlsx');
});