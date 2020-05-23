<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>

<body>
    <div class="header">
        @section('header')
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand -->

            <img src="{{URL::asset('/image/er_logo.jpg')}}" alt="Eastern Railway" width="100" height="100" class="navbar-brand">

            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="list">Users List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create">Create Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="locodetails">Submit Loco Details</a>
                </li>
            </ul>
        </nav>
        @show
    </div>
    <div class="content">
        @section('content')

        @show
    </div>
    <div class="footer">
        @section('footer')
        <footer class="page-footer font-small blue">

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright: Eastern Railway
            </div>
            <!-- Copyright -->

        </footer>
        @show
    </div>
</body>

</html>
