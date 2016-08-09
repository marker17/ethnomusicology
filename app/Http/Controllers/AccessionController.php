<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Accession;

class AccessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accessions = Accession::all();

        return view('accessions.index')->withAccessions($accessions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('accessions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, array(
            'category_id' =>'required',
            'length' => 'numeric',
            'width' => 'numeric',
            'height' => 'numeric',
            'diameter' => 'numeric'
            ));
        

        $accession = new Accession;

        $accession->title = $request->title;
        $accession->category_id = $request->category_id;
        $accession->author = $request->author;
        $accession->title = $request->title;
        $accession->groupcountry = $request->groupcountry;
        $accession->year = $request->year;
        $accession->description = $request->description;
        $accession->notes = $request->notes;
        $accession->picture = $request->picture;
        $accession->photodate = $request->photodate;
        $accession->photographer = $request->photographer;
        $accession->relatedimages = $request->relatedimages;
        $accession->originalformat_type = $request->originalformat_type;
        $accession->originalformat_description = $request->originalformat_description;
        $accession->eformat_type = $request->eformat_type;
        $accession->eformat_description = $request->eformat_description;
        $accession->original_location = $request->original_location;
        $accession->elocation = $request->elocation;
        $accession->provenance_notes = $request->provenance_notes;
        $accession->instrumentcatalog_no = $request->instrumentcatalog_no;
        $accession->instrumentcategory_no = $request->instrumentcategory_no;
        $accession->instrument_localname= $request->instrument_localname;
        $accession->instrument_englishname = $request->instrument_englishname;
        $accession->musicscore_catalogername = $request->musicscore_catalogername;
        $accession->musicscore_instrumentation = $request->musicscore_instrumentation;
        $accession->musicscore_performances = $request->musicscore_performances;
        $accession->musicscore_category = $request->musicscore_category;
        $accession->length = $request->length;
        $accession->width = $request->width;
        $accession->height = $request->height;
        $accession->diameter = $request->diameter;
        $accession->no_of_pages = $request->no_of_pages;
        $accession->original = $request->original;
        $accession->repo = $request->repo;
        $accession->full_score = $request->full_score;

        $accession->save();

        return redirect()->route('accessions.show', $accession->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('accessions.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $accession = Accession::find($id);

        //return view('accessions.edit')->withAccession($accession);
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
