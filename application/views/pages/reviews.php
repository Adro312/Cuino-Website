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
                  <li><a class="opacity-5 text-white text-btn-type item-menu-768 item-menu-1024 item-menu-600" href="<?=site_url('Pages/About_Us');?>">About Us</a></li>
                  <li><a class="opacity-5 text-white text-btn-type item-menu-1024 item-menu-768 item-menu-600" href="<?=site_url('Pages/Enterprise');?>">Developing</a></li>
                  <li><a class="opacity-5 text-white text-btn-type item-menu-1024 item-menu-768 item-menu-600" href="<?=site_url('Pages/Menu');?>">Menu</a></li>
                  <li><a class="text-white text-btn-type item-menu-1024 item-menu-768 item-menu-600" href="<?=site_url('Pages/Reviews');?>">Reviews</a></li>
                  <li><a class="opacity-5 text-white text-btn-type item-menu-1024 item-menu-768 item-menu-600" href="<?=site_url('Pages/Profile');?>">Profile</a></li>
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
            <h2 style="text-align: center; color: rgba(0, 0, 0, 0.800);">Reviews</h2>
            <hr style="border: 1px solid #064420; width: 70%; margin: 30px auto 0px auto;">
          </div>
          <div class="card-header">
            <div style="display: flex; flex-direction: row; align-items: center; justify-content: center;">
              <h1 style="text-align: center; color: rgba(0, 0, 0, 0.800);">4,7</h1>
              <div style="align-self: flex-end; margin-left: 10px;">
                <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                <ion-icon name="heart-half" style="color: #A5F04F;"></ion-icon>
              </div>
              <h6 style="text-align: center; color: rgba(0, 0, 0, 0.500); margin-left: 5px; align-self: flex-end;">1315 reviews</h6>
            </div>

            <figure style="width: 100%; display: flex; justify-content: center;">
              <div style="width: 50%; height: 10%; border-radius: 10px;">
                <canvas id="myChart"></canvas>
              </div>
            </figure>

            <br>

            <div style="width: 100%; justify-self: center; display: flex; margin-left: auto; margin-right: auto; justify-content: center; padding-left: 20px; margin-bottom: 40px;">
              <div class="" style="display: flex; justify-content: center; align-items: center; width: 10%;">
                <img src="<?= base_url('assets/img/illustrations/persona9.jpg'); ?>" class="avatar avatar-xl me-3">
              </div>
              <div class="flex-column justify-content-center" style="width: 30%;">
                <h6 class="" style="width: 100%;">
                  <span class="font-weight-bold">Elizabeth Aguilar Martinez</span>
                </h6>
                <div style="align-self: flex-end;">
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                  <ion-icon name="heart-half" style="color: #A5F04F;"></ion-icon>
                </div>
                <p class="text-xs text-secondary mb-0" style="width: 100%; text-align: justify;">
                  “La amistad verdadera se basaría en el bien, en la virtud. Y en opinión 
                  de este gran filósofo, sólo puede darse entre personas que se desean el 
                  bien por sí mismos, sin ningún tipo de interés; por ello, aunque las 
                  circunstancias varíen, ella permanece. “La amistad perfecta es la de los 
                  buenos y la de aquellos que se asemejan por la virtud. Ellos se desean 
                  mutuamente el bien en el mismo sentido.“
                </p>
              </div>
            </div>

            <div style="width: 100%; justify-self: center; display: flex; margin-left: auto; margin-right: auto; justify-content: center; padding-left: 20px; margin-bottom: 40px;">
              <div class="" style="display: flex; justify-content: center; align-items: center; width: 10%;">
                <img src="<?= base_url('assets/img/illustrations/persona1.png'); ?>" class="avatar avatar-xl me-3">
              </div>
              <div class="flex-column justify-content-center" style="width: 30%;">
                <h6 class="" style="width: 100%;">
                  <span class="font-weight-bold">Bryant Hernandez Hernandez</span>
                </h6>
                <div style="align-self: flex-end;">
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                </div>
                <p class="text-xs text-secondary mb-0" style="width: 100%; text-align: justify;">
                  “ Existe un adjetivo que solemos colocar junto a la palabra amistad: 
                  “Verdadera”.  Parece que necesitamos diferenciar ésta de otros tipos. 
                  Según Aristóteles, estos tipos serían la amistad  por interés y por placer.”
                </p>
              </div>
            </div>

            <div style="width: 100%; justify-self: center; display: flex; margin-left: auto; margin-right: auto; justify-content: center; padding-left: 20px; margin-bottom: 40px;">
              <div class="" style="display: flex; justify-content: center; align-items: center; width: 10%;">
                <img src="<?= base_url('assets/img/illustrations/persona10.jpg'); ?>" class="avatar avatar-xl me-3">
              </div>
              <div class="flex-column justify-content-center" style="width: 30%;">
                <h6 class="" style="width: 100%;">
                  <span class="font-weight-bold">Karla Valeria Guerrero Anguiano</span>
                </h6>
                <div style="align-self: flex-end;">
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                  <ion-icon name="heart-half" style="color: #A5F04F;"></ion-icon>
                </div>
                <p class="text-xs text-secondary mb-0" style="width: 100%; text-align: justify;">
                  “La amistad verdadera se basaría en el bien, en la virtud. Y en opinión 
                  de este gran filósofo, sólo puede darse entre personas que se desean el 
                  bien por sí mismos, sin ningún tipo de interés; por ello, aunque las 
                  circunstancias varíen, ella permanece. “La amistad perfecta es la de los 
                  buenos y la de aquellos que se asemejan por la virtud. Ellos se desean 
                  mutuamente el bien en el mismo sentido.“
                </p>
              </div>
            </div>

            <div style="width: 100%; justify-self: center; display: flex; margin-left: auto; margin-right: auto; justify-content: center; padding-left: 20px; margin-bottom: 40px;">
              <div class="" style="display: flex; justify-content: center; align-items: center; width: 10%;">
                <img src="<?= base_url('assets/img/illustrations/persona2.png'); ?>" class="avatar avatar-xl me-3">
              </div>
              <div class="flex-column justify-content-center" style="width: 30%;">
                <h6 class="" style="width: 100%;">
                  <span class="font-weight-bold">Kevin Dilan Rangel Campos</span>
                </h6>
                <div style="align-self: flex-end;">
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                </div>
                <p class="text-xs text-secondary mb-0" style="width: 100%; text-align: justify;">
                  “ Existe un adjetivo que solemos colocar junto a la palabra amistad: 
                  “Verdadera”.  Parece que necesitamos diferenciar ésta de otros tipos. 
                  Según Aristóteles, estos tipos serían la amistad  por interés y por placer.”
                </p>
              </div>
            </div>

            <div style="width: 100%; justify-self: center; display: flex; margin-left: auto; margin-right: auto; justify-content: center; padding-left: 20px; margin-bottom: 40px;">
              <div class="" style="display: flex; justify-content: center; align-items: center; width: 10%;">
                <img src="<?= base_url('assets/img/illustrations/persona11.jpg'); ?>" class="avatar avatar-xl me-3">
              </div>
              <div class="flex-column justify-content-center" style="width: 30%;">
                <h6 class="" style="width: 100%;">
                  <span class="font-weight-bold">Diana Palacios Rodriguez</span>
                </h6>
                <div style="align-self: flex-end;">
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                  <ion-icon name="heart-half" style="color: #A5F04F;"></ion-icon>
                </div>
                <p class="text-xs text-secondary mb-0" style="width: 100%; text-align: justify;">
                  “La amistad verdadera se basaría en el bien, en la virtud. Y en opinión 
                  de este gran filósofo, sólo puede darse entre personas que se desean el 
                  bien por sí mismos, sin ningún tipo de interés; por ello, aunque las 
                  circunstancias varíen, ella permanece. “La amistad perfecta es la de los 
                  buenos y la de aquellos que se asemejan por la virtud. Ellos se desean 
                  mutuamente el bien en el mismo sentido.“
                </p>
              </div>
            </div>

            <div style="width: 100%; justify-self: center; display: flex; margin-left: auto; margin-right: auto; justify-content: center; padding-left: 20px; margin-bottom: 40px;">
              <div class="" style="display: flex; justify-content: center; align-items: center; width: 10%;">
                <img src="<?= base_url('assets/img/illustrations/persona3.png'); ?>" class="avatar avatar-xl me-3">
              </div>
              <div class="flex-column justify-content-center" style="width: 30%;">
                <h6 class="" style="width: 100%;">
                  <span class="font-weight-bold">Sebastian Vazquez Ramos</span>
                </h6>
                <div style="align-self: flex-end;">
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                </div>
                <p class="text-xs text-secondary mb-0" style="width: 100%; text-align: justify;">
                  “ Existe un adjetivo que solemos colocar junto a la palabra amistad: 
                  “Verdadera”.  Parece que necesitamos diferenciar ésta de otros tipos. 
                  Según Aristóteles, estos tipos serían la amistad  por interés y por placer.”
                </p>
              </div>
            </div>

            <div style="width: 100%; justify-self: center; display: flex; margin-left: auto; margin-right: auto; justify-content: center; padding-left: 20px; margin-bottom: 40px;">
              <div class="" style="display: flex; justify-content: center; align-items: center; width: 10%;">
                <img src="<?= base_url('assets/img/illustrations/persona4.png'); ?>" class="avatar avatar-xl me-3">
              </div>
              <div class="flex-column justify-content-center" style="width: 30%;">
                <h6 class="" style="width: 100%;">
                  <span class="font-weight-bold">Miguel Angel Hernandez Gonzalez</span>
                </h6>
                <div style="align-self: flex-end;">
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                  <ion-icon name="heart-half" style="color: #A5F04F;"></ion-icon>
                </div>
                <p class="text-xs text-secondary mb-0" style="width: 100%; text-align: justify;">
                  “La amistad verdadera se basaría en el bien, en la virtud. Y en opinión 
                  de este gran filósofo, sólo puede darse entre personas que se desean el 
                  bien por sí mismos, sin ningún tipo de interés; por ello, aunque las 
                  circunstancias varíen, ella permanece. “La amistad perfecta es la de los 
                  buenos y la de aquellos que se asemejan por la virtud. Ellos se desean 
                  mutuamente el bien en el mismo sentido.“
                </p>
              </div>
            </div>

            <div style="width: 100%; justify-self: center; display: flex; margin-left: auto; margin-right: auto; justify-content: center; padding-left: 20px; margin-bottom: 40px;">
              <div class="" style="display: flex; justify-content: center; align-items: center; width: 10%;">
                <img src="<?= base_url('assets/img/illustrations/persona12.png'); ?>" class="avatar avatar-xl me-3">
              </div>
              <div class="flex-column justify-content-center" style="width: 30%;">
                <h6 class="" style="width: 100%;">
                  <span class="font-weight-bold">Sergio Samano Cortes</span>
                </h6>
                <div style="align-self: flex-end;">
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                  <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                </div>
                <p class="text-xs text-secondary mb-0" style="width: 100%; text-align: justify;">
                  “ Existe un adjetivo que solemos colocar junto a la palabra amistad: 
                  “Verdadera”.  Parece que necesitamos diferenciar ésta de otros tipos. 
                  Según Aristóteles, estos tipos serían la amistad  por interés y por placer.”
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <?= $this->load->view('layouts/footer.php', null, TRUE); ?>
    <!-- End Footer -->
  </div>
  <!-- End Content  -->
</main>