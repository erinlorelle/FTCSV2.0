@extends('layouts.master')

@section('content')

    <!-- Page Content -->
    <div class="container" style="position: center">

        <br><br>
        <h2 style="position: center">ETSU Faculty Roster Report</h2>
        <div class="form-group">
            <form target= "_blank" style="float: right">
                <input type="button" class="btn btn-primary" value="Save as PDF" onclick="window.print()"/>
            </form>
            <br>
        </div>
        <br><br>
        <div style="position: center">
            Department:
            <select id="myInput" onclick="myFunction()">
                <option value="" selected>All</option>
                <option value="Appalachian Studies">Academic Affairs</option>
                <option value="Accounting">Accounting</option>
                <option value="Biostatistics">Art & Design</option>
                <option value="Counseling and Human Services">Chemistry</option>
            </select>
            Faculty Type:
            <select id="myData" onclick="myFunctionTwo()">
                {{--<option value="" selected>All</option>--}}
                <option value="Full-Time">Full-time</option>
                <option value="Part-Time">Part-time</option>
                <option value="Graduate Associate">Graduate Associate</option>
            </select>
            Start Year:
            <select id="myStuff" onclick="myFunctionThree()">
                {{--<option value="" selected>All</option>--}}
                <option value="2018">Fall 2018 - Summer 2019</option>
                <option value="2017">Fall 2017 - Summer 2018</option>
                <option value="2016">Fall 2016 - Summer 2017</option>
                <option value="2015">Fall 2015 - Summer 2016</option>
            </select>
        </div>



        <section id="contact">

            <script>
                function myFunction() {
                    // Declare variables
                    var input, filter, table, tr, td, i;
                    input = document.getElementById("myInput");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("myTable");
                    tr = table.getElementsByTagName("tr");

                    // Loop through all table rows, and hide those who don't match the search query
                    for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName("td")[0];
                        if (td) {
                            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                        }

                    }
                }
            </script>

            <script>
                function myFunctionTwo() {
                    // Declare variables
                    var input, filter, table, tr, td, i;
                    input = document.getElementById("myData");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("myTable");
                    tr = table.getElementsByTagName("tr");

                    // Loop through all table rows, and hide those who don't match the search query
                    for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName("td")[3];
                        if (td) {
                            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                        }

                    }
                }
            </script>

            <script>
                function myFunctionThree() {
                    // Declare variables
                    var input, filter, table, tr, td, i;
                    input = document.getElementById("myStuff");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("myTable");
                    tr = table.getElementsByTagName("tr");

                    // Loop through all table rows, and hide those who don't match the search query
                    for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName("td")[1];
                        if (td) {
                            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                tr[i].style.display = "none";
                            }
                        }

                    }
                }
            </script>

            <style>

                #myInput, #myData, #myStuff {
                    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
                    background-position: 10px 12px; /* Position the search icon */
                    background-repeat: no-repeat; /* Do not repeat the icon image */
                    width: 25%; /* Full-width */
                    font-size: 16px; /* Increase font-size */
                    padding: 8px 20px 12px 40px; /* Add some padding */
                    border: 1px solid #ddd; /* Add a grey border */
                    margin-bottom: 12px; /* Add some space below the input */
                }

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
                    <th>Faculty Name</th>
                    <th>Courses Taught</th>
                    <th>Academic Degrees</th>
                    <th>Professional Qualifications</th>
                </tr>
                <?php $users = App\User::all(); ?>
                @foreach($users as $user)
                    <?php $datas = array();
                            $datas[] = $user; ?>

                    <tr>
                        <td>{{$user->last_name}}, {{$user->first_name}} <font hidden>{{$user->department}}</td>
                        <td><li>{{$user->start_year}}</li><ul style="list-style-type: circle"><li>ETSU1020 Foundations of Student Success</li></ul></td>
                        <td><li>{{$user->degree}}</li></td>
                        <td><li>None Required <font hidden>{{$user->type}}</li></td>
                        {{--<td><a href="majors/edit/{{$major->id}}"><i class="fas fa-pencil-alt"></i></td>
                        <td><a href="majors/delete/{{$major->id}}"><i class="far fa-trash-alt"></i></a></td>--}}
                    </tr>
                @endforeach

            </table>
            <br><br>






@endsection