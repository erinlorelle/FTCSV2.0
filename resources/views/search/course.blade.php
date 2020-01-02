@extends('layouts.master')

@section('content')

    <!-- Page Content -->
    <div class="container" style="position: center">

        <br><br>
        <h2 style="position: center">ETSU Course List</h2>
        <br>

       {{-- <div class="form-group">
            <form action="https://pdf-ace.com/pdfme/" target= "_blank" style="float: right">
                <input type="submit" class="btn btn-primary" value="Save as PDF" />
            </form
        </div>--}}
        <br>
        <h5>Search for Course Code or Course Name</h5>
        <section id="contact">

            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for course..">

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
            <style>

                #myInput {
                    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
                    background-position: 10px 12px; /* Position the search icon */
                    background-repeat: no-repeat; /* Do not repeat the icon image */
                    width: 100%; /* Full-width */
                    font-size: 16px; /* Increase font-size */
                    padding: 12px 20px 12px 40px; /* Add some padding */
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
            <table id="myTable">
                <tr class="header">
                    <th>Course Code</th>
                    <th>Course Name</th>
                    <th>Department</th>
                    <th>College</th>
                </tr>

                    <tr><td><a href="biol5597">BIOL 5597</a></td><td><a href="biol5597">Recombinant DNA Lab</a></td><td>Biological Sciences</td><td>Arts & Sciences</td></tr>
                    <tr><td><a href="math5327">MATH 5327</a></td><td><a href="math5327">Time Series Analysis</a></td><td>Mathematics & Statistics</td><td>Arts & Sciences</td></tr>
                    <tr><td><a href="soci5900">SOCI 5900</a></td><td><a href="soci5900">Independent Study</a></td><td>Sociology & Anthropology</td><td>Arts & Sciences</td></tr>
                    <tr><td><a href="cuai5426">CUAI 5426</a></td><td><a href="cuai5426">Secondary Clnical Field I</a></td><td>Curriculum & Instruction</td><td>Clemmer College</td></tr>
                    <tr><td><a href="psci3350">PSCI 3350</a></td><td><a href="psci3350">Intl lPol Econ</a></td><td>Pol Sc, Intl Affairs & Pub Adm</td><td>Arts & Sciences</td></tr>
                    <tr><td><a href="eced4018">ECED 4018</a></td><td><a href="eced4018">Honors Thesis</a></td><td>Early Childhood Education</td><td>Clemmer College</td></tr>

            </table>
            <br><br>

    </div>

@endsection