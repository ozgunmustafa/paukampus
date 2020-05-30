<?php

//Route::group(['prefix'=>'/fakulteler'],function (){
//    Route::get('','FacultyController@index')->name('faculties');//tüm fakülteleri liseleme
//    //Route::get('/{fakulte_adi}','FacultyController@getFacultyDetails')->name('facultyDetails');
//});

Route::get('/deneme', function (){
    return view('department-lectures');
});
Route::get('/', 'AnasayfaController@index')->name('anasayfa');
Route::get('/kayit-ol', 'UserController@registerView')->name('registerView');
Route::post('/kayit-ol', 'UserController@register')->name('register');
Route::get('/giris-yap', 'UserController@loginView')->name('loginView');
Route::post('/giris-yap','UserController@login')->name('login');
//Route::get('/sepet', 'SepetController@index')->name('sepet');

Route::get('/ders-notlari', 'FacultyController@showFaculties')->name('showFaculties');


Route::get('/fakulte/{fakulte_adi}', 'FacultyController@showFacultyDepartments')->name('showFacultyDepartments');
Route::get('/bolum/{bolum_adi}', 'DepartmentController@showDepartmentLectures')->name('showDepartmentLectures');
Route::get('/ders/{ders_adi}', 'LectureController@showLectureNotes')->name('showLecturesNotes');



















