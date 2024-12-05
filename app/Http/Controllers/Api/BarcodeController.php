<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barcode;
use App\Models\Company;

class BarcodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $token=$request->token;//return $request->token;
       //return $token;
       $company=Company::where('token',$token)->first();
       //return $company;
       if ($company==null){
        $res=array(
            "status"=>"error",
            "message"=>"Company not found"
        );

       }else{
            if(count($request->data)>200){
                $res=array(
                    "status"=>"error",
                    "message"=>"qty of items should be 200 per request" );    
            }else{
                try{
                    Barcode::upsert(
                        $request->data,
                        ['barcode'],
                        ['item_id']
        
                        );
                        $res=array(
                        "status"=>"ok",
                        "message"=>"stored" );

                }catch(Exception $e){
                    $res=array(
                        "status"=>"error",
                        "message"=>$e->getMessage());
                }   
            }
       }
       //dd($company);
      
        return json_encode($res);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
