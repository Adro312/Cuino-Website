<div style="height: 10px; background-color: #064420 !important; margin-top: 0px !important;"></div>
<div class="min-height-300 position-absolute w-100 " style="background-color: #064420 !important;"></div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<main class="main-content position-relative border-radius-lg ">
  <!-- Navbar -->
  <?=$this->load->view('layouts/nav.php',null,TRUE);?>
  <!-- End Navbar -->

  <script>
      let review = document.getElementById('NAV-REVIEWS');
      review.classList.remove('opacity-5');
  </script>

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
            <div class="num-reviews">
              <h1 style="text-align: center; color: rgba(0, 0, 0, 0.800);"><?=number_format($data['average'], 2)?></h1>
              <div class="corazones">
                <div id="rateYoAll"
                  data-rateyo-read-only="true"
                  data-rateyo-rating="<?php if(isset($data['average'])) { echo($data['average']);}?>"></div>
                </div>
                <script>
                    $(function () {
                        $("#rateYoAll").rateYo({});
                        $rateYo.rateYo("destroy");
                    });
                </script>
              </div>
              <h6 class="num-reviews-total"><?=$data['total']?> reviews</h6>
            </div>

            <figure style="width: 100%; display: flex; justify-content: center;">
              <div class="canva-reviews canva-reviews-600">
                <canvas id="myChart"></canvas>
              </div>
            </figure>
            <br>
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
                <?php if($review['user_id']==$this->session->id){?>
                  <form role="form" action="<?=site_url('Pages/Reviews/deleteReview');?>" method="post">
                    <input name="id_user" type="hidden" value="<?=$review['user_id']?>">
                    <a><button type="submit" class="btn btn-lg btn-cuino-primary btn-lg text-btn-type w-100 mt-4 mb-0">Delete</button></a>
                  </form>
                <?php }?>
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
                  data-rateyo-full-star="true">
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

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ['⭐⭐⭐⭐⭐', '⭐⭐⭐⭐', '⭐⭐⭐', '⭐⭐', '⭐'],
          datasets: [{
              label: 'Reviews',
              data: [<?=$data['5Star']?>, <?=$data['4Star']?>, <?=$data['3Star']?>, <?=$data['2Star']?>, <?=$data['1Star']?>],
              backgroundColor: [
                  '#68E64C',
                  '#A5F04F',
                  '#F0E54F',
                  '#EA992A',
                  '#EA3529'
              ]
          }]
      },
      options: {
            indexAxis: 'y',
        }
  });
</script>