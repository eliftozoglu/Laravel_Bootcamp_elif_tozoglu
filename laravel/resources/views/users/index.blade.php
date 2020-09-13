<<<<<<< HEAD
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>List of users</title>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-3">

            <ul class="list-group">
                @foreach($users as $user)
                    <li class="list-group-item">{{$user->name}}</li> <br>
                @endforeach
            </ul>
        </div>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>
</html>
=======
@extends('layouts.admin-master')

@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-9">
            <div class="table-responsive table--no-card m-b-30">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                    <tr>
                        <th>date</th>
                        <th>name</th>
                        <th class="text-right">email</th>
                        <th class="text-right">Delete</th>
                        <th class="text-right">Update</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->updated_at}}</td>
                            <td>{{$user->name}}</td>
                            <td class="text-right">{{$user->email}}</td>
                            <td class="text-right"><button type="button" class="btn btn-primary" onclick="location.href='/sil/{{$user->id}}'">Sil</button></td>
                            <td class="text-right"><button type="button" class="btn btn-primary" onclick="location.href='/guncelle/{{$user->id}}'">Güncelle</button></td>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
        <div class="col-lg-3">
            <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                <div class="au-card-inner">
                    <div class="table-responsive">
                        <table class="table table-top-countries">
                            <tbody>
                            <tr>
                                <td>United States</td>
                                <td class="text-right">$119,366.96</td>
                            </tr>
                            <tr>
                                <td>Australia</td>
                                <td class="text-right">$70,261.65</td>
                            </tr>
                            <tr>
                                <td>United Kingdom</td>
                                <td class="text-right">$46,399.22</td>
                            </tr>
                            <tr>
                                <td>Turkey</td>
                                <td class="text-right">$35,364.90</td>
                            </tr>
                            <tr>
                                <td>Germany</td>
                                <td class="text-right">$20,366.96</td>
                            </tr>
                            <tr>
                                <td>France</td>
                                <td class="text-right">$10,366.96</td>
                            </tr>
                            <tr>
                                <td>Australia</td>
                                <td class="text-right">$5,366.96</td>
                            </tr>
                            <tr>
                                <td>Italy</td>
                                <td class="text-right">$1639.32</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
>>>>>>> 4e131ad9bad936e8778484dcdf76597a11ba74b4
