<!DOCTYPE html>
<html>

<head>
	@include ('student.head')
</head>
<body>
	@include ('student.header')
	@include ('student.sidebar')
	
      <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
	
	 
@yield('content')

	
</body>
	@include ('student.js')
</html>
@include('sweetalert::alert')