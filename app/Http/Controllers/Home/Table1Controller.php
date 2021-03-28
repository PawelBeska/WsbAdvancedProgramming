<?php

namespace App\Http\Controllers\Home;



use App\Http\Requests\UserCreateMoviesRequest;
use App\Http\Requests\UserDestroyMoviesRequest;
use App\Http\Requests\UserStoreMoviesRequest;
use App\Http\Requests\UserUpdateMoviesRequest;
use App\Http\Requests\UserViewMoviesRequest;

class Table1Controller extends Controller
{

    public function showData($id, $request)
    {

    }
    public function getData(UserViewMoviesRequest $request)
    {
        return [];
    }

    public function store(UserStoreMoviesRequest $request)
    {

    }

    public function update(UserUpdateMoviesRequest $request)
    {

    }
    public function create(UserCreateMoviesRequest $request)
    {

    }

    public function destroy(UserDestroyMoviesRequest $request)
    {

    }

}
