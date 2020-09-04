<<<<<<< HEAD

<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<form action ='/kaydet' method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
=======
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
>>>>>>> 4e131ad9bad936e8778484dcdf76597a11ba74b4
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
<<<<<<< HEAD
    <input type="password" class="form-control" id="exampleInputPassword1">
=======
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
>>>>>>> 4e131ad9bad936e8778484dcdf76597a11ba74b4
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
<<<<<<< HEAD
  @csrf 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
=======
  @csrf  {{-- }}//formun kayıt sayfasından geldiğini anlıyor --}}
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection

>>>>>>> 4e131ad9bad936e8778484dcdf76597a11ba74b4
