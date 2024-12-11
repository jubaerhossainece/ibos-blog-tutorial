<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(PostStoreRequest $request)
    {
        try {
            $user_id = 23;
            $data = $request->validated();
            $data['user_id'] = $user_id;

            $post = new Post;
            $post->user_id = $user_id;
            $post->title = $data['title'];
            $post->description = $data['description'];
            $post->image = $data['image'];

            $post->save();

            // Post::create($data);

            return response()->json([
                'status' => true,
                'code' => 201,
                'message' => 'Post has been created'
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status' => false,
                'code' => 422,
                'errors' => $e->errors()
            ], 422);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
