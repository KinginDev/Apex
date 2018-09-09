<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{asset('img/logo/57x57.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Apex Triangle - Admin Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('admin/css/now-ui-dashboard.css?v=1.1.0')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('admin/demo/demo.css')}}" rel="stylesheet" />
  <link href="{{asset('/admin/css/bootstrap-tagsinput.css')}}" rel="stylesheet" />
  {{-- <link rel="stylesheet" href="{{asset('/admin/css/now-ui-kit.css')}}" type="text/css"> --}}
   <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

 @yield('styles')
</head>
<body>
	<div class="wrapper ">
		<!--Include Sidebar-->
		@include('Admin.partials.sidebar')
		<div class="main-panel">
	      <!-- Navbar -->
	      <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
	        <div class="container-fluid">
	          <div class="navbar-wrapper">
	            <div class="navbar-toggle">
	              <button type="button" class="navbar-toggler">
	                <span class="navbar-toggler-bar bar1"></span>
	                <span class="navbar-toggler-bar bar2"></span>
	                <span class="navbar-toggler-bar bar3"></span>
	              </button>
	            </div>
	            <a class="navbar-brand" href="#pablo">Dashboard</a>
	          </div>
	          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
	            <span class="navbar-toggler-bar navbar-kebab"></span>
	            <span class="navbar-toggler-bar navbar-kebab"></span>
	            <span class="navbar-toggler-bar navbar-kebab"></span>
	          </button>
	          <div class="collapse navbar-collapse justify-content-end" id="navigation">
	            <form>
	              <div class="input-group no-border">
	                <input type="text" value="" class="form-control" placeholder="Search...">
	                <div class="input-group-append">
	                  <div class="input-group-text">
	                    <i class="now-ui-icons ui-1_zoom-bold"></i>
	                  </div>
	                </div>
	              </div>
	            </form>
	            <ul class="navbar-nav">
	              <li class="nav-item dropdown">
	                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                  <i class="now-ui-icons media-1_album"></i>
	                  <p>
	                    <span class="d-lg-none d-md-block">Projects</span>
	                  </p>
	                </a>
	                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
	                  <a class="dropdown-item" href="{{route('project.index')}}">Project</a>
	                  <a class="dropdown-item" href="{{route('project.create')}}">Create NewProject</a>
	                </div>
	              </li>
	              <li class="nav-item dropdown">
	                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                  <i class="now-ui-icons education_paper"></i>
	                  <p>
	                    <span class="d-lg-none d-md-block">Blogs</span>
	                  </p>
	                </a>
	                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
	                  <a class="dropdown-item" href="{{route('blog.index')}}">Blog</a>
	                  <a class="dropdown-item" href="{{route('blog.create')}}">Create New Blog Post</a>
	                </div>
	              </li>
	              <li class="nav-item">
	                <a class="nav-link" href="#pablo">
	                  <i class="now-ui-icons users_single-02"></i>
	                  <p>
	                    <span class="d-lg-none d-md-block">Administration</span>
	                  </p>
	                </a>
	              </li>
	            </ul>
	          </div>
	        </div>
	      </nav>
	      <div class="panel-header panel-header-sm">

	      	
     	  </div>
     	  @yield('content')
	  </div>

	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript">	</script>
	 <script src="{{asset('/admin/js/bootstrap-tagsinput.min.js')}}" type="text/javascript"></script>
	 <script src="{{asset('/admin/js/my.js')}}" type="text/javascript"></script>
	  <script src="{{asset('/admin/js/now-ui-dashboard.js')}}" type="text/javascript"></script>
	  <script src="{{asset('/admin/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
	  
</body>
</html>