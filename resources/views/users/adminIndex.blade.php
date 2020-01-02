<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ETSU Faculty Teaching Credentials System (FTCS)</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset ('css/business-frontpage.css') }}" rel="stylesheet">
    <!-- CSS -->

<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>


<style>
.fileuploader{
  position: relative;
  left: 400px;
  bottom: 150px;


  background: white;
  width: 73%;
  height: 400px;
  border: 1px solid #e9e9e9;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}
.fileuploader #upload-label{
  background: #2196F3;
  color: #fff;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  padding: 16px;
  position: absolute;
  top: 45%;
  left: 0;
  right: 0;
  margin-right: auto;
  margin-left: auto;
  min-width: 20%;
  text-align: center;
  padding-top: 40px;
  transition: 0.8s all;
  -webkit-transition: 0.8s all;
  -moz-transition: 0.8s all;
  cursor: pointer;
}
.fileuploader.active{
  background: #2196F3;
}
.fileuploader.active #upload-label{
  background: #fff;
  color: #2196F3;
}
.fileuploader #upload-label span.title{
  font-size: 1.1em;
  font-weight: bold;
  display: block;
}
.fileuploader #upload-label i{
  text-align: center;
  display: block;
  background: white;
  color: #2196F3;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  border-radius: 100%;
  width: 80px;
  height: 80px;
  font-size: 60px;
  padding-top: 10px;
  position: absolute;
  top: -50px;
  left: 0;
  right: 0;
  margin-right: auto;
  margin-left: auto;
}
/** Preview of collections of uploaded documents **/
.preview-container{
  position: fixed;
  right: 10px;
  bottom: 0px;
  width: 300px;
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  visibility: hidden;
}
.preview-container #previews{
  max-height: 700px;
  overflow: 900px;
}
.preview-container #previews .zdrop-info{
  width: 88%;
  margin-right: 2%;
}
.preview-container #previews.collection{
  margin: 0;
}
.preview-container #previews.collection .actions a{
  width: 1.5em;
  height: 1.5em;
  line-height: 1;
}
.preview-container #previews.collection .actions a i{
  font-size: 1em;
  line-height: 1.6;
}
.preview-container #previews.collection .dz-error-message{
  font-size: 0.8em;
  margin-top: -12px;
  color: #F44336;
}
.preview-container .header{
  background: #2196F3;
  color: #fff;
  padding: 8px;
}
.preview-container .header i{
  float: right;
  cursor: pointer;
}

</style>

<script>
$(document).ready(function(){

				initFileUploader("#zdrop");

				function initFileUploader(target) {
					var previewNode = document.querySelector("#zdrop-template");
					previewNode.id = "";
					var previewTemplate = previewNode.parentNode.innerHTML;
					previewNode.parentNode.removeChild(previewNode);


					var zdrop = new Dropzone(target, {
						url: '/Home/UploadFile',
						maxFilesize:20,
						previewTemplate: previewTemplate,
						autoQueue: true,
						previewsContainer: "#previews",
						clickable: "#upload-label"
					});

					zdrop.on("addedfile", function(file) {
						$('.preview-container').css('visibility', 'visible');
					});

					zdrop.on("totaluploadprogress", function (progress) {
						var progr = document.querySelector(".progress .determinate");
						if (progr === undefined || progr === null)
							return;

						progr.style.width = progress + "%";
					});

					zdrop.on('dragenter', function () {
						$('.fileuploader').addClass("active");
					});

					zdrop.on('dragleave', function () {
						$('.fileuploader').removeClass("active");
					});

					zdrop.on('drop', function () {
						$('.fileuploader').removeClass("active");
					});

					var toggle = true;
					/* Preview controller of hide / show */
					$('#controller').click(function() {
						if(toggle){
							$('#previews').css('visibility', 'hidden');
							$('#controller').html("keyboard_arrow_up");
							$('#previews').css('height', '0px');
							toggle = false;
						}else{
							$('#previews').css('visibility', 'visible');
							$('#controller').html("keyboard_arrow_down");
							$('#previews').css('height', 'initial');
							toggle = true;
						}
					});
				}

			});

</script>

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="position:fixed;top:0;left:0;right:0;height:80px">
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
                    <a class="nav-link" style="color: greenyellow;padding-right: 63px">Admin
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

<!-- Header with Background Image -->
    {{--<header class="business-header" >
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

        <div class="row" style="float:left">
            <div class="col-sm-8">
                <br><br>
                <h2 style="color: midnightblue">Dr. Jeff Roach</h2>
                <h2 class="mt-4">Welcome to the Admin homepage for the ETSU Faculty Teaching Credentials System (FTCS)</h2>

                {{-- <p>Qualified faculty members are essential in accomplishing the Mission of East Tennessee
                    State University. The Faculty Teaching Credentials System presents faculty qualifications
                    supportive of competence in teaching and program coordination, assignment history,
                    and faculty contact information. Faculty competence is established by either academic
				or professional/experiential qualifications.</p> --}}


College:
<form action="/deanIn">
  <select name="colleges">
    <option value="Academic Affairs">Academic Affairs</option>
	<option value="Business and Technology">Business and Technology</option>
	<option value="Arts and Sciences">Arts and Sciences</option>
  </select>

  <input type="submit" value="Enter as Dean">
</form>
<br>
Department:
<form action="/coIn">
  <select name="departments">
    <option value="Academic Affairs">Academic Affairs</option>
	<option value="Accounting">Accounting</option>
	<option value="Arts and Sciences">Arts and Sciences</option>
	<option value="Biological Sciences">Biological Sciences</option>
	<option value="Chemistry">Chemistry</option>
	<option value="Communication">Communication</option>
  </select>

  <input type="submit" value="Enter as CO">
</form>
<br>

                <div class="form-group">
                    <form action="credPage">
                        <input type="submit" class="btn btn-primary" value="Credential Officer Management" />
                    </form>
                    <br>
                </div>

                <!-- Uploader Dropzone -->


                <!-- <style scoped>

                </style> -->
                <div id="zdrop" class="fileuploader" >
                  <!-- <style scoped>
                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">

                  </style> -->

                  <div id="upload-label" style="width: 200px;">
                    <i class="material-icons">cloud_upload</i>
                    <span class="title">FTCS Database Upload</span>
                    <span>Select files <span/>
                  </div>
                </div>
                <!-- Preview collection of uploaded documents -->

                <div class="preview-container">
                  <div class="header">
                    <span>Uploaded Files</span>
                    <i id="controller" class="material-icons">keyboard_arrow_down</i>
                  </div>
                  <div class="collection card" id="previews">
                    <div class="collection-item clearhack valign-wrapper item-template" id="zdrop-template">
                      <div class="left pv zdrop-info" data-dz-thumbnail>
                        <div>
                          <span data-dz-name></span> <span data-dz-size></span>
                        </div>
                        <div class="progress">
                          <div class="determinate" style="width:0" data-dz-uploadprogress></div>
                        </div>
                        <div class="dz-error-message"><span data-dz-errormessage></span></div>
                      </div>

                      <div class="secondary-content actions">
                        <a href="#!" data-dz-remove class="btn-floating ph red white-text waves-effect waves-light"><i class="material-icons white-text">clear</i></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>






                <br><br>
            </div>
            <div class="col-sm-4">
                {{--<h2 class="mt-4">Contact Us</h2>
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
                <br>--}}

                <!-- <div class="row"> -->

		<!-- <div class="col s12"> -->



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
