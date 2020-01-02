@extends('layouts.master')

@section('content')

    <!-- Page Content -->
    <div class="container" style="position: center">

        <br><br>
        <h2 style="position: center">Accounting's Teaching Faculty List</h2>
        <br>
        {{--<div style="position: left">
            <a href="facultyMember" style="font-size: larger">All</a><a href=""> A</a><a href=""> B</a><a href=""> C</a><a href=""> D</a><a href=""> E</a><a href=""> F</a><a href=""> G</a><a href=""> H</a><a href=""> I</a><a href=""> J</a><a href=""> K</a><a href=""> L</a><a href=""> M</a><a href=""> N</a><a href=""> O</a><a href=""> P</a><a href=""> Q</a><a href=""> R</a><a href=""> S</a><a href=""> T</a><a href=""> U</a><a href=""> V</a><a href=""> W</a><a href=""> X</a><a href=""> Y</a><a href=""> Z</a>
        </div>--}}
        {{-- <div class="form-group">
             <form action="https://pdf-ace.com/pdfme/" target= "_blank" style="float: right">
                 <input type="submit" class="btn btn-primary" value="Save as PDF" />
             </form>
         </div>--}}
        <br>
        <h5>Search for Faculty</h5>
        <section id="contact">

            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Faculty..">

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
                    <th>Faculty Name</th>
                    <th>Department</th>
                    <th>College</th>
                </tr>

                <tr><td><a href="users/3">Bunny, Bugs</td><td>Accounting</td><td>Business & Technology</td>
                <tr><td><a href="users/2">Popcorn, Kathy</td><td>Accounting</td><td>Business & Technology</td>
            </table>

            </table>
            <br><br>

    </div>

@endsection