@extends('layouts.masterb')

@section('content')

    <!-- Header with Background Image -->
    <header class="business-header" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <h1 class="display-3 text-center text-white mt-4">Faculty Teaching Credentials System</h1> -->

                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-sm-8">
                <h2 class="mt-4">Welcome to the ETSU Faculty Teaching Credentials System (FTCS)</h2>
                <p>Qualified faculty members are essential in accomplishing the Mission of East Tennessee
                    State University. The Faculty Teaching Credentials System presents faculty qualifications
                    supportive of competence in teaching and program coordination, assignment history,
                    and faculty contact information. Faculty competence is established by either academic
                    or professional/experiential qualifications.</p>
                <p>You can access information about a faculty member in several ways: <a class="cssLinks"
                                                                                         href="department" title="Search by department">Department</a>,
                    <a class="cssLinks" href="faculty" title="Search by name">Faculty
                        Name</a>, or <a class="course" href="course" title="Search by course">
                        Course</a>.
                <div style="text-align: center;font-weight: bold">
                    <a href="https://www.etsu.edu/president/mission.php" target="_blank" style="color: #041E42" title="ETSU's Mission">ETSU Mission</a>
                    <br>
                    <a href="https://www.etsu.edu/policies/academic/faculty/faculty_credentials.php" target="_blank" style="color: #041E42" title="ETSU's Standards">Teaching Credentials Standards</a>
                    <br>
                    <a href="https://www.etsu.edu/academicaffairs/etsusacs.php" target="_blank" style="color: #041E42" title="SACS Credential Guidelines">SACS
                        Credential Guidelines</a>
                    <br>
                    <a href="https://www.etsu.edu/gradstud/documents/forms/gradfacproc212.pdf" target="_blank" style="color: #041E42" title="Graduate faculty status">Guidelines for Graduate Faculty Appointment</a>
                    <br>
                    <a href="instructionChair" target="_blank" style="color: #041E42" title="FTCS Training Document">Instructions for Chairs (pdf)</a>
                    <br>
                </div>

                </p>
                <br>
            </div>
            <div class="col-sm-4">
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
            </div>
        </div>
        <br>



@endsection
