<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::paginate(8);

        $auth_user = auth()->user();

        // For Profile Card
        $user = auth()->user();

        return view('dashboard.posts.posts', compact(
            'posts',
            'auth_user',
            'user',
        ));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        
        $input = $request->all();

        $user = Auth::user();   
        
        if ($file = $request->file('picture')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('storage/images', $name);

            $input['picture'] = $name; 

        }

  
        if(isset($user)) {
        $user->posts()->create($input);
        session()->flash('success', '
        Blog post successfully published!!');
        } else {
        session()->flash('failure', 'Blog posting failed!');
        }

        return back();


    }

    // public function store2(PostRequest $request)
    // {
        
    //     $input = $request->all();

    //     $user = Auth::user();   
        
    //     // if ($file = $request->file('photo_id')) {

    //     //     $name = time() . $file->getClientOriginalName();

    //     //     $file->move('storage/images', $name);

    //     //     // $photo = Photo::create(['file' => $name]);

    //     //     $photo = Photo::create(['file' => $name, 'imageable_type' => 'App\Models\Car', 'imageable_id' => $user->id]);

    //     //     $input['photo_id'] = $photo->id; 

    //     // }

  
    //     if(isset($user)) {
    //     $user->posts()->create($input);
    //     session()->flash('success', 'You successfully posted blog!');
    //     } else {
    //     session()->flash('failure', 'Blog posting failed!');
    //     }

    //     return back();


    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        
        // $post = Post::findBySlug($slug);

        // return view('dashboard.posts.posts_show', compact(
        //     'post',
        // ));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post = Post::findBySlug($id);

        return view('dashboard.posts.posts_edit', compact(
            'post',
        ));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $input = $request->all();
    
        if ($file = $request->file('picture')) {
            
            $name = time() . $file->getClientOriginalName();

            $file->move('storage/images', $name);

            $input['picture'] = $name;

        }

        if (auth()->user()->admin == 'true' || auth()->user()->admin == 'TRUE') {
            $post = Post::findOrFail($id)->whereId($id)->first()->update($input);
        } else {
            auth()->user()->posts()->whereId($id)->first()->update($input);
        }

       

        session()->flash('success-edit', 'You successfully edited this blog!');
            
        return redirect()->route('posts.index');

       

 
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $post = Post::findOrFail($id);

        $post->delete();

        return redirect('/posts');

    }

    
    public function createblog() {

        return view('pages.create_blog');
        
    }


}
