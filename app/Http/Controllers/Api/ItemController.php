<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\StockResource;
use App\Models\Stock;
use App\Models\Company;
use App\Models\Item;
use Exception;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $res=array(
            "status"=>"error",
            "message"=>"problem"
        );
        $item=Item::query()->orderByDesc('id')->first();
        if($item){
            $res["status"]="ok";
            $res["message"]=$item->id;
        };

        return  $res;
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
                    Item::upsert(
                        $request->data,
                        ['id'],
                        ['name','mark','company_id']
        
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

    public function status($token=""){
        return (Company::where('token',$token)->get())->responce()->setStatusCode(202);;
    }
}
