<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Открытые для всех API
Route::post('/register', [AuthController::class, 'register']); // зарегистрироваться (логин, почта, пароль)
Route::post('/login', [AuthController::class, 'login']); // авторизация (вход по почте)
Route::get('/products', [ProductController::class, 'index']); // главная страница
Route::get('/products/{id}', [ProductController::class, 'show']); // конкретная страница (допустим, конкретная песня)
Route::get('/products/search/{name}', [ProductController::class, 'search']); // поиск по вхождению части слова

Route::get('/users', [UserController::class, 'index']); // список всех пользователей
Route::get('/personal_page/{id}', [UserController::class, 'personal_page']); // получить личную страницу по id
Route::get('/users/{name}', [UserController::class, 'search_by_name']); // поиск пользователей по имени
Route::get('/get_rolenames', [UserController::class, 'get_rolenames']); // получить список ролей

// API после авторизации
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/products', [ProductController::class, 'store']); // сохранить данные в БД : имя, красивый url (может не требуется), описание, цена
    Route::put('/products/{id}', [ProductController::class, 'update']); // редактировать поля
    Route::put('/users/{id}', [UserController::class, 'update']); // редактировать поля
    Route::delete('/products/{id}', [ProductController::class, 'destroy']); // удалить конкретный элемент БД
    Route::post('/logout', [AuthController::class, 'logout']); // выйти из аккаунта
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
