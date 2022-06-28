<div class="min-height-300 position-absolute w-100 " style="background-color: #064420 !important;"></div>

<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl mt-4" id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3" style="margin: 0px auto; width: 90%; display: flex; flex-direction: row; align-items: center; justify-content: space-around;">
            <nav aria-label="breadcrumb" class="row" style="display: flex; flex-direction: row; align-items: center; justify-content: space-evenly;">
                <a href="<?=site_url('Pages/About_Us');?>" style="width: 15%;">
                    <img src="<?=base_url('assets/img/logos/LogoLetrasBlancas.png');?>" alt="" style="width: 100%;">
                </a>
                <ul class="breadcrumb bg-transparent justify-content-center" style="width: 70%; height: auto; align-self: center; margin-top: auto; margin-bottom: auto;">
                    <li><a class="opacity-5 text-white text-btn-type" style="font-size: 1.3em;" href="<?=site_url('Pages/About_Us');?>">About Us</a></li>
                    <li><a class="opacity-5 text-white text-btn-type" style="font-size: 1.3em; margin-left: 1.7em;" href="<?=site_url('Pages/Enterprise');?>">Developing</a></li>
                    <li><a class="opacity-5 text-white text-btn-type" style="font-size: 1.3em; margin-left: 1.7em;" href="<?=site_url('Pages/Menu');?>">Menu</a></li>
                    <li><a class="text-white text-btn-type" style="font-size: 1.3em; margin-left: 1.7em;" href="<?=site_url('Pages/Reviews');?>">Reviews</a></li>
                    <li><a class="opacity-5 text-white text-btn-type" style="font-size: 1.3em; margin-left: 1.7em;" href="<?=site_url('Pages/Profile');?>">Profile</a></li>
                </ul>
                <div style="width: 15%;" class="justify-content-lg-end">
                    <a href="<?=site_url('Login');?>">
                        <button style="float: right; width: 80%; border-radius: 10px; border: none; display: flex; flex-direction: row; align-items: center; justify-content: space-around;">
                            <ion-icon name="log-out-outline" style="font-size: 2em; margin: auto;"></ion-icon>
                            <p style="font-size: 1.5em; margin-top: auto; margin-bottom: auto; margin-right: 0.5em;">Log Out</p>
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
                 <h1>Reviews</h1>
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