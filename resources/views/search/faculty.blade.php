@extends('layouts.master')

@section('content')

    <!-- Page Content -->
    <div class="container" style="position: center">

        <br><br>
        <h2 style="position: center">ETSU University's Teaching Faculty List</h2>
        <br>

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

                <?php $users = App\User::all(); ?>
                @foreach($users as $user)

                    <tr>
                        <td><a href="users/{{$user->id}}">{{$user->last_name}}, {{$user->first_name}}</a></td>
                        <td>{{$user->department}}</td>
                        <td>{{$user->college}}</td>
                        {{--<td><a href="majors/edit/{{$major->id}}"><i class="fas fa-pencil-alt"></i></td>
                        <td><a href="majors/delete/{{$major->id}}"><i class="far fa-trash-alt"></i></a></td>--}}
                    </tr>
                @endforeach

            </table>
            <br><br>

    </div>

@endsection