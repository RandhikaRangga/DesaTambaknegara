<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

class WisataController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $wisatas = Wisata::latest()->paginate(5);

        //render view with posts
        return view('admin.wisata', compact('wisatas'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.create-wisata');
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
            'nama'     => 'required',
            'deskripsi'   => 'required',
            'harga'    => 'required'
        ]);

        //upload image
        $newNameImage = time() . '.' . $request->foto->extension();
        $request->foto->move(public_path('image'), $newNameImage);

        //create post
        Wisata::create([
            'foto'     => $newNameImage,
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'harga'   => $request->harga
        ]);

        //redirect to index
        return redirect()->route('admin-wisata.index');
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get post by ID
        $wisatas = Wisata::findOrFail($id);

        //render view with post
        return view('admin.edit-wisata', compact('wisatas'));
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
        $wisatas = Wisata::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('foto')) {

            //upload new image
            $newNameImage = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('image'), $newNameImage);

            //delete old image
            Storage::delete('public/image/' . $wisatas->foto);

            //update post with new image
            $wisatas->update([
                'foto'     => $newNameImage,
                'nama'     => $request->nama,
                'deskripsi'   => $request->deskripsi,
                'harga'     => $request->harga
            ]);
        } else {

            //update post without image
            $wisatas->update([
                'nama'     => $request->nama,
                'deskripsi'   => $request->deskripsi,
                'harga'     => $request->harga
            ]);
        }

        //redirect to index
        return redirect()->route('admin-wisata.index');
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
        $wisatas = Wisata::findOrFail($id);

        //delete image
        Storage::delete('public/image/' . $wisatas->foto);

        //delete post
        $wisatas->delete();

        //redirect to index
        return redirect()->route('admin-wisata.index');
    }
}
