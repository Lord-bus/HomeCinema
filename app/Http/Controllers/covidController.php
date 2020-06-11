<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Curl;
class covidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // https://www.metaweater.com/api/location/468739/

      // web: https://documenter.getpostman.com/view/8854915/SzS8rjHv?version=latest
      // curl --location --request GET 'https://covidtracking.com/api/states'
      // curl --location --request GET 'http://covidtracking.com/api/us'   OK
      // curl --location --request GET 'https://covidtracking.com/api/us/daily'

      $datos=Curl::to("http://covidtracking.com/api/us")->get();
      dd(json_decode($datos,true));
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
