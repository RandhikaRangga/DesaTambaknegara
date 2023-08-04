<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

class VideoController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $videos = Video::latest()->paginate(5);

        //render view with posts
        return view('admin.video', compact('videos'));
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'judul'     => 'required',
            'url'    => 'required'
        ]);

        //create post
        Video::create([
            'judul'     => $request->judul,
            'url'   => $request->url
        ]);

        //redirect to index
        return redirect()->route('admin-video.index');
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //get post by ID
        $videos = Video::findOrFail($id);

        //Update
        $videos->update([
            'judul'     => $request->judul,
            'url'       => $request->url,
        ]);

        //redirect to index
        return redirect()->route('admin-video.index');
    }

    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $videos = Video::findOrFail($id);

        //delete post
        $videos->delete();

        //redirect to index
        return redirect()->route('admin-video.index');
    }
}
