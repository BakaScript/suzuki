<?php

Route::get('/', 'LandingController');

Route::geT('daftar-harga', 'LandingController@daftarHarga') ;

Route::get('/promo', 'LandingController@promo') ;