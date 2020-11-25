<!DOCTYPE html>
<html>
<head>
	@include ('admin.head')
</head>
<body>
	 
      @include ('admin.navbar')
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
         <div class="sidebar">
          @include ('admin.sidebar')
         </div>
      </aside>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
  @yield('content')  
  @include ('admin.js')
</body>
	
</html>
