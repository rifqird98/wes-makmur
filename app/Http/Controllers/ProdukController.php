<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        $data = Produk::all();
        $i = 1;
        return view('pages.Produk.index', compact('data','i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('pages.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['foto'] = $request->file('foto')->store('produk/foto', 'public');
        Produk::create($data);
        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $Produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $Produk)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $Produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Produk::findOrFail($id);
        return view('pages.produk.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $Produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['foto'] = $request->file('foto')->store('produk/foto', 'public');
        $item = Produk::findOrFail($id);
        $item->update($data);

        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $Produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data= Produk::findOrFail($id);
        $data->delete();

        return redirect()->route('produk.index');
    }
}
