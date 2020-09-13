@extends('layouts.admin-master')

@section('content')

<form action ="/kaydet" method="post" >
    {{--  formu gönderirken hangi adrese istekte bulunacagını buradan belirliyoruz eğer form dolduracaksak post
    yazıyoruz eğer formda resim vs yüklenecekse yukarda postun yanına enctype="multipart/form-data" eklemeliyiz --}}
    <div class="form-group">
        <label for="exampleName">Name</label>
        <input type="text" name="name" class="form-control" id="exampleName">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  @csrf  {{-- }}//formun kayıt sayfasından geldiğini anlıyor --}}
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection

