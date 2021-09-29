<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquete as Enquete;
use App\Http\Resources\Enquete as EnqueteResource;
class EnqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enquetes = Enquete::paginate(20);
        return EnqueteResource::collection($enquetes);
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
    public function store(Request $request)
    {

        $json = $request->json()->get("enquete");
        $enquete = new Enquete();
        $enquete->pergunta = $json["pergunta"];
        //$enquete->pergunta($json->enquete->pergunta);
        /*//$enquete->pergunta = $request->input('titulo');
    
        if( $enquete->save() ){
          return new EnqueteResource( $enquete );
        }*/
        return $enquete;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $enquete = Enquete::find($id);
        return $enquete;
        
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
