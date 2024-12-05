@extends('layouts.app')



@section('contentBody')

<div class="body flex-grow-1">
        <div class="container-lg px-4">
          <div class="row g-4 mb-4">
            <div class="col-sm-6 col-xl-3">
              <div class="card text-white bg-primary">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                  <div>
                    <div class="fs-4 fw-semibold">{{$item}}<span class="fs-6 fw-normal"></span></div>
                    <div>Items</div>
                  </div>
                  <div class="dropdown">
                    <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <svg class="icon">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-options"></use>
                      </svg>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                  </div>
                </div>
                <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                  
                </div>
              </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-xl-3">
              <div class="card text-white bg-info">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                  <div>
                    <div class="fs-4 fw-semibold">{{$barcode}}<span class="fs-6 fw-normal"></span></div>
                    <div>Barcodes</div>
                  </div>
                  <div class="dropdown">
                    <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <svg class="icon">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-options"></use>
                      </svg>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                  </div>
                </div>
                <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                 
                </div>
              </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-xl-3">
              <div class="card text-white bg-warning">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                  <div>
                    <div class="fs-4 fw-semibold">{{$stock}}<span class="fs-6 fw-normal"></span></div>
                    <div>Stocks</div>
                  </div>
                  <div class="dropdown">
                    <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <svg class="icon">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-options"></use>
                      </svg>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                  </div>
                </div>
                <div class="c-chart-wrapper mt-3" style="height:70px;">
                 
                </div>
              </div>
            </div>
           
            <!-- /.col-->
          </div>
        
       
        </div>
      </div>
      


@endSection