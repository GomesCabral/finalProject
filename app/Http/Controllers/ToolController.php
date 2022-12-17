<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateToolRequest;
use App\Http\Requests\InsertRatingRequest;
use App\Models\Tool;
use Illuminate\Support\Facades\DB;

class ToolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tools = DB::table('tools')
            ->join('sellers', 'tools.seller_id', '=', 'sellers.id')
            ->select('tools.*','sellers.*')
            //->limit(12)
            ->get();
        //$tools = Tool::all()->sortBy('watt');
        return view('tools', ['tools' => $tools]);
    }

    public function toolDetails($id)
    {
        $tool = Tool::where('id', $id)->first();
        return view('tool-details', ['tool' => $tool]);
    }
    public function storeDetails($id)
    {
        $tool = Tool::where('id', $id)->first();
        $tools = DB::table('tools')
            ->join('sellers', 'tools.seller_id', '=', 'sellers.id')
            ->select('tools.*','sellers.*')
            ->limit(3)
            ->get();
        //dd($tools);
        return view('store-details', ['tool' => $tool, 'tools' => $tools]);
    }
    public function buyTool($id)
    {
        $tool = Tool::where('id', $id)->first();
        return view('buy-tool', ['tool' => $tool]);
    }

    public function showStore()
    {
        $tools = Tool::all()->sortBy('watt');
        return view('store', ['tools' => $tools]);
    }

    public function error()
    {
        return view('error');
    }

    public function insertRating($id, InsertRatingRequest $request)
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_tool');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateToolRequest $request)
    {
        $request->validated();
        $tool = new Tool;

        $tool->name = $request->name;
        $tool->picture = $request->picture;
        $tool->price = $request->price;

        $result = $tool->save();
        if ($result)
            return redirect('/tools')->with('message', 'Successfully insert in the DB !');
        else
            echo "problem inserting";
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