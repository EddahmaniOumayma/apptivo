<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!----======== CSS ======== -->
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="chart.css" />

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
    <h1 class="title pd">Catégorie</h1>
    <div class="cat_box">
      <div class="list_box">
        <div class="t_add">
          <h2 class="title">Corps</h2>
          <button class="add_btn"><a href="#">Ajouter</a></button>
        </div>
        <table class="table table-hover">
          <tbody>
            <tr>
              <td>test</td>
              <td class="btns">
                <button class="i_mod"><a href="#">M</a></button>
                <button class="i_sup"><a href="#">S</a></button>
              </td>
            </tr>
            <tr>
              <td>test</td>
              <td class="btns">
                <button class="i_mod"><a href="#">M</a></button>
                <button class="i_sup"><a href="#">S</a></button>
              </td>
            </tr>
            <tr>
              <td>test</td>
              <td class="btns">
                <button class="i_mod"><a href="#">M</a></button>
                <button class="i_sup"><a href="#">S</a></button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="list_box">
        <div class="t_add">
          <h2 class="title">Cadre</h2>
          <button class="add_btn"><a href="#">Ajouter</a></button>
        </div>
        <table class="table table-hover">
          <tbody>
            <tr>
              <td>test</td>
              <td>test</td>
              <td class="btns">
                <button class="i_mod"><a href="#">M</a></button>
                <button class="i_sup"><a href="#">S</a></button>
              </td>
            </tr>
            <tr>
              <td>test</td>
              <td>test</td>
              <td class="btns">
                <button class="i_mod"><a href="#">M</a></button>
                <button class="i_sup"><a href="#">S</a></button>
              </td>
            </tr>
            <tr>
              <td>test</td>
              <td>test</td>
              <td class="btns">
                <button class="i_mod"><a href="#">M</a></button>
                <button class="i_sup"><a href="#">S</a></button>
              </td>
            </tr>
            
          </tbody>
        </table>
      </div>
      <div class="list_box">
        <div class="t_add">
          <h2 class="title">Grade</h2>
          <button class="add_btn"><a href="#">Ajouter</a></button>
        </div>
        <table class="table table-hover">
          <tbody>
            <tr>
              <td>test</td>
              <td>test</td>
              <td>test</td>
              <td class="btns">
                <button class="i_mod"><a href="#">M</a></button>
                <button class="i_sup"><a href="#">S</a></button>
              </td>
            </tr>
            <tr>
              <td>test</td>
              <td>test</td>
              <td>test</td>
              <td class="btns">
                <button class="i_mod"><a href="#">M</a></button>
                <button class="i_sup"><a href="#">S</a></button>
              </td>
            </tr>
            <tr>
              <td>test</td>
              <td>test</td>
              <td>test</td>
              <td class="btns">
                <button class="i_mod"><a href="#">M</a></button>
                <button class="i_sup"><a href="#">S</a></button>
              </td>
            </tr>
          
            
          </tbody>
        </table>
      </div>
      <div class="list_box">
        <div class="t_add">
          <h2 class="title">Indice</h2>
          <button class="add_btn"><a href="#">Ajouter</a></button>
        </div>
        <table class="table table-hover">
          <tbody>
            <tr>
              <td>test</td>
              <td>test</td>
              <td class="btns">
                <button class="i_mod"><a href="#">M</a></button>
                <button class="i_sup"><a href="#">S</a></button>
              </td>
            </tr>
         
            
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <script src="script.js"></script>
</body>

</html>