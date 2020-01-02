@extends('layouts.master')

@section('content')

    <!-- Page Content -->
    <div class="container" style="position: center">

        <br><br>
        <h2 style="position: center">Something...Department..Faculty List</h2>
        <br>
        <p>
            <a href="" style="font-size: larger">All</a><a href=""> A</a><a href=""> B</a><a href=""> C</a><a href=""> D</a><a href=""> E</a><a href=""> F</a><a href=""> G</a><a href=""> H</a><a href=""> I</a><a href=""> J</a><a href=""> K</a><a href=""> L</a><a href=""> M</a><a href=""> N</a><a href=""> O</a><a href=""> P</a><a href=""> Q</a><a href=""> R</a><a href=""> S</a><a href=""> T</a><a href=""> U</a><a href=""> V</a><a href=""> W</a><a href=""> X</a><a href=""> Y</a><a href=""> Z</a>
        <form class="example" action="action_page.php">
            Search for Department <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        <div class="form-group">
            <form action="https://pdf-ace.com/pdfme/" target= "_blank" style="float: right">
                <input type="submit" class="btn btn-primary" value="Save as PDF" />
            </form>
            <br>
        </div>
        </p>
        <section id="contact">

            <body>
            <br>
            <table class="table">
                <thead>
                <tr>
                    <th>Faculty Name</th>
                    <th>Department</th>
                    <th>College</th>
                </tr>
                </thead>
                <?php $majors = App\Major::all(); ?>
                @foreach($majors as $major)

                    <tr>
                        {{--<td><a href="users/{{$major->id}}">Spiderman</a></td>--}}
                        <td><a href="#">Spiderman</a></td>
                        <td>{{$major->name}}</td>
                        <td>{{$major->college}}</td>
                        {{--<td><a href="majors/edit/{{$major->id}}"><i class="fas fa-pencil-alt"></i></td>
                        <td><a href="majors/delete/{{$major->id}}"><i class="far fa-trash-alt"></i></a></td>--}}
                    </tr>
                @endforeach

            </table>


    </div>

@endsection