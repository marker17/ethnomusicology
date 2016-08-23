<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Accession;

use App\Category;

use Session;

use DB;

    


class AccessionController extends Controller
{
    /*
    function __construct()
    {
        $this->middleware('auth');

    }

    */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index(Request $request){
    
        $categories = Category::all();


      
        
        $query = Accession::select('*');

        if ($request->input('type')){

            switch ($request->input('type')){
                case 'All':

                    //$accessions = Accession::orderBy('id', 'asc')->paginate(10);

                    break;

                case 'Photo':

                    $query->where('category_id', 2);

                    break;

                case 'Field Notes':

                    $query->where('category_id', 3);

                    break;
                case 'Audio Recording':

                    $query->where('category_id', 4);

                    break;

                case 'Instrument':

                    $query->where('category_id', 5);

                    break;

                case 'Music Scores':

                    $query->where('category_id', 6);

                    break;

                case 'Video':


                    $query->where('category_id', 7);

                    break;

                case 'Vertical Files':

                    $query->where('category_id', 8);

                    break;

            }

            $accessions = $query->orderBy('id')->paginate(10);
            return view('accessions.index')->withAccessions($accessions)->withCategories($categories);


        }


        

        $search = $request->input('search'); //<-- we use global request to get the param of URI
        
    
        
     
        if($search){




            

            $accessions = Accession::where('groupcountry','LIKE','%'.$search.'%')
            ->orWhere('description', 'LIKE', '%'.$search.'%')
            ->orWhere('author', 'LIKE', '%'.$search.'%')
            ->orWhere('accession_no','LIKE','%'.$search.'%')
            ->orWhere('year','LIKE','%'.$search.'%')
            ->paginate(10);


            

            return view('accessions.index')->withAccessions($accessions)->withCategories($categories);
           
        }else{

           
            $accessions = Accession::orderBy('id', 'asc')->paginate(10);
            return view('accessions.index')->withAccessions($accessions)->withCategories($categories);


        }

        
       




    }
    

        
            






              
    


    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function create()
    {

        $categories=Category::all();

        return view('accessions.create')->withCategories($categories);
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
            'category_id'   => 'required|integer',
            'length'        => 'numeric',
            'width'         => 'numeric',
            'height'        => 'numeric',
            'diameter'      => 'numeric'

        ));

        
        
        $accession = Accession::create($request->all());
    
    
        Session::flash('success', 'The new accession was successfully saved!');


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
        $accession = Accession::find($id);


        


        return view('accessions.show')->withAccession($accession);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){



        $accession = Accession::find($id);

        $categories = Category::all();
        $cats = array();
        foreach($categories as $category){

            $cats[$category->id] = $category->name;
        }



        return view('accessions.edit')->withAccession($accession)->withCategories($cats);
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
        $accession = Accession::find($id);

        $this->validate($request, array(
            'category_id' =>'required|integer',
            'length' => 'numeric', 
            'width' => 'numeric',
            'height' => 'numeric',
            'diameter' => 'numeric'

        ));

        $accession = Accession::find($id);

        $accession->update($request->all());


        Session::flash('success', 'The accession was successfully changed!');

        return redirect()->route('accessions.show', $accession->id);   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        

        $accession = Accession::find($id);

        $accession->delete();

        //commenting this out since sweet alert has confimation when deleted
        //Session::flash('success', 'The accession was successfully deleted.');


        return redirect()->route('accessions.index');
    }



    public function search(Request $request){

        $categories = Category::all();
        $keyword = $request->input('keyword');

        $accessions = Accession::select('*')
                    ->leftJoin('categories', 'categories.id', '=', 'accessions.category_id')
                    ->where('accession_no', 'like', '%' . $keyword . '%')
                    ->orwhere('author', 'like', '%' . $keyword . '%')
                    ->orwhere('groupcountry', 'like', '%' . $keyword . '%')
                    ->orwhere('year', 'like', '%' . $keyword . '%')
                    ->orwhere('description', 'like', '%' . $keyword . '%')
                    ->orwhere('categories.category_name', 'like', '%' . $keyword . '%')
                    ->paginate(10);


        return view('accessions.index', compact('accessions', 'categories'));


    }

}
