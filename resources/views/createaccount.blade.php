@extends('layout')

@section('content')
<h1>Create Account</h1>
<form action="/createsubmit" method="post">
    @csrf

    <div class="container">
        <label for="id"><b>Id</b></label>
        <input type="text" placeholder="Enter Id" name="id" required>
        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>
        <label for="phone"><b>Phone</b></label>
        <input type="text" placeholder="Enter Phone No" name="phone" required>

        <button type="submit">Create User</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">

    </div>
</form>


@endsection
