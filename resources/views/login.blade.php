@extends('layout')

@section('content')

<h2>Login Form</h2>
<img src="{{URL::asset('/image/er.jpg')}}" alt="Eastern Railway" height="300" width="400" class="center">
<form action="/loginsubmit" method="post">
    @csrf

    <div class="container">
        <label for="id"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="id" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">

    </div>
</form>


@endsection
