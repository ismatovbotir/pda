@extends('layouts.app')

@section('left')
@include('layouts.sidebar')
@endsection
@section('contentHead')
@parent
@endsection
@section('contentBody')

<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Код</th>
        <th scope="col">Шк</th>
        <th scope="col">Наименование</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($items as $idx =>$item)

      <tr>
        <th scope="row">{{$idx+1}}</th>
        <td>{{$item->id}}</td>
        <td>
          @if($item->barcodes_count>0)
          {{$item->barcodes[0]->barcode}} ({{$item->barcodes_count}})
          @endif
        </td>
        <td>{{$item->name}}</td>
        <td>
          <a href="{{route('item.show',['item'=>$item->id])}}">edit</a>
        </td>
      </tr>

      @endforeach
    </tbody>
  </table>
  {{$items->links()}}
</div>



@endsection