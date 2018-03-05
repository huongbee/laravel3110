<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "show list photo";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "use method GET, render view to add photo";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo "use method POST, save photo to db";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo "show detail a photo";
    }

    public function edit($id)
    {
        echo "method GET, render view to  edit a photo";
    }

    public function update(Request $request, $id)
    {
        echo "method PUT/PATCH, update photo in db";
    }

    public function destroy($id)
    {
        echo "method DELETE, delete a photo in db";
    }
}
