<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!----======== CSS ======== -->
  <link rel="stylesheet" href="{{asset('css/style2.css')}}" />
  <link rel="stylesheet" href="{{asset('css/chart.css')}}" />

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
        <img src="./logo.png" />
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
    <h1 class="title pd">Profile</h1>
    <div>
      
    </div>
   <div class="add_box">

     <div class="profile_fon">
      <img src="wallpaperflare.com_wallpaper (8).jpg" alt="">
      <h3 class="title pp">{{$user[0]->nom}}{{$user[0]->prenom}}</h3>
     </div>
 
    <div class="add">
      <div class="s1">

        <label for="nom">Nom & Prénom </label>
        <div class="input">
          <h4 class="title center">{{$user[0]->nom}}{{$user[0] ->prenom}}</h4>
        </div>
        @foreach($user[0]['indices'] as $indice)

    
        <label for="nom">Corp :</label>
        <div class="input">
          <h4 class="title center">{{$indice['grade']->cadre->corp->libelle }}</h4>
        </div>
        <label for="nom">Cadre :</label>
        <div class="input">
          <h4 class="title center">{{$indice['grade']->cadre->libelle_c}}</h4>
        </div>
        <label for="nom">Grade :</label>
        <div class="input">
          <h4 class="title center">{{$indice['grade']->libelle_g }}</h4>
        </div>
        <label for="nom">Indice :</label>
        <div class="input">
          <h4 class="title center">{{$indice->libelle_i}}</h4>
        </div>
        @endforeach
        <label for="nom">Email :</label>
        <div class="input">
          <h4 class="title center">{{$user[0]->email}}</h4>
        </div>
      </div>
        <div class="hr"></div>
        <div class="s2">
          <label for="nom">Date de Naissance :</label>
          <div class="input">
            <h4 class="title center">{{$user[0]->date_naissance}}</h4>
          </div>

        <label for="nom">Tél :</label>
        <div class="input">
          <h4 class="title center">{{$user[0]->tel}}</h4>
        </div>
        <label for="nom">CNI :</label>
        <div class="input">
          <h4 class="title center">{{$user[0]->cin}}</h4>
        </div>


   

        <label for="nom" > date_ambauche :</label>
        <div class="input">
          <h4 class="title center">{{$user[0]->date_ambauche}}</h4>
        </div>

    </div>

      

      </div>
    </div>
<center>

   <form action="{{ route('fonctionnaires.destroy', $user[0]->id) }}" method="POST">
    @csrf
    @method('DELETE')

  

    <button class="sup"  type="submit"><a href="# ">Supprimer</a></button> 
    <button class="mod" ><a href=" {{route('fonctionnaires.edit',$user[0]->id)}} ">Modifier</a></button>

    </form>

   </center>
  </div>
   
  </section>

  <script src="{{asset('js/script.js')}}"></script>
</body>

</html>