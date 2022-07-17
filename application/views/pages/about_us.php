<div style="height: 10px; background-color: #064420 !important; margin-top: 0px !important;"></div>

<div class="min-height-300 position-absolute w-100 " style="background-color: #064420 !important; margin-top: 0px !important;"></div>

<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <?=$this->load->view('layouts/nav.php',null,TRUE);?>
    <!-- End Navbar -->

    <script>
        let home = document.getElementById('NAV-HOME');
        home.classList.remove('opacity-5');
    </script>

    <!-- Content  -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">     
            <div class="main-1024">
                <video autoplay alt="" class="video-size" loop id="video-home">
                    <source src="<?=base_url('assets/img/illustrations/Cuino.mp4');?>">
                </video>
            </div>
            <div class="pb-0">

                <div class="content-home content-home-600">
                    <figure class="img-content-home img-content-home-600">
                        <img src="<?=base_url('assets/img/illustrations/susten.jpg');?>" alt="" style="width: 90%; border-radius: 10px;">
                    </figure>
                    <div class="text-content-home text-content-home-600">
                        <p class="text-home-600 text-home">
                            Our core value is sustainability. With our restaurants we help the environment and encourage our customers to follow our steps to help our planet. Our branches will always be connected with nature and with our customers.
                        </p>
                    </div>
                </div>

                <div class="content-home content-home-600" id="info-1024">
                    <div class="text-content-home text-content-home-600">
                        <p class="text-home-600 text-home">
                            We have a variety of dishes, as is a common menu, but what makes us different are our original dishes, cooked by our excellent chefs. You will be surprised how delicious it can be to eat something new.
                        </p>
                    </div>
                    <figure class="img-content-home img-content-home-600">
                        <img src="<?=base_url('assets/img/illustrations/chefs.jpg');?>" alt="" style="width: 90%; border-radius: 10px;">
                    </figure>
                </div>

                <div class="content-home content-home-600" id="info-600">
                    <figure class="img-content-home img-content-home-600">
                        <img src="<?=base_url('assets/img/illustrations/chefs.jpg');?>" alt="" style="width: 90%; border-radius: 10px;">
                    </figure>
                    <div class="text-content-home text-content-home-600">
                        <p class="text-home-600 text-home">
                            We have a variety of dishes, as is a common menu, but what makes us different are our original dishes, cooked by our excellent chefs. You will be surprised how delicious it can be to eat something new.
                        </p>
                    </div>
                </div>

                <div class="content-home content-home-600">
                    <figure class="img-content-home img-content-home-600">
                        <img src="<?=base_url('assets/img/illustrations/paz.png');?>" alt="" style="width: 90%; border-radius: 10px;">
                    </figure>
                    <div class="text-content-home text-content-home-600">
                        <p class="text-home-600 text-home">
                            We want our customers to connect with nature to raise awareness and continue helping our planet and also to connect with themselves so that they enjoy eating and that Cuino restaurants become one of their favorite places.                        
                        </p>
                    </div>
                </div>

                <h2 style="margin-top: 80px; text-align: center; color: rgba(0, 0, 0, 0.800);">About Us</h2>
                <hr style="border: 1px solid #064420; width: 70%; margin: 22px auto 22px auto;">
                <div style="width: 100%; display: flex; justify-content: center; margin-bottom: 22px;">
                    <p class="text-aboutUs-600 text-aboutUs">
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

                <h2 style="margin-top: 70px; text-align: center; color: rgba(0, 0, 0, 0.800);">Contact</h2>
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