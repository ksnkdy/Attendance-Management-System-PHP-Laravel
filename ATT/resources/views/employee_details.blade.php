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

    
<div class="emp_details">
    
 <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Staff ID</th>
      <th scope="col">First Name</th>
      <th scope="col">last Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">NIC</th>

    </tr>
  </thead>
  <tbody>

    @foreach($employees as $employee)
    <tr>
      <th >{{$employee->id}}</th>
      <td>{{$employee->staff_id}}</td>
      <td>{{$employee->first_name}}</td>
      <td>{{$employee->last_name}}</td>
      <td>{{$employee->gender}}</td>
      <td>{{$employee->address}}</td>
      <td>{{$employee->phone_number}}</td>
      <td>{{$employee->nic}}</td>
      
    </tr>

    @endforeach


    

  </tbody>
</table>




<style type="text/css">
    
.emp_details{

    margin-left: 20px;
    margin-right: 20px;
    margin-top: 20px;
}

</style>



</div>
</body>
</html>
