<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Produk = Produk::all();
        return view('dashboard2.dataproduk', ['Produk' => $Produk]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Produk = Produk::all();
        return view('dashboard2.tambahproduk', ['Produk' => $Produk]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = produk::create($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('image_product', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        return redirect('/admin/dataproduk')
        ->with('success','Data succes added');
    }

    /**
     * Display the specified resource.
     */
    public function show(produk $id)
    {
        $Produk = produk::findOrFail($id);
        return view('dashboard2.detailproduk', ['Produk' => $Produk]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(produk $id)
    {
        $Produk = produk::findOrFail($id);
        return view('dashboard2.editproduk', ['Produk' => $Produk]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, produk $id)
    {
        $Produk = produk::findOrFail($id);
        $Produk->update([
            'name' => $request->name,
            'desc' => $request->desc,
            'price' => $request->price,
            'stock' => $request->stock,
            'kategori_id' => $request->kategori_id,
            ]);

            if($request->hasFile('image'))
            {
                $destination = 'image_product/' . $Produk->image;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $file = $request->file('image');
                $extension = $file->getClientOriginalName();
                $fileName = time() . '.' . $extension;
                $file->move('image_product/', $fileName);
                $Produk->foto = $fileName;
            }
            $Produk->update();
        return redirect('/admin/dataproduk')
            ->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(produk $id)
    {
        $Produk = produk::findOrFail($id);
        $Produk->delete();
        return redirect('/admin/dataproduk');
    }
}
