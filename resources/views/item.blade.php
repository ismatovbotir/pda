@extends('layouts.app')

@section('left')
@include('layouts.sidebar')
@endsection


@section('contentBody')

<div class="card" style="width: 18rem;">
  
  <div class="card-body">
    <h5 class="card-title">Kod: {{$item->id}}</h5>
    <p class="card-text">{{$item->name}}.</p>
    <p class="card-text">Barcodes:</p>
    @foreach($item->barcodes as $barcode) 
     {{$barcode->barcode}},
    @endforeach
    <p>Stock: <span class="danger">{{$totalStock}}</span></p>
  </div>
  <ul class="list-group list-group-flush">
  @foreach($item->stocks as $stock) 
  <li class="list-group-item"> {{$stock->warehouse}} - {{$stock->qty}}</li>
  @endforeach
  
    
  </ul>
  
</div>


@endsection