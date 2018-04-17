<?php

namespace App\Http\Controllers;

use DB;
use App\Berita;
use App\Kategori;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        
    }

    public function index()
    {
        $beritanasional = Berita::where('id_kategori','LIKE',"%1%")->get();
        $sosialbudaya = Berita::where('id_kategori','LIKE',"%2%")->get();
        $tokohdanaktivis = Berita::where('id_kategori','LIKE',"%3%")->get();
        $latestpost = Berita::orderBy('created_at')->get();
        //dd($pass);
        return view('index',compact('beritanasional', 'sosialbudaya', 'tokohdanaktivis', 'latestpost'));   
    }

    public function beritanasional(){
        $latestpost = Berita::orderBy('created_at','desc')->get();

        $beritanasional1 = Berita::where('id_kategori','LIKE',"%1%")
                            ->orderBy('id','desc')
                            ->paginate(5);
        
        //d($beritanasional1);
        return view('berita.berita-nasional',compact('beritanasional1', 'latestpost'));
    }

    public function sosialdanbudaya(){
        $latestpost = Berita::orderBy('created_at','desc')->get();
        $sosialdanbudaya = Berita::where('id_kategori','LIKE',"%2%")->get();
        return view('berita.sosial-dan-budaya',compact('sosialdanbudaya', 'latestpost'));
    }

    public function tokohdanaktivis(){
        $latestpost = Berita::orderBy('created_at','desc')->get();
        $tokohdanaktivis = Berita::where('id_kategori','LIKE',"%3%")->get();
        return view('berita.tokoh-dan-aktivis',compact('tokohdanaktivis', 'latestpost'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('berita.post-baru', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
