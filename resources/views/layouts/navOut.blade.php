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