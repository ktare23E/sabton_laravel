<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Tag;
use App\Models\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $user = User::find(10);
        // dd($user->posts);

        // User::create([
        //     'name' => 'John Doe',
        //     'password' => 'password',
        // ]);

        // $user = User::find(1);
        // $user = $user->posts()->create([
        //     'title' => 'Post Title',
        //     'content' => 'Post Content',
        // ]);
   
        // $tagId = [1,2,3];
        // $post = Post::find(10);
        // $post->tags()->detach($tagId);
        // $posts = $post->tags;
     
        // foreach ($posts as $post) {
        //     echo $post->tag_name.'<br>';
        // }

        // $user = Post::with('user','tags')->get();
        // dd($user);

        // $tags = Tag::with('posts')->get();
        // dd($tags);
        
        // $user = User::find(3);
        // $posts = $user->posts;
        // //retrieve all the post id using this user
        // $postIds = $posts->pluck('id')->toArray();
        // //check if this ids exist in post_tag
        // $tags = Tag::whereHas('posts', function ($query) use ($postIds) {
        //     $query->whereIn('post_id', $postIds);
        // })->get();
        
        // foreach ($tags as $tag) {
        //     echo $tag->tag_name.'<br>';
        // }

        // $users = User::with('posts')->get();
        // foreach($users as $user) {
        //     echo $user->name.'<br>';
        //     foreach($user->posts as $post) {
        //         echo $post->title.'<br>';
        //     }
        // }

        $user = User::find(3);
        dump($user->companyPhoneNumber);

        // $user = User::find(21);
        // $post = $user->posts;
        // foreach ($post as $post) {
        //     echo $post->title.'<br>';
        // }
        // return view('post');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
