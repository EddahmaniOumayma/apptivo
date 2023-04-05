<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!----======== CSS ======== -->
  <link rel="stylesheet" href="{{asset('css/style1.css')}}" />
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
        <img src="/img/logo.png" />
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
      
              <a class="dropdown-item"  href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}</a>
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
   <div class="add_box">

     <h2 class="title pp">Ajouter fonctionnaire</h2>
 
    <form class="add" method="POST" action=" {{route("fonctionnaires.store")}} " enctype="multipart/form-data">
      @csrf
      <div class="s1">

        <label for="nom">Nom  :</label>
        <input type="text"  class="input" placeholder=".." name="nom">
        @error('nom')<span class="text-danger">{{ $message }}</span>@enderror

        <label for="nom">Prenom  :</label>
        <input type="text"  class="input" placeholder=".." name="prenom">
        @error('prenom')<span class="text-danger">{{ $message }}</span>@enderror

        <label for="nom">email  :</label>
        <input type="text"  class="input" placeholder=".." name="email">
        @error('email')<span class="text-danger">{{ $message }}</span>@enderror

  

        <label for="nom">date_naissance :</label>
        <input type="date"  class="input" name="date_naissance">
        @error('date_naissance')<span class="text-danger">{{ $message }}</span>@enderror

        <label for="nom">lieu_naissance :</label>
        <input type="text"  class="input"name="lieu_naissance">
        @error('lieu_naissance')<span class="text-danger">{{ $message }}</span>@enderror

        
        <label for="sexe">sexe :</label>
        <div class="input">
            <input type="radio" name="sexe" id="yes" value="1" class="form-check-input" @if(old('sexe') == '1') checked @endif required>
            <label for="yes" class="form-check-label">F</label>
            <input type="radio" name="sexe" id="no" value="0" class="form-check-input" @if(old('sexe') == '0') checked @endif required>
            <label for="no" class="form-check-label">M</label>
        </div>
        @error('sexe')<span class="text-danger">{{ $message }}</span>@enderror

        <div>
          <label for="image">Image:</label>
          <input type="file" name="image" id="image" class="input">
        </div>
        @error('image')<span class="text-danger">{{ $message }}</span>@enderror

        <label for="nom">Tél :</label>
        <input type="number" class="input" placeholder=".." name="tel">
      </div>
        <div class="hr"></div>
        @error('tel')<span class="text-danger">{{ $message }}</span>@enderror

        
        <div class="s2">
        <label for="nom">CIN :</label>
        <input type="text" class="input" placeholder=".." name="cin">
        @error('cin')<span class="text-danger">{{ $message }}</span>@enderror

        <label for="nom">date_ambauche :</label>
        <input type="date"  class="input" name="date_ambauche">
        @error('date_ambauche')<span class="text-danger">{{ $message }}</span>@enderror
      
          <label for="situation_familial">Situation familiale :</label>
          <select class="input" id="situation_familial" name="situation_familial">
              <option value="Célibataire">Célibataire</option>
              <option value="Marié(e)">Marié(e)</option>
              <option value="Divorcé(e)">Divorcé(e)</option>
          </select>
          @error('situation_familial')<span class="text-danger">{{ $message }}</span>@enderror
          


          
        <label for="nom">Nbr_enfants :</label>
        <input type="number" class="input" placeholder=".." name="Nbr_enfants">
        @error('Nbr_enfants')<span class="text-danger">{{ $message }}</span>@enderror

        <label for="nom">password :</label>
        <input type="text" class="input" placeholder=".." name="password">
        @error('password')<span class="text-danger">{{ $message }}</span>@enderror
     
         <label >corp :</label>
          <select class="input " id="cadre" name="corp_id">
            @foreach( $corps as $corp)
            @error('corp_id')<span class="text-danger">{{ $message }}</span>@enderror

            <option value=" {{$corp->id}} "> {{$corp->libelle}} </option>
            @endforeach
         </select>
         <label >cadre :</label>
         <select class="input " id="cadre" name="cadre_id">
           @foreach( $cadres as $cadre)

           <option value=" {{$cadre->id}} "> {{$cadre->libelle_c}} </option>
           @endforeach
        </select>
        @error('cadre_id')<span class="text-danger">{{ $message }}</span>@enderror
        
        <label >grade :</label>
         <select class="input " id="grade" name="grade_id">
           @foreach( $grades as $grade)

           <option value=" {{$grade->id}} "> {{$grade->libelle_g}} </option>
           @endforeach
        </select>

        @error('grade_id')<span class="text-danger">{{ $message }}</span>@enderror
        
        <label >Indice :</label>
         <select class="input " id="grade" name="indice_id">
           @foreach( $indices as $indice)

           <option value=" {{$indice->id}} "> {{$indice->libelle_i}} </option>
           @endforeach
        </select>
        @error('indice_id')<span class="text-danger">{{ $message }}</span>@enderror


  
         <label for="role">Roles :</label>
         <select class="input" id="role" name="role">
          @foreach( $roles as $role)

          <option value=" {{$role->id}} "> {{$role->name}} </option>
          @endforeach
            
         </select>
         @error('role')<span class="text-danger">{{ $message }}</span>@enderror
         <center><button type="submit" class="sub" >Ajouter</button></center>

      </div>
    </form>

  </div>
   
  </section>

 <script src="{{asset('js/script.js')}}"></script>
</body>

</html>