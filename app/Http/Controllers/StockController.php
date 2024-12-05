<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Item;
use App\Models\Barcode;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // dd(Stock::with('item')->paginate(10));
        if(auth()->user()->company===null){
            return redirect()->route('error.company');
        } 
        $items=Item::count();
        $barcodes=Barcode::count();
        $stocks=Stock::count();
       // dd($items);
       
        return view('main',['item'=>$items,'barcode'=>$barcodes,'stock'=>$stocks]);
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
    public function show(string $id)
    {
        //
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
}
