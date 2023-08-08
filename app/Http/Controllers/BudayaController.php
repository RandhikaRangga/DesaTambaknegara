<?php

namespace App\Http\Controllers;

use App\Models\Budaya;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

class BudayaController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $budayas = Budaya::latest()->paginate(E_ALL);

        //render view with posts
        return view('admin.budaya', compact('budayas'));
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
        Budaya::create([
            'foto'     => $newNameImage,
            'nama'     => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'harga'   => $request->harga
        ]);

        //redirect to index
        return redirect()->route('admin-budaya.index');
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
        $budayas = Budaya::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('foto')) {

            //upload new image
            $newNameImage = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('image'), $newNameImage);

            //delete old image
            Storage::delete('public/image/' . $budayas->foto);

            //update post with new image
            $budayas->update([
                'foto'     => $newNameImage,
                'nama'     => $request->nama,
                'deskripsi'   => $request->deskripsi,
                'harga'     => $request->harga
            ]);
        } else {

            //update post without image
            $budayas->update([
                'nama'     => $request->nama,
                'deskripsi'   => $request->deskripsi,
                'harga'     => $request->harga
            ]);
        }

        //redirect to index
        return redirect()->route('admin-budaya.index');
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
        $budayas = Budaya::findOrFail($id);

        //delete image
        Storage::delete('public/image/' . $budayas->foto);

        //delete post
        $budayas->delete();

        //redirect to index
        return redirect()->route('admin-budaya.index');
    }
}
