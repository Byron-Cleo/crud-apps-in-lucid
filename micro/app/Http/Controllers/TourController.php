<?php

namespace App\Http\Controllers;

use Lucid\Units\Controller;
use App\Features\CreateToursFeature;
use App\Features\ListToursFeature;
use App\Features\ShowCreateTourFormFeature;
use App\Features\ShowEditTourFormFeature;
use App\Features\EditTourFeature;
use App\Features\DeleteTourFeature;
use App\Features\TourDetailsFeature;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return $this->serve(ListToursFeature::class);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return $this->serve(ShowCreateTourFormFeature::class);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        return $this->serve(CreateToursFeature::class);

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
        return $this->serve(TourDetailsFeature::class, ['id' => $id] );
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
        return $this->serve(ShowEditTourFormFeature::class, ['id' => $id] );

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
        return $this->serve(EditTourFeature::class, ['id' => $id] );
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
        return $this->serve(DeleteTourFeature::class, ['id' => $id] );
    }

}
