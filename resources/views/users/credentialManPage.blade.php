<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    @include('layouts.flash')
    <title>ETSU Faculty Teaching Credentials System (FTCS)</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset ('css/business-frontpage.css') }}" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">

        <a class="navbar-brand" href="http://www.etsu.edu" target="_blank"><img src="{{ asset('img/etsu_logo_gold.png') }}" width="273" height="45" alt="ETSU"></a>
        <div class="nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" style="color: whitesmoke;font-size: x-large;outline: none">Reports</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="facultyRoster">Faculty Roster Report</a>
                    <a class="dropdown-item" href="gaRoster">Graduate Assistant Roster Report</a>
                    <a class="dropdown-item" href="facultyCred">Faculty Credentials Report</a>
                    <a class="dropdown-item" href="courseSecQual">Course Section Qualifications Percentage</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" style="color: whitesmoke;font-size: x-large;outline: none" href="#">Search for Faculty by</a>
                <div class="dropdown-menu" style="margin-left: 125px">
                    <a class="dropdown-item" href="faculty">Faculty Name</a>
                    <a class="dropdown-item" href="department">Department</a>
                    <a class="dropdown-item" href="course">Course</a>
                </div>
            </li>


        </div>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/home">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/help">Help</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login" style="color: #FFC72C;outline: none">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

   {{-- <!-- Header with Background Image -->
    <header class="business-header" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <h1 class="display-3 text-center text-white mt-4">Faculty Teaching Credentials System</h1> -->

                </div>
            </div>
        </div>
    </header>--}}

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-sm-8">
                <br><br>
                <h2 style="color: midnightblue">
				Department Credential Officers
				</h2>
				<br>


                    <?php $users = App\User::whereHas('roles', function ($query){$query->where('title', 'Credit');})->orderBy('first_name')->get();?>
                    @foreach($users as $user)
                        <form method="POST" action="/credManPage/{{ $user->id }}">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}

                        {{$user->first_name}} {{$user->last_name}}
                            <input type="submit" value="-">
                        </form>
                        <br>
                       {{-- <form action="/addCred">

                            <input type="submit" value="+">
                        </form>--}}
                    @endforeach

                <br>
                <form action="/addCred">

                    <input type="submit" value="+">
                </form>

				{{--
				<form action="/credRemoveConfirm">
				Kathy Popcorn
				<input type="submit" value="-">
				</form>
				<form action="/addCred">
				
				<input type="submit" value="+">
				</form>--}}
				
				<br>
				<br>
				
				<center>
				<form action="/credPage">
				<input type="submit" value="Return">
				</form>
				</center>
				
                <script language="javascript">
				function myFunction() 
				{
				confirm("Are you sure you wish to remove this credential officer?");
				}
				</script>
				
				
<br>
<br>				
				
                
                <br>
            </div>
            {{--<div class="col-sm-4">
                <h2 class="mt-4">Contact Us</h2>
                <address>
                    <strong>Marsh Grube (SACS Director)</strong>
                    <br>1276 Gilbreath Dr
                    <br>Johnson City, TN 37614
                    <br>
                </address>
                <address>
                    <abbr title="Phone">P:</abbr>
                    (423) 439-4150
                    <br>
                    <abbr title="Email">E:</abbr>
                    <a href="mailto:#">grube@etsu.edu</a>
                </address>
                <a href="https://www.etsu.edu/academicaffairs/" target="_blank">Office of the Provost and Vice President</a>
            </div>--}}
        </div>
    </div>


<!-- Footer -->
<footer class="py-5 bg-dark" style="position:fixed;bottom:0;left:0;right:0;height:30px">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; <a href="http://www.etsu.edu" target="_blank" style="color:white">East Tennessee State University </a>2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>


    </body>

    </html>