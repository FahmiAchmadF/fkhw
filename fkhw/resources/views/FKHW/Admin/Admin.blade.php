<!DOCTYPE html>
<html>
<head>
	<title>Admin FKHW</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/AdminLTE.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-3.3.5-dist\css\bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/ionicons.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/_all-skins.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('font-awesome-4.4.0/css/font-awesome.min.css') }}">
</head>
<body class="skin-green sidebar-mini">

<div id="wrapper">

        <header class="main-header">
        
        <a href="{{ url('Admin/dashboard/index') }}" class="logo suntikfixed">
          
          <span class="logo-mini"><p class="p">FKHW</p></span>
          
          <span class="logo-lg"><b>Admin</b>FKHW</span>
        </a>
        
        <nav class="navbar navbar-static-top" role="navigation">
          
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
              
              
              
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{ asset('image/keep-calm-im-system-admin-1.png') }}" class="user-image" alt="User Image" />
                  <span class="hidden-xs">{{ $username }}</span>
                </a>
                <ul class="dropdown-menu">
                 
                  <li class="user-header">
                    <img src="{{ asset('image/keep-calm-im-system-admin-1.png') }}" class="img-circle" alt="User Image" />
                    <p>
                      {{ $username }} - Admin FKHW
                      <small>Forum Kreatif Hikmatul Wutsqa</small>
                    </p>
                  </li>
                 
                  
                
                  <li class="user-footer usfoot">
                    <div class="pull-right">
                      <a href="{{ url('auth/logout') }}" class="btn btn-danger btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <aside class="main-sidebar suntikfixed">

        <section class="sidebar">
          
          <div class="user-panel">
            
          </div>
          
          
          {!! Form::open(['url' => 'Admin/search/search/search', 'method' => 'post', 'value' => 'csrf_token()', 'class' => 'sidebar-form']) !!}
            
            <div class="input-group">
              {!! Form::text('cari1', null, ['class' => 'form-control', 'placeholder' => 'Cari Artikel']) !!}
              <span class="input-group-btn">
                <button class="btn btn-flat" type="submit"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <li class="treeview">
              <a href="{{ url('Admin/index') }}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Artikel</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('Admin/artikel') }}"><i class="fa fa-plus"></i> Tambah Artikel</a></li>
                <li><a href="{{ url('Admin/artikel/list') }}"><i class="fa fa-list-ol"></i> Daftar Artikel</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Tags</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('Admin/tags') }}"><i class="fa fa-tags"></i> Tambah Tags</a></li>
                <li><a href="{{ url('Admin/tags/list') }}"><i class="fa fa-list-ol"></i> Daftar Tags</a></li>
              </ul>
            </li>
        </section>
      
      </aside>
      <div class="content-wrapper">

        <section class="content-header">

        </section>

     
        <section class="content">
          @yield('konten')
        </section>

      </div>


	
	
<script type="text/javascript" src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/app.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/demo.js') }}"></script>
@yield('footer')
</body>
</html>