<?php

namespace App\Http\Controllers;
use App\Models\Roller;

use Illuminate\Http\Request;

class RollerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $r = Roller::all();
        return view('rolleri.index')->with('r',$r);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rolleri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'velicina'=>'required',
            'boja'=>'required',
            'stanje'=>'required',
            'materijal'=>'required',
     ]);
        $r = new Roller();
        $r->velicina = $request->input('velicina');
        $r->boja = $request->input('boja');
        $r->materijal = $request->input('materijal');
        $r->stanje = $request->input('stanje');
        $r->save();
        return redirect('/rolleri')->with('success','Novi roller je uspesno kreiran!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $r = Roller::find($id);
        return view('rolleri.show')->with('r',$r);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $r = Roller::find($id);
        return view('rolleri.edit')->with('r',$r);
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
        $r = Roller::find($id);
        $r->velicina = $request->input('velicina');
        $r->boja = $request->input('boja');
        $r->materijal = $request->input('materijal');
        $r->stanje = $request->input('stanje');
        $r->save();
        return redirect('/rolleri')->with('success','Novi roller je uspesno azuriran!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $r = Roller::find($id);
        $r->delete();
        return redirect('/rolleri')->with('success','Roller je uspesno izbrisan!');
    }
}
