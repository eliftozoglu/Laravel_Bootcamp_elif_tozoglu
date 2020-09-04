
@extends('layouts.admin-master')

@section('content')
    <form action ="/guncelle/{{$user->id}}" method="post" >
        {{--  formu gönderirken hangi adrese istekte bulunacagını buradan belirliyoruz eğer form dolduracaksak post
        yazıyoruz eğer formda resim vs yüklenecekse yukarda postun yanına enctype="multipart/form-data" eklemeliyiz --}}
        <div class="form-group">
            <label for="exampleName">Name</label>
            <input type="text" name="name" value="{{$user->name}}" class="form-control" id="exampleName">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" value="{{$user->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        @csrf  {{-- }}//formun kayıt sayfasından geldiğini anlıyor --}}
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
