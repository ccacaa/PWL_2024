<?php

use Illuminate\Support\Facades\Route;

// Route::get('/hello', function () {
//     return 'Hello World';
// }); (2)

// Route::get('/world', function () {
//     return "World";
// }); (4)

// Route::get('/ucapan', function () {
//     return "Selamat Datang";
// }); (6)

// Route::get('/about', function () {
//     return 
//     "Nama: Carieska Berliana Novita Kusuma Wardani<br>
//      NIM  : 2241760027";
// }); (7)

// Route::get('/user/{Carieska}', function ($Carieska) {
//     return 'Nama saya '.$Carieska;
//     }); (8)

// Route::get('/posts/{post}/comments/{comment}', function 
// ($postId, $commentId) {
//  return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
// }); (11)

Route::get('/article/{id}', function ($id){
    return 'Artikel dengan ID: '.$id;
});

?>