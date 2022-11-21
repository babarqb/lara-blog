<?php

use App\Http\Controllers\ArticleController;
use App\Models\Media;
use Illuminate\Support\Facades\Route;

Route::get('/upload', function () {
    return view('upload');
});
Route::post('/upload', function (\Illuminate\Http\Request $request) {
  $request->validate([
        'file' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
    ]);
    $fileName = time(). '.' . $request->file('file')->extension();
     $request->file('file')->storeAs('public/uploads',$fileName);
     $path = 'storage/uploads/'.$fileName;
    $media =  Media::create([
         'name' => $fileName,
         'path' => $path,
     ]);
    return redirect()->back()->with('success', 'You have successfully upload image.')->with('path',$media->path);
});
Route::get('/media',function(){
    $medias= Media::all();
    return view('media')->with('medias',$medias);
});
Auth::routes();
Route::get('/',[ArticleController::class,'index'])->middleware('auth');
Route::resource('articles', ArticleController::class)->middleware('auth');
