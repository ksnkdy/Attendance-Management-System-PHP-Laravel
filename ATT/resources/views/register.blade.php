<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>@yield ('title')</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
<html>
<head>
    <div id="img-holder">

    </div>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #385d7a;
        }
        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }
        #img-holder{
            background: url(home-img.jpg)
        }
    </style>
</head>
<body background="layout\home-img.jpg">
<h1>Attendance Management System </h1>
<ul>
    <li><a class="active" href="{{url('/home')}}">Home</a></li>
    <li><a href=" {{url('/attendance')}}">Attendance</a></li>
    <li><a href="{{url('/employee/create')}}">Register</a></li>
    <li><a href="{{url('/employee')}}">Employee Details</a></li>
</ul>

</body>

@section('content')

        <form action="{{url('/employee')}} " method="post">

<div class="frm-register">
  <center>
  <h2> Register Form</h2> <br>
    </center>


  <div class="form-group">
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Staff ID" name="a">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="First Name" name="b">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Last Name" name="c">
  </div> 
</form>
<div class="form-group">
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Gender" name="d">
  </div>
</form>
<div class="form-group">
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Address" name="e">
  </div>
</form>
<div class="form-group">
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Phone Number" name="f">
  </div>
</form>
<div class="form-group">
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="NIC" name="g">
  </div>
<center>
  <button class="btn btn-primary" type="submit">Submit form</button>

  </center>
</form>











</div>



    <style>
        .frm-register{
            margin-left: 500px;
            margin-top: 80px;
            margin-right: 500px;


        }
    </style>




</div>
</body>
</html>
