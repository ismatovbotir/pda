<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v5.1.1
* @link https://coreui.io/product/free-bootstrap-admin-template/
* Copyright (c) 2024 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/main/LICENSE)
-->
@extends('layouts.app')
<html lang="en">
 
  <body>
    @include('layouts.sidebar')
    @section('content')
    <div class="wrapper d-flex flex-row min-vh-100">
    
        <h1 class="danger">You have no Company</h1> 
    </div>
      <footer class="footer px-4">
        <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io/product/free-bootstrap-admin-template/">Bootstrap Admin Template</a> &copy; 2024 creativeLabs.</div>
        <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">CoreUI UI Components</a></div>
      </footer>
    </div>
    @endsection
   