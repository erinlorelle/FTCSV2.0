@extends('layouts.master')

@section('content')

    <!-- Page Content -->
    <div class="container" style="position: center">

        <br><br>
        <h2 style="position: center">{{ $user->first_name }} {{ $user->last_name }}</h2>
        <h4 style="position: center">({{ $user->title }})</h4>
        <h6 style="position: center"><a href="mailto:#" style="color: black">{{ $user->username }}</a></h6>

        <br><br>

        <!DOCTYPE html>
        <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>
                body {font-family: Arial;}

                /* Style the tab */
                .tab {
                    overflow: hidden;
                    border: 1px solid #ccc;
                    background-color: #f1f1f1;
                }

                /* Style the buttons inside the tab */
                .tab button {
                    background-color: inherit;
                    float: left;
                    border: none;
                    outline: none;
                    cursor: pointer;
                    padding: 14px 16px;
                    transition: 0.3s;
                    font-size: 17px;
                }

                /* Change background color of buttons on hover */
                .tab button:hover {
                    background-color: #ddd;
                }

                /* Create an active/current tablink class */
                .tab button.active {
                    background-color: #ccc;
                }

                /* Style the tab content */
                .tabcontent {
                    display: none;
                    padding: 6px 12px;
                    border: 1px solid #ccc;
                    border-top: none;
                }
            </style>
        </head>
        <body>

        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'Academic')" id="defaultOpen">Academic Qualifications</button>
            <button class="tablinks" onclick="openCity(event, 'Courses')">Courses Taught</button>
        </div>

        <div id="Academic" class="tabcontent">
            <br>
            <div style="margin-bottom: 150px">
                <table style="float:left; margin-left: 50px">
                    <tr><th>Rank</th><td style="padding-left: 20px">   Graduate Faculty Member</td></tr>
                    <tr><th>Date of Rank</th><td style="padding-left: 20px">   August 2017</td></tr>
                    <tr><th>Date Eligible for Next Rank:</th><td style="padding-left: 20px">   August 2022</td></tr>
                    <tr><th>Graduate Faculty Status: </th><td style="padding-left: 20px">   Graduate Faculty Member</td></tr>
                </table>

                <table style="float: right; margin-right: 125px">
                    <tr>
                        <tr><th>Employment Status:</th><td style="padding-left: 20px">   Graduate Faculty Member</td></tr>
                        <tr><th>Employment Category:</th><td style="padding-left: 20px">   Professional</td></tr>
                        <tr><th>Years at ETSU:</th><td style="padding-left: 20px">   22</td></tr>
                        <tr><th>Tenure Status:</th><td style="padding-left: 20px">   Tenured</td></tr>
                    </tr>
                </table>
            </div>

            <p>
                <hr>
                <br>
                <h4>Academic Degrees</h4>
                <br>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Degree</th>
                        <th>Initials</th>
                        <th>Discipline</th>
                        <th>Institution</th>
                        <th>Transcript On File</th>
                    </tr>
                    </thead>
                    <tr>
                        <td>{{ $user->degree }}</td>
                        <td>EDD</td>
                        <td>Educational Leadership</td>
                        <td>{{ $user->institution }}</td>
                        <td>Yes</td>
                </table>
                <hr>
            </div>

            <div id="Courses" class="tabcontent">
                <br>
                <h4>Current Courses Taught 2018 - 2019</h4>
                <br>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Course ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Semester</th>
                        <th>Certification</th>
                    </tr>
                    </thead>
                    <tr>
                        <td>ACCT3110</td>
                        <td>Management Accounting</td>
                        <td>Prerequisite(s): ACCT 2020 junior standing. A study of cost accounting emphasizing job order costing, process costing, capital budgeting, and budget control analysis.</td>
                        <td>Fall 2018</td>
                        <td>{{ $user->credentials }}</td>
                </table>

                <hr>
            </div>
        </div>
        <script>
            document.getElementsByClassName('tablinks')[0].click()
            function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }
        </script>

        </body>
        <br><br>
        </html>


    </div>

@endsection