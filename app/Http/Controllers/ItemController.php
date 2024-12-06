<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Barcode;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items=Item::withCount('barcodes')->paginate(20);

       // dd($items);
        return view('items',['items'=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)

    {
        //dd($id);
        
        $item=Item::where('id',$id)->with('barcodes')->with('stocks')->first();

        if($item){
        $totalStock='';
           $stocks=$item->stocks;
           foreach($stocks as $stock){

            $totalStock+=$stock->qty;

           }
            //dd($item);    
            return view('item',['item'=>$item,'totalStock'=>$totalStock]);
        }else{
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
    public function search(Request $request,){
        $barcode=$request->input('barcode');
        if(strlen($barcode)>6){
            $barcode=Barcode::where('barcode',$barcode)->first();
            if($barcode==null){
                return redirect()->route('main.index');
            }else{
                //dd($barcode->item);
                return redirect()->route('item.show',['item'=>$barcode->item_id]);
            }

        }else{
            return redirect()->route('item.show',['item'=>$barcode]);
        }
        
        

    }
}
