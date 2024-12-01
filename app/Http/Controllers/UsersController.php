<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;

class UsersController extends Controller
{
    public function index(): HttpResponse
    {
        $data = User::all(['name', 'email', 'created_at', 'updated_at']);
        return response($data, 200);
    }

    public function pagination()
    {
        $data = User::select('name', 'email', 'created_at', 'updated_at')->paginate(15);
        return response($data);
    }
}
