<div style="height: 10px; background-color: #064420 !important; margin-top: 0px !important;"></div>

<div class="min-height-300 position-absolute w-100 " style="background-color: #064420 !important; margin-top: 0px !important;"></div>

<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <?=$this->load->view('layouts/nav.php',null,TRUE);?>
    <!-- End Navbar -->

    <!-- Content  -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h1 style="text-align: center; color: rgba(0, 0, 0, 0.800);">About Us</h1>
              <hr style="border: 1px solid #064420; width: 70%; margin: 30px auto 0px auto;">
            </div>
            <div class="pb-0">
                <div style="width: 100%; display: flex; justify-content: center; margin-bottom: 10px;">
                    <p style="color: rgba(0, 0, 0, 0.800); font-size: 1.6em; text-align: justify; width: 90%;">
                        The idea of Cuino is a constant leap in time, both the concept and the design of the place, 
                        it was developed and executed by the couple Uriel Loaiza and Montserrat Pichardo, who 
                        with a clean and sophisticated design, managed to create an atmosphere that 
                        escapes from San Jose Iturbide. Ornamentation, reflections and geometry 
                        play an important role in the construction of a timeless environment, which refers us 
                        to the aesthetics of art, and in turn, has design touches that place us in the current 
                        context, and intensify the contrast. of nature and the city. The clean and natural 
                        design that characterizes this project can be seen in its kitchen, a mixture of a brasserie 
                        and a steakhouse, with simple dishes but with the impeccable technique of Chilango chef
                        Daniel Olvera. The drinks bar was recovered from an old restaurant, which today offers an 
                        exquisite selection of juices and classic cocktails.
                    </p>
                </div>
                <figure style="width: 100%; display: flex; justify-content: center;">
                    <img src="<?=base_url('assets/img/illustrations/restaurante.jpg');?>" alt="" style="width: 90%; border-radius: 10px;">
                </figure>

                <h2 style="margin-top: 30px; text-align: center; color: rgba(0, 0, 0, 0.800);">Contact</h2>
                <hr style="border: 1px solid #064420; width: 70%; margin: 30px auto 0px auto;">
                 
                <div style="width: 80%; margin: 30px auto 30px; display: flex; flex-direction: row; justify-content: center; align-items: center;">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-md-4" style="color: #064420">
                                <div class="card">
                                    <div class="mx-4 p-3 text-center">
                                        <div class="text-center">
                                            <ion-icon name="logo-facebook" style="font-size: 4em;"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 p-3 text-center">
                                        <h3 class="text-center mb-0" style="color: rgba(0, 0, 0, 0.800); font-size: 1.2em;">Facebook</h3>
                                        <hr class="horizontal dark my-3">
                                        <a href="https://www.facebook.com/CuinoRestaurant" target="_blank">
                                            <button style="margin: 0px auto; border: 1px solid #064420; border-radius: 10px; background-color: #06442087; width: 30%; display: flex; flex-direction: row; justify-content: center; align-items: center;">
                                                Ir<ion-icon name="chevron-forward-sharp" style="margin-left: 8px;"></ion-icon>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4" style="color: #064420">
                                <div class="card">
                                    <div class="mx-4 p-3 text-center">
                                        <div class="text-center">
                                            <ion-icon name="logo-instagram" style="font-size: 4em;"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 p-3 text-center">
                                        <h3 class="text-center mb-0" style="color: rgba(0, 0, 0, 0.800); font-size: 1.2em;">Instagram</h3>
                                        <hr class="horizontal dark my-3">
                                        <a href="https://www.instagram.com/cuino_restaurant/" target="_blank">
                                            <button style="margin: 0px auto; border: 1px solid #064420; border-radius: 10px; background-color: #06442087; width: 30%; display: flex; flex-direction: row; justify-content: center; align-items: center;">
                                                Ir<ion-icon name="chevron-forward-sharp" style="margin-left: 8px;"></ion-icon>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-md-0 mt-4" style="color: #064420">
                                <div class="card">
                                    <div class="mx-4 p-3 text-center">
                                        <div class="text-center">
                                            <ion-icon name="logo-google" style="font-size: 4em;"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 p-3 text-center">
                                        <h3 class="text-center mb-0" style="color: rgba(0, 0, 0, 0.800); font-size: 1.2em;">Gmail</h3>
                                        <hr class="horizontal dark my-3">
                                        <a href="mailto:cuinoRAUE@gmail.com">
                                            <button style="margin: 0px auto; border: 1px solid #064420; border-radius: 10px; background-color: #06442087; width: 30%; display: flex; flex-direction: row; justify-content: center; align-items: center;">
                                                Ir<ion-icon name="chevron-forward-sharp" style="margin-left: 8px;"></ion-icon>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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