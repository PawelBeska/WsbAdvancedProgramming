<?php

namespace App\Http\Controllers\Home;


use App\Http\Requests\UserCreateMoviesRequest;
use App\Http\Requests\UserDestroyMoviesRequest;
use App\Http\Requests\UserStoreMoviesRequest;
use App\Http\Requests\UserUpdateMoviesRequest;
use App\Http\Requests\UserViewMoviesRequest;
use App\Models\Movie;

use Illuminate\Support\MessageBag;
use Yajra\DataTables\DataTables;

class Table1Controller extends Controller
{

    public function showData($id, $request)
    {

    }

    public function getData(UserViewMoviesRequest $request)
    {
        return DataTables::of(Movie::all())->make(true);
    }

    public function store(UserStoreMoviesRequest $request)
    {
        $input = $request->validated();
        $message = new MessageBag();
        $message->add('success', 'Pomyślnie dodano film!');
        Movie::create($input);
        return $message->jsonSerialize();

    }

    public function update($id, UserUpdateMoviesRequest $request)
    {
        if ($movie = Movie::find($id)) {
            $message = new MessageBag();
            $message->add('success', 'Pomyślnie edytowano film!');
            $movie->update($request->validated());
            return $message->jsonSerialize();
        } else return abort(404);
    }

    public function create(UserCreateMoviesRequest $request)
    {


    }

    public function destroy(UserDestroyMoviesRequest $request)
    {

    }

}
