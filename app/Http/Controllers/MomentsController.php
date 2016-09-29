<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Filesystem\FileNotFoundException;
use Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Moments;
use File;

// use App\Http\Controllers\File;

// include composer autoload
// require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;


class MomentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
        $moments = Moments::all()->reverse();
        $response = [
                'result' => 'success',
                'moments'   =>  $moments->toArray(),
            ];
        return Response::json($response);
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
        //
        // $input = $request->all();
        // print_r($input);
        // die();

       
        // print_r($file->getPathName());

        // try
        // {
        //     $file = $request->file('file');
        //     $contents = File::get($file->getPathName());
        // }
        // catch (Illuminate\Filesystem\FileNotFoundException $exception)
        // {
        //     die("The file doesn't exist");
        // }



        // $file = $request->file('file');

        // // // die(print_r($file));

        // $temp = file_get_contents($file->getRealPath());
        // $file_name = date('Y_m_d_H_i_s',time()).'_'.$file->getClientOriginalName();
        // // print_r($temp."--".storage_path());
        // // ($this->config->item('MOBILE').'/'.$name_file
        // file_put_contents (storage_path().'/'.$file_name, $temp  , FILE_APPEND);

        // die();
        
       
        $moments = new Moments;
        $moments->message    = $request->input('message');
        // $moments->image      = $file_name;//$request->input('image');
        $moments->address    = $request->input('address');
        $moments->latitude   = $request->input('latitude');
        $moments->longitude  = $request->input('longitude');
        $moments->save();

        $response = [
                'result' => 'success'
            ];
        return Response::json($response);
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


    public function images($filename){
       
        $path = storage_path().'/'.$filename;

        $img = File::get($path);
        $mime  = File::MimeType($path); 

        $response = Response::make($img);
        $response->header('Content-Type', 'image/jpg');
        return $response;
    }


}
