@extends('layout1')

@section('content')
<h1>Enter Loco Details</h1>
<form action="/locodetailssubmit" method="post">
    @csrf

    <div class="container">
        <label for="locono"><b>Loco Number</b></label>
        <input type="text" placeholder="Enter Loco Number" name="locono" required>
        <label for="trainno"><b>Train Number</b></label>
        <input type="text" placeholder="Enter Trainno" name="trainno" required>

        <label for="homeshed"><b>Homeshed</b></label>
        <input type="text" placeholder="Homeshed" name="homeshed" required>
        <label for="source"><b>Source</b></label>
        <input type="text" placeholder="source" name="source" required>
        <label for="destination"><b>Destination</b></label>
        <input type="text" placeholder="Destination" name="destination" required>

        <button type="submit">Submit Loco Details</button>
    </div>
</form>


@endsection
