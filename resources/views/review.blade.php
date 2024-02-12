@extends('layouts.app-master')

@section('content')



<h1>Форма обработки</h1>
      
      
      @if($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
      @endif


   <form method="POST" action="/review/check">
    @csrf
     
      <input type="email" name="email" id="email" placeholder="Введите Емайл" class="form-control"><br>
      <input type="subject" name="subject" id="subject" placeholder="Введите компанию" class="form-control"><br>    
          <textarea  name="message" id="message" placeholder="Введите предпочтения" class="form-control"></textarea><br> 
          <button type="submit" class="btn btn-success">Отправить</button><br> 
   </form>

   

@endsection