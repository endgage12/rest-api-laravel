<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use Facade\FlareClient\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // Получить весь список зарегистрированных пользователей
    public function index()
    {
        return User::all('name', 'email', 'firstname', 'lastname', 'city', 'role', 'about_self');
    }

    // Поиск по имени пользователя
    public function search_by_name($name)
    {
        return User::where('name', 'like', '%'.$name.'%')->get();
    }

    public function get_rolenames()
    {
        return DB::table('roles')->get('rolename');
    }

    public function personal_page($id) {
        return User::find($id);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return $user;
    }
}
