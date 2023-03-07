<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!----======== CSS ======== -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}" />
  <link rel="stylesheet"  href="{{asset('css/chart.css')}}"   />

  <!----===== Boxicons CSS ===== -->
  <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <title>Dashboard</title>
</head>

<body>
  <nav class="sidebar close">
    <header>
      <div class="image">
        <img src="img/logo.png" />
      </div>
      <div>
        <a href="#" style="color: #002257">
          <i class="material-symbols-outlined"> account_circle </i>
          <span class="text nav-text">Admin</span>
        </a>
        <i class="bx bx-chevron-right toggle"></i>
      </div>
    </header>

    <div class="menu-bar">
      <div class="menu">
        <li class="search-box">
          <i class="bx bx-search icon"></i>
          <input type="text" placeholder="Search..." />
        </li>

        <ul class="menu-links">
          <li class="nav-link">
            <a href="#">
              <i class="material-symbols-outlined"> home</i>
              <span class="text nav-text">Dashboard</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="#">
              <i class="material-symbols-outlined"> free_cancellation</i>
              <span class="text nav-text">Revenue</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="#">
              <i class="material-symbols-outlined"> checklist</i>
              <span class="text nav-text">Notifications</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="#">
              <i class="material-symbols-outlined">
                notifications
              </i>
              <span class="text nav-text">Notifications</span>
            </a>
          </li>
        </ul>
      </div>

      <div class="bottom-content">
        <li class="">
          <a href="#">
            <i style="color: #ff003b" class="material-symbols-outlined">
              logout</i>
            <span class="text nav-text">Logout</span>
          </a>
        </li>

        <li class="mode">
          <div class="sun-moon">
            <i class="bx bx-moon icon moon"></i>
            <i class="bx bx-sun icon sun"></i>
          </div>
          <span class="mode-text text">Dark mode</span>

          <div class="toggle-switch">
            <span class="switch"></span>
          </div>
        </li>
      </div>
    </div>
  </nav>

  <section class="home">
   <center> <h2 class="title pp">Espace Admin</h2></center>
    <div class="statis">
      <div class="analytic a1">
        
      </div>
      <div class="analytic add a2">
        <div class="float">
          <div class="admin_pro">
            <img src="img/wallpaperflare.com_wallpaper (8).jpg" alt="">
            <h4 class="title">nom & prenom </h4>
          </div>

          <div class="btn">
            <button>
              <a href="{{route('fonctionnaires.create')}}">Ajouter <i class="material-symbols-outlined"> 
                person_add </i></a>
            </button>
          </div>
        </div>


      </div>
    </div>
    <h2 class="title">List des Fanctionnaires</h2>
    <div class="fonc_box">
      <div class="list">
        <ul>
          
         @foreach ($data as $fonctionnaire)
          <li>
            <div class="in">
            <img src="img/wallpaperflare.com_wallpaper (8).jpg" />
              <h4 class="title"> {{$fonctionnaire->nom}} {{$fonctionnaire->prenom}}</h4>
            </div>
            <h4 class="title pd"> {{$fonctionnaire->libelle}} </h4>
            <a href=" {{route('fonctionnaires.show',$fonctionnaire->id)}} ">Info</a>
          </li>
          <hr />
          @endforeach

        </ul>
      </div>
      <div class="graph">
        <div class="ch">
          <h3 class="title">Graph</h3>
<h4 class="title">date 01/03/2023</h4>
          <div class="chart">
            <div class="part percent-75">
              <div class="label">AD</div>
              <div class="bar red">
                <div class="label">75%</div>
              </div>
            </div>
            <div class="part percent-25">
              <div class="label">IN</div>
              <div class="bar blue">
                <div class="label">25%</div>
              </div>
            </div>
            <div class="part percent-38">
              <div class="label">TS</div>
              <div class="bar green">
                <div class="label">38% </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="{{asset('js/script.js')}}"></script>
</body>

</html>