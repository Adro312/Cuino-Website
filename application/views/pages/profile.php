<div class="min-height-300 position-absolute w-100 " style="background-color: #064420 !important;"></div>

<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl mt-4" id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3" style="margin: 0px auto; width: 90%; display: flex; flex-direction: row; align-items: center; justify-content: space-around;">
            <nav aria-label="breadcrumb" class="row nav-less-950 nav-plus-1024">
                <a href="<?=site_url('Pages/About_Us');?>" class="icono-nav-1024 icono-nav-769 icono-nav-600">
                    <img src="<?=base_url('assets/img/logos/LogoLetrasBlancas.png');?>" alt="" class="icono-cuino-grande icono-cuino-grande-600">
                </a>
                <ul class="breadcrumb bg-transparent justify-content-center ul-menu-cuino" id="menu-original">
                    <li><a class="opacity-5 nav-bar text-white text-btn-type item-menu-768 item-menu-1024 item-menu-600" href="<?=site_url('Pages/About_Us');?>">About Us</a></li>
                    <li><a class="opacity-5 nav-bar text-white text-btn-type item-menu-1024 item-menu-768 item-menu-600" href="<?=site_url('Pages/Enterprise');?>">Developing</a></li>
                    <li><a class="opacity-5 nav-bar text-white text-btn-type item-menu-1024 item-menu-768 item-menu-600" href="<?=site_url('Pages/Menu');?>">Menu</a></li>
                    <li><a class="opacity-5 nav-bar text-white text-btn-type item-menu-1024 item-menu-768 item-menu-600" href="<?=site_url('Pages/Reviews');?>">Reviews</a></li>
                    <li><a class="nav-bar text-white text-btn-type item-menu-1024 item-menu-768 item-menu-600" href="<?=site_url('Pages/Profile');?>">Profile</a></li>
                </ul>
                <div class="justify-content-lg-end seccion-boton-logout">
                    <a href="<?=site_url('Login');?>">
                        <button class="boton-salir boton-salir-600">
                            <ion-icon name="log-out-outline" class="icon-boton-log-out-media-Plus-that-1024xp icon-boton-log-out-media-Plus-that-1024xp icon-boton-log-out-media-Plus-that-769px" id="icono-log-out"></ion-icon>
                            <p class="boton-log-out-media-1024xp boton-log-out-media-Plus-that-1024xp boton-log-out-media-769px">Log Out</p>
                        </button>
                    </a>
                </div>
            </nav>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Content  -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h2 style="text-align: center; color: rgba(0, 0, 0, 0.800);">Titulo de la pagina</h2>
              <hr style="border: 1px solid #064420; width: 70%; margin: 30px auto 0px auto;">
            </div>
            <div class="card-header pb-0">
                <!-- 
                    Aqui poner todo el contenido que va a ir en la pagina
                 -->
                 <h1>Profile</h1>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Footer -->
      <?=$this->load->view('layouts/footer.php',null,TRUE);?>
      <!-- End Footer -->
    </div>
    <!-- End Content  -->
</main>