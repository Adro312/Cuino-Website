<div style="height: 10px; background-color: #064420 !important; margin-top: 0px !important;"></div>

<div class="min-height-300 position-absolute w-100 " style="background-color: #064420 !important;"></div>

<main class="main-content position-relative border-radius-lg ">
  <!-- Navbar -->
  <?=$this->load->view('layouts/nav.php',null,TRUE);?>
  <!-- End Navbar -->

  <script>
      let menu = document.getElementById('NAV-MENU');
      menu.classList.remove('opacity-5');
  </script>

  <!-- Content  -->
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h1 style="text-align: center; color: rgba(0, 0, 0, 0.800);">Menu</h1>
            <hr style="border: 1px solid #064420; width: 70%; margin: 30px auto 0px auto;">
          </div>
          <section class="row">
            <div class="card-header pb-0 col ms-3">
              <scroll-container>
                <div class="main-course">
                  <h2 style="color: #000;">Entries</h2>
                  <div class="card mb-3 plato" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4 my-auto">
                        <img src="<?= base_url('assets/img/comida/entry1.jpg'); ?>" class="img-fluid rounded" />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title" style="color: #000;">Tomato Soup</h5>
                          <p class="card-text" style="color: #000;">
                            Ingredients: Tomato, cilantro.
                          </p>
                          <div class="row">
                            <p class="card-text col fs-5" style="color: #000;">
                              $7.00
                            </p>
                            <button class="btn btn-primary col mx-4 text-btn-type" onclick="addToTicket('Tomato Soup', 7.00)">Add</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-3 plato" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4 my-auto">
                        <img src="<?= base_url('assets/img/comida/entry2.jpg'); ?>" class="img-fluid rounded" />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title" style="color: #000;">Thai Fish Cakes</h5>
                          <p class="card-text" style="color: #000;">
                            Ingredients: Fish, onion, eggs.
                          </p>
                          <div class="row">
                            <p class="card-text col fs-5" style="color: #000;">
                              $8.50
                            </p>
                            <button class="btn btn-primary col mx-4 text-btn-type" onclick="addToTicket('Thai Fish Cakes', 8.50)">Add</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-3 plato" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4 my-auto">
                        <img src="<?= base_url('assets/img/comida/entry3.jpg'); ?>" class="img-fluid rounded" />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title" style="color: #000;">Garlic Bread</h5>
                          <p class="card-text" style="color: #000;">
                            Ingredients: Garlic, bread, cilantro, vegetable oil.
                          </p>
                          <div class="row">
                            <p class="card-text col fs-5" style="color: #000;">
                              $5.50
                            </p>
                            <button class="btn btn-primary col mx-4 text-btn-type" onclick="addToTicket('Garlic Bread', 5.50)">Add</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="main-course">
                  <h2 class="" style="color: #000;">Main Course</h2>
                  <div class="card mb-3 plato" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4 my-auto">
                        <img src="<?= base_url('assets/img/comida/plato1.jpg'); ?>" class="img-fluid rounded" />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title" style="color: #000;">Le Poulet</h5>
                          <p class="card-text" style="color: #000;">
                            Ingredients: Chicken, broccoli, lettuce, carrot, rice, cauliflower and tomato.
                          </p>
                          <div class="row">
                            <p class="card-text col fs-5" style="color: #000;">
                              $14.00
                            </p>
                            <button class="btn btn-primary col mx-4 text-btn-type" onclick="addToTicket('Le Poulet', 14.00)">Add</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-3 plato" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4 my-auto">
                        <img src="<?= base_url('assets/img/comida/plato2.jpg'); ?>" class="img-fluid rounded" />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title" style="color: #000;">Salad</h5>
                          <p class="card-text" style="color: #000;">
                            Ingredients: Tomato, lettuce, onion, dressing.
                          </p>
                          <div class="row">
                            <p class="card-text col fs-5" style="color: #000;">
                              $9.00
                            </p>
                            <button class="btn btn-primary col mx-4 text-btn-type" onclick="addToTicket('Salad', 9.00)">Add</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-3 plato" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4 my-auto">
                        <img src="<?= base_url('assets/img/comida/plato3.jpg'); ?>" class="img-fluid rounded" />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title" style="color: #000;">Tuna Salad</h5>
                          <p class="card-text" style="color: #000;">
                            Ingredients: Tuna, tomato, lettuce, onion, dressing.
                          </p>
                          <div class="row" >
                            <p class="card-text col fs-5" style="color: #000;">
                              $12.00
                            </p>
                            <button class="btn btn-primary col mx-4 text-btn-type" onclick="addToTicket('Tuna Salad', 12.00)">Add</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="main-course">
                  <h2 class="" style="color: #000;">Desserts</h2>
                  <div class="card mb-3 plato" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4 my-auto">
                        <img src="<?= base_url('assets/img/comida/postre1.jpg'); ?>" class="img-fluid rounded" />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title" style="color: #000;">Fruits</h5>
                          <p class="card-text" style="color: #000;">
                            Ingredients: Orange, strawberry, banana, kiwi, whipped cream.
                          </p>
                          <div class="row">
                            <p class="card-text col fs-5" style="color: #000;">
                              $5.00
                            </p>
                            <button class="btn btn-primary col mx-4 text-btn-type" onclick="addToTicket('Fruits', 5.00)">Add</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-3 plato" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4 my-auto">
                        <img src="<?= base_url('assets/img/comida/postre3.jpeg'); ?>" class="img-fluid rounded" />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title" style="color: #000;">Rice Pudding</h5>
                          <p class="card-text" style="color: #000;">
                            Ingredients: Rice, milk, cinnamon.
                          </p>
                          <div class="row">
                            <p class="card-text col fs-5" style="color: #000;">
                              $4.00
                            </p>
                            <button class="btn btn-primary col mx-4 text-btn-type" onclick="addToTicket('Rice Pudding', 4.00)">Add</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-3 plato" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4 my-auto">
                        <img src="<?= base_url('assets/img/comida/postre2.webp'); ?>" class="img-fluid rounded" />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title" style="color: #000;">Red Berries</h5>
                          <p class="card-text" style="color: #000;">
                            Ingredients: Blueberry, raspberry, strawberry, blackberry, chantilly.
                          </p>
                          <div class="row">
                            <p class="card-text col fs-5" style="color: #000;">
                              $4.50
                            </p>
                            <button class="btn btn-primary col mx-4 text-btn-type" onclick="addToTicket('Red Berries', 4.50)">Add</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="main-course">
                  <h2 class="" style="color: #000;">Drinks</h2>
                  <div class="card mb-3 plato" style="max-width: 450px;">
                    <div class="row g-0">
                      <div class="col-md-4 my-auto">
                        <img src="<?= base_url('assets/img/comida/drink1.jpg'); ?>" class="img-fluid rounded" />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title" style="color: #000;">Strawberry Juice</h5>
                          <p class="card-text" style="color: #000;">
                            Ingredients: <br> Strawberry, ice, water.
                          </p>
                          <div class="row">
                            <p class="card-text col fs-5" style="color: #000;">
                              $7.00
                            </p>
                            <button class="btn btn-primary col mx-4 text-btn-type" onclick="addToTicket('Strawberry Juice', 7.00)">Add</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-3 plato" style="max-width: 450px;">
                    <div class="row g-0">
                      <div class="col-md-4 my-auto">
                        <img src="<?= base_url('assets/img/comida/drink2.jpg'); ?>" class="img-fluid rounded" />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title" style="color: #000;">Pineapple Juice</h5>
                          <p class="card-text" style="color: #000;">
                            Ingredients: <br> Pineapple, ice, water.
                          </p>
                          <div class="row">
                            <p class="card-text col fs-5" style="color: #000;">
                              $7.00
                            </p>
                            <button class="btn btn-primary col mx-4 text-btn-type" onclick="addToTicket('Pineapple Juice', 7.00)">Add</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-3 plato" style="max-width: 450px;">
                    <div class="row g-0">
                      <div class="col-md-4 my-auto">
                        <img src="<?= base_url('assets/img/comida/drink3.jpg'); ?>" class="img-fluid rounded" />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title" style="color: #000;">Berries Juice</h5>
                          <p class="card-text" style="color: #000;">
                            Ingredients: <br> Red berries, ice, water, plums.
                          </p>
                          <div class="row">
                            <p class="card-text col fs-5" style="color: #000;">
                              $7.00
                            </p>
                            <button class="btn btn-primary col mx-4 text-btn-type" onclick="addToTicket('Berries Juice', 7.00)">Add</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </scroll-container>
            </div>

            <div class="col carrito me-3">
              <div class="card-header pb-0">
                <h2 style="text-align: center; color: #000;">Ticket</h2>
              </div>
              <scroll-container class="scroll-ticket" id="listaCompras">
                <p style="font-size: 2.6em;">
                  Click on the "ADD" button of the dish you would like to order so you can add it to the shopping cart.
                </p>
              </scroll-container>

              <div class="card-header pb-0 m-4">
                <h3 style="text-align: center; color: #000">Total: $<span id="precioTotal"></span></h3>
              </div>
            </div>

          </section>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <?= $this->load->view('layouts/footer.php', null, TRUE); ?>
    <!-- End Footer -->
  </div>
  <!-- End Content  -->
</main>