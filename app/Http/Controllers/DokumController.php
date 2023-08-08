<?php

namespace App\Http\Controllers;

use App\Models\Dokum;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

class DokumController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $dokums = Dokum::latest()->paginate(E_ALL);

        //render view with posts
        return view('admin.dokum', compact('dokums'));
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request) : RedirectResponse
    {
        //validate form
        $request->validate([
            'foto'     => 'required',
            'judul'    => 'required'
        ]);

        //upload image
        $newNameImage = time() . '.' . $request->foto->extension();
        $request->foto->move(public_path('image'), $newNameImage);

        //create post
        Dokum::create([
            'foto'     => $newNameImage,
            'judul'   => $request->judul
        ]);

        //redirect to index
        return redirect()->route('admin-dokum.index');
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
        $dokums = Dokum::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('foto')) {

            //upload new image
            $newNameImage = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('image'), $newNameImage);

            //delete old image
            Storage::delete('public/image/' . $dokums->foto);

            //update post with new image
            $dokums->update([
                'foto'     => $newNameImage,
                'judul'     => $request->judul
            ]);
        } else {

            //update post without image
            $dokums->update([
                'judul'     => $request->judul,
            ]);
        }

        //redirect to index
        return redirect()->route('admin-dokum.index');
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
        $dokums = Dokum::findOrFail($id);

        //delete image
        Storage::delete('public/image/' . $dokums->foto);

        //delete post
        $dokums->delete();

        //redirect to index
        return redirect()->route('admin-dokum.index');
    }
}
