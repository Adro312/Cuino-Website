<div class="min-height-300 position-absolute w-100 " style="background-color: #064420 !important;"></div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

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
                  <li><a class="nav-bar text-white text-btn-type item-menu-1024 item-menu-768 item-menu-600" href="<?=site_url('Pages/Reviews');?>">Reviews</a></li>
                  <li><a class="opacity-5 nav-bar text-white text-btn-type item-menu-1024 item-menu-768 item-menu-600" href="<?=site_url('Pages/Profile');?>">Profile</a></li>
              </ul>
              <div class="justify-content-lg-end seccion-boton-logout">
                  <form action="<?=site_url('Pages/Profile/logOut');?>">
                      <button type="submit" class="boton-salir boton-salir-600">
                          <ion-icon name="log-out-outline" class="icon-boton-log-out-media-Plus-that-1024xp icon-boton-log-out-media-Plus-that-1024xp icon-boton-log-out-media-Plus-that-769px" id="icono-log-out"></ion-icon>
                          <p class="boton-log-out-media-1024xp boton-log-out-media-Plus-that-1024xp boton-log-out-media-769px">Log Out</p>
                      </button>
                  </form>
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
            <h1 style="text-align: center; color: rgba(0, 0, 0, 0.800);">Reviews</h1>
            <hr style="border: 1px solid #064420; width: 70%; margin: 30px auto 0px auto;">
          </div>
          <div class="card-header">
            <!-- <div class="num-reviews">
              <h1 style="text-align: center; color: rgba(0, 0, 0, 0.800);">4,7</h1>
              <div class="corazones">
                <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                <ion-icon name="heart" style="color: #A5F04F;"></ion-icon>
                <ion-icon name="heart-half" style="color: #A5F04F;"></ion-icon>
              </div>
              <h6 class="num-reviews-total">1315 reviews</h6>
            </div>

            <figure style="width: 100%; display: flex; justify-content: center;">
              <div class="canva-reviews canva-reviews-600">
                <canvas id="myChart"></canvas>
              </div>
            </figure>
            <br> -->
            <?php foreach ($data['list'] as $review) { ?>
            <div class="comentario comentario-600">
              <div class="avatar-coment avatar-coment-600">
                <?php 
                  $random = strval(rand(9, 12));
                  $imgUrl ='assets/img/illustrations/persona'.$random.'.png';
                ?>
                <img src="<?= base_url($imgUrl); ?>" class="avatar avatar-xl me-3">
              </div>
              <div class="flex-column justify-content-center coment-600 coment-1024">
                <h6 class="" style="width: 100%;">
                  <span class="font-weight-bold"><?php if(isset($review['userName'])) { echo($review['userName']); }?></span>
                </h6>
                <div style="align-self: flex-end;">
                <div id="rateYo<?php if(isset($review['id'])) { echo($review['id']);}?>"
                  data-rateyo-half-star="true"
                  data-rateyo-read-only="true"
                  data-rateyo-rating="<?php if(isset($review['score'])) { echo($review['score']);}?>"></div>
                </div>
                <script>
                    $(function () {
                        $("#rateYo<?=$review['id']?>").rateYo({});
                        $rateYo.rateYo("destroy");
                    });
                </script>
                <p class="text-xs text-secondary mb-0" style="width: 100%; text-align: justify;">
                  <?php if(isset($review['comment'])) { echo($review['comment']);}?>
                </p>
              </div>
            </div>
            <?php }?>

            <?php if (isset($this->session->id) AND !$data['exists']){?>
            <div class="card-header pb-0">
              <h3 style="text-align: center; color: rgba(0, 0, 0, 0.800);">Rate us!</h3>
              <hr style="border: 1px solid #064420; width: 70%; margin: 30px auto 0px auto;">
            </div>

            <div class="comentario comentario-600">
              <form role="form" action="<?=site_url('Pages/Reviews/postReview');?>" method="post">
                <div class="mb-3">
                  <input type="text" class="form-control form-control-lg" placeholder="Name" name="form-name" value="<?=$this->session->name?>" readonly>
                </div>

                <div class="form-rateYo" id="form-rating"
                  data-rateyo-num-stars="5"
                  data-rateyo-half-star="true">
                </div>
                <h4 style="color: rgba(0, 0, 0, 0.800);" class='result'> 0</h4>
                <input type="hidden" name="form-rating">
                <script>
                    $(function () {
                        $(".form-rateYo").rateYo().on("rateyo.change", function (e, data) {
                            var rating = data.rating;
                            $(this).parent().find('.score').text('Score :'+ $(this).attr('data-rateyo-score'));
                            $(this).parent().find('.result').text('Rating :'+ rating);
                            $(this).parent().find('input[name=form-rating]').val(rating); //add rating value to input field
                        });
                    });
                </script>

                <div class="mb-3">
                  <textarea class="form-control form-control-lg" placeholder="Comment" name="form-comment" cols="30" rows="4"></textarea>
                </div>
                <div class="text-center">
                  <a><button type="submit" class="btn btn-lg btn-cuino-primary btn-lg text-btn-type w-100 mt-4 mb-0">Rate</button></a>
                  <text style="color:red; text-align:center;" value=""><?=$data['errors']?></text>
                </div>
              </form>
            </div>
            <?php }?>
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