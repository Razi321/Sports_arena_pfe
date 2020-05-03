<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sports Arena</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <!-- <link href="css/app.css" rel="stylesheet"> -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    @if (Auth::User()->role != 'User' )
  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">T-Cody </div>
      <div class="list-group list-group-flush">
        <a href="/dashboardAdmin" class="list-group-item list-group-item-action bg-light">accueil</a>
        <a href="/users" class="list-group-item list-group-item-action bg-light">Utilisateurs</a>
        <a href="/gyms" class="list-group-item list-group-item-action bg-light">salles de sport</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">item</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">item</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">item</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
      <a href="/home"><button class="btn btn-warning" id="menu-toggle">Retour page d'acceuil</button></a>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <button class="btn btn-warning" id="menu-toggle">{{ Auth::user()->name }}</button>
            </button>
          </ul>
        </div>
      </nav>

      <div class="container">
        @include('inc.messages')

    @yield('content')
</div>

  </div>

  @endif
</body>

</html>

