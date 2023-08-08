<?php

namespace App\Http\Controllers;

use App\Models\Akomodasi;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

class AkomodasiController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $akomodasis = Akomodasi::latest()->paginate(E_ALL);

        //render view with posts
        return view('admin.akomodasi', compact('akomodasis'));
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
        Akomodasi::create([
            'foto'     => $newNameImage,
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'harga'   => $request->harga
        ]);

        //redirect to index
        return redirect()->route('admin-akomodasi.index');
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
        $akomodasis = Akomodasi::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('foto')) {

            //upload new image
            $newNameImage = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('image'), $newNameImage);

            //delete old image
            Storage::delete('public/image/' . $akomodasis->foto);

            //update post with new image
            $akomodasis->update([
                'foto'     => $newNameImage,
                'nama'     => $request->nama,
                'deskripsi'   => $request->deskripsi,
                'harga'     => $request->harga
            ]);
        } else {

            //update post without image
            $akomodasis->update([
                'nama'     => $request->nama,
                'deskripsi'   => $request->deskripsi,
                'harga'     => $request->harga
            ]);
        }

        //redirect to index
        return redirect()->route('admin-akomodasi.index');
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
        $akomodasis = Akomodasi::findOrFail($id);

        //delete image
        Storage::delete('public/image/' . $akomodasis->foto);

        //delete post
        $akomodasis->delete();

        //redirect to index
        return redirect()->route('admin-akomodasi.index');
    }
}
