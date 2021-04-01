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

class MoviesController extends Controller
{

    public function showData($id)
    {

        $message = new MessageBag();
        if ($movie = Movie::find($id))
            return $movie;
        else
            return $message->add('error', 'Taki film nie istnieje!')->jsonSerialize();
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
        $message = new MessageBag();
        if ($movie = Movie::find($id)) {
            $message->add('success', 'Pomyślnie edytowano film!');
            $movie->update($request->validated());
        } else $message->add('error', 'Taki film nie istnieje!');

        return $message->jsonSerialize();
    }

    public function create(UserCreateMoviesRequest $request)
    {


    }

    public function destroy($id, UserDestroyMoviesRequest $request)
    {

        $message = new MessageBag();
        if ($movie = Movie::find($id)) {
            $message->add('success', 'Pomyślnie usunięto film!');
            $movie->delete();
        } else $message->add('error', 'Taki film nie istnieje!');
        return $message->jsonSerialize();

    }

}
