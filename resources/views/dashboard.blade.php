@extends('layouts.app-master')

@section('content')


<div class="container">
    <h2 style="margin-top: 12px;" class="alert alert-success">Laravel Ajax CRUD Application -
       <a href="https://www.codingdriver.com" target="_blank" >CodingDriver</a>
     </h2><br>
     <div class="row" style="clear: both;margin-top: 18px;">
       <div class="col-12 text-right">
          <a href="/login" class="navbar-brand">
          Laravel Custom Auth
          </a> <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
             <ul class="navbar-nav mr-auto"></ul>
             <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="/register" class="nav-link">Register</a></li>
             </ul>
          </div>
       </div>
    </div>
    <div class="row">
        <div class="wrapper ">
           <div class="main-panel">
             @yield('content')
           </div>
         </div>
    </div>
</div>
@endsection