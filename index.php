<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Bloomin</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/reset.css">
  <link rel="stylesheet" href="assets/css/fontello.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      
      <ul class="navbar-nav  mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <a class="navbar-brand" href="#">MITALENT</a>
      <!--
      <form class="form-inline my-2 my-lg-0">
        
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="icon-search"></i></button>
      </form>
      -->
      <form>
        <input type="text" name="search" placeholder=".." >
        
      </form>
    </div>
  </nav>
</header>
<main>
  <section class="title">
    <div class="container-fluid">
      <div class="box-right">
      </div>
    </div>
    <div class="main-box">
      <div class="text">
        <h2>Georgina Alson</h2>
        <p>YOUNG MODEL, 20200</p>
      </div>
      <div class="box-center">        
      </div>
      <div class="view-profile">
        <a href="#">
          <div class="left-box">          
          </div>
          <div class="rigth-box">          
          </div>
        </a>
      </div>
    </div>      
  </section>
  <section class="guides mt-5">
    <div class="container-fluid">
      <div class="container">
        <div class="row mt-3">
          <div class="col">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a href="#tab1" class="nav-link active" data-toggle="tab">ACTOR</a>
              </li>
              <li class="nav-item">
                <a href="#tab2" class="nav-link" data-toggle="tab">MUSICIAN</a>
              </li>
              <li class="nav-item">
                <a href="#tab3" class="nav-link" data-toggle="tab">COMEDIAN</a>
              </li>
              <li class="nav-item">
                <a href="#tab4" class="nav-link" data-toggle="tab">MODEL</a>
              </li>
            </ul>

            <div class="tab-content">

              <div class="tab-pane active" id="tab1" role="tabpanel">

                <div class="text2">
                  <img src="http://placehold.it/200x350" />
                  <div class="texto">
                    <i class="icon-up-small"></i>
                    <div class="texto-interno">
                      <h3>Keith Ruiz</h3>
                      <p>Comedian</p>
                    </div>
                    
                  </div>
                </div>               
                
              </div>
              <div class="tab-pane" id="tab2" role="tabpanel">
                ator
              </div>
              <div class="tab-pane" id="tab3" role="tabpanel">
                <h3 class="mt-3">COMEDIAN</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
              <div class="tab-pane" id="tab4" role="tabpanel">
                <h3 class="mt-3">MODEL</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>