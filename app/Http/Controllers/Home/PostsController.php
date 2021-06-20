<?php

namespace App\Http\Controllers\Home;


use App\Http\Requests\UserCreateMoviesRequest;
use App\Http\Requests\UserDestroyMoviesRequest;
use App\Http\Requests\UserDestroyPostRequest;
use App\Http\Requests\UserStoreMoviesRequest;
use App\Http\Requests\UserStorePostRequest;
use App\Http\Requests\UserUpdateMoviesRequest;
use App\Http\Requests\UserUpdatePostRequest;
use App\Http\Requests\UserViewMoviesRequest;
use App\Http\Requests\UserViewPostRequest;
use App\Models\Employee;
use App\Models\Movie;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use Yajra\DataTables\DataTables;

class PostsController extends Controller
{

    public function showData($id)
    {

        $message = new MessageBag();
        if ($post = Post::where('id', $id)->with('author')->first())
            return $post;
        else
            return $message->add('error', 'Taki post nie istnieje!')->jsonSerialize();
    }

    public function validateShow($id): bool
    {
        return Post::find($id) ? true : false;
    }

    public function getData(UserViewPostRequest $request)
    {
        return DataTables::of(Post::with('author')->get())->make(true);
    }

    public function store(UserStorePostRequest $request)
    {
        $input = $request->validated();
        $message = new MessageBag();
        $message->add('success', 'Pomyślnie dodano post!');
        $input['user_id'] = Auth::id();
        if ($request->file()) {
            $name = time() . '.' . $request->poster->extension();
            $filePath = $request->file('poster')->storeAs('posters', $name, 'public');
            $input['poster'] = '/storage/' . $filePath;
        }
        Post::create($input);
        return $message->jsonSerialize();

    }

    public function update($id, UserUpdatePostRequest $request)
    {
        $message = new MessageBag();
        if ($post = Post::find($id)) {
            if ($request->file()) {

                Validator::make($request->all(), [
                    'poster' => ['mimes:jpeg,jpg,png', 'max:10000'],
                ])->validate();

                $name = time() . '.' . $request->poster->extension();
                $filePath = $request->file('poster')->storeAs('posters', $name, 'public');
                File::delete(storage_path('app/public' . substr($post->poster, strpos($post->poster, '/p'))));
                $post->poster = '/storage/' . $filePath;
            }
            $message->add('success', 'Pomyślnie edytowano post!');
            $post->update($request->validated());
        } else $message->add('error', 'Taki post nie istnieje!');

        return $message->jsonSerialize();
    }

    public function destroy($id, UserDestroyPostRequest $request)
    {

        $message = new MessageBag();
        if ($post = Post::find($id)) {
            $message->add('success', 'Pomyślnie usunięto post!');
            $post->delete();
        } else $message->add('error', 'Taki post nie istnieje!');
        return $message->jsonSerialize();

    }

}
