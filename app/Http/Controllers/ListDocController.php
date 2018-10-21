<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;

class ListDocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Document::all();
        return view('admin.Doc.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Doc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {/*dd($request);*/
        $model = new Document();

        $model->fill($request->all());

        $model->save();

        return redirect(route('documents.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function show($id)*/
    public function show()
    {
        $data = Document::all();
        return view('client.index',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Document::find($id);
        return view('admin.Doc.edit',compact('model'));
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
        $model = Document::find($id);
        $model->fill($request->all());
        $model->update();
        return redirect(route('documents.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Document::find($id);

        $msg = $model->delete();

        if ($msg) {

            return response()->json(array(
                'status' => 204,
                'msg' => '204: HTTP requests successful'
            ));
        }
        return response()->json(array(  
            'status' => 400,
            'msg' => '400: Bad Request'
        ));
    }
}
