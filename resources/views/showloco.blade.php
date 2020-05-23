@extends('layout1')

@section('content')

<div>
    <form id="form1" class="boss">

        <div id="dvContainer">
            <h1>Loco Details</h1>
            <div>
                <table>
                    <tr>
                        <th>Loco Number</th>
                        <th>Train No</th>
                        <th>Homeshed</th>
                        <th>Source</th>
                        <th>Destination</th>
                    </tr>

                    @foreach($locodetails as $l)
                    <tr>

                        <td>{{$l->locono}}</td>
                        <td>{{$l->trainno}}</td>
                        <td>{{$l->homeshed}}</td>
                        <td>{{$l->source}}</td>
                        <td>{{$l->destination}}</td>
                    </tr>
                    @endforeach


                </table>
            </div>
        </div>
        <input type="button" value="Print" id="btnPrint" />
    </form>
</div>
@endsection
