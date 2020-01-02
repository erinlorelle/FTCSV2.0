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
                    <a class="nav-link" style="color: greenyellow;padding-right: 63px">Credential Officer
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
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

    <div class="container" style="position: center">

        <br><br>
        <h2 style="position: center">Credential Management Page</h2>
        <br>
        <h3>Counseling and Human Services</h3>
        {{--<div class="form-group">
            <form action="https://pdf-ace.com/pdfme/" target= "_blank" style="float: right">
                <input type="submit" class="btn btn-primary" value="Save as PDF" />
            </form>

        </div>--}}


        <section id="contact">
            <style>


                #myTable {
                    border-collapse: collapse; /* Collapse borders */
                    width: 100%; /* Full-width */
                    border: 1px solid #ddd; /* Add a grey border */
                    font-size: 18px; /* Increase font-size */
                }

                #myTable th, #myTable td {
                    text-align: left; /* Left-align text */
                    padding: 12px; /* Add padding */
                }

                #myTable tr {
                    /* Add a bottom border to all table rows */
                    border-bottom: 1px solid #ddd;
                }

                #myTable tr.header, #myTable tr:hover {
                    /* Add a grey background color to the table header and on hover */
                    background-color: #f1f1f1;
                }

            </style>




            <br>
            <table id="myTable">
                <tr class="header">
                    <th>Course</th>
                    <th>Course Code</th>
                    <th>Semester</th>
                    <th>Faculty Name</th>
                    <th>Credential</th>
                    <th>Change Credentials</th>
                    <th></th>
                </tr>

                <?php $users = App\User::where('department','Counseling and Human Services')->get(); ?>
                @foreach($users as $user)

                    <tr>
                        <td>Foundations of Student Success</td>
                        <td>ETSU 1020</td>
                        <td>{{$user->start_year}}</td>
                        <td>{{$user->last_name}}, {{$user->first_name}} ({{$user->type}})</td>
                        <td>{{$user->credentials}} <font hidden>{{$user->department}}</td>
                        <td>
                            {{--<form method="POST" action="/credAppal/{{ $user->id }}">
                                {{ csrf_field() }}
                                {{method_field('PUT')}}--}}

                            <div class="form-group">
                                <select class="form-control" id="titleCred" name="titleCred">
                                    <option value="Academic">Academic</option>
                                    <option value="Professional">Professional</option>
                                    <option value="G/A">G/A</option>
                                </select>
                            </div>
                        <td>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </td>
                        </form>
                    </tr>



                @endforeach
            </table>
            <br><br>

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