@extends('layouts.master')

@section('content')

    <!-- Page Content -->
    <div class="container">
        <br><br>
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <br><br>
                        <h2>FTCS Login</h2>
                        <div class="col-sm-4">
                            <h2 class="mt-4"></h2>
                                <form name="login">
                                    {{ csrf_field() }}

                                    @include('layouts.flash')

                                    <br>
                                    <div class="form-group" style="width: 250px;" style="text-align: center">
                                        Username: <input type="text" class="form-control" id="username" name="username">
                                    </div>

                                    <div class="form-group" style="width: 250px;" style="text-align: center">
                                        Password: <input type="password" class="form-control" id="password" name="password">
                                    </div>

                                    <div class="form-group">
                                    <button type="submit" class="btn btn-primary" onclick="check(this.form)" value="Login"> Submit </button>
                                    </div>
                                    <br><br><br><br>
                                    @include('layouts.errors')

                                </form>
                                    {{--<div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <br><br><br><br>
                                    </div>--}}
									{{--	
                                    <div class="form-group">
                                        <form action="facLogin">
                                        
                                            <input type="submit" class="btn btn-primary" value="Submit" />
                                        </form>
                                        <br><br><br><br>
                                    </div>
									--}}
									

									
                               {{-- <a href="submit">Submit</a>--}}    {{--was register--}}
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

	<script language="javascript">
function check(form)/*function to check userid & password*/
{
 /* Admin check */
 if(form.username.value == "admin" && form.password.value == "password")
  {
    window.open("/facLogin") /*opens the target page while Id & password matches*/
      /*window.location.href = "/facLogin";*/
  }
  /* Dean check */
  else if(form.username.value == "dean" && form.password.value == "password")
  {
	window.open("/deanIn")/*opens the target page while Id & password matches*/  
  }
  /* CO check */
  else if(form.username.value == "credoff" && form.password.value == "password")
  {
	window.open("/coIn")/*opens the target page while Id & password matches*/  
  }
  /*the following code checkes whether the entered userid and password are matching*/
 else
 {
   alert("Incorrect Username or Password")/*displays error message*/
  }
}
</script>

@endsection





