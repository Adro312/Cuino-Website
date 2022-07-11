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
                    <li><a class="nav-bar text-white text-btn-type item-menu-1024 item-menu-768 item-menu-600" href="<?=site_url('Pages/Menu');?>">Menu</a></li>
                    <li><a class="opacity-5 nav-bar text-white text-btn-type item-menu-1024 item-menu-768 item-menu-600" href="<?=site_url('Pages/Reviews');?>">Reviews</a></li>
                    <li><a class="opacity-5 nav-bar text-white text-btn-type item-menu-1024 item-menu-768 item-menu-600" href="<?=site_url('Pages/Profile');?>">Profile</a></li>
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
              <h2 style="text-align: center; color: rgba(0, 0, 0, 0.800);">Le Menu</h2>
              <hr style="border: 1px solid #064420; width: 70%; margin: 30px auto 0px auto;">
            </div>
            <section class="row">
              <div class="card-header pb-0 col ms-3">
                  <!--
                      Aqui poner todo el contenido que va a ir en la pagina
                   -->
                   <div class="main-course">
                    <h1 class="">Entries</h1>
                    <div class="card mb-3 plato" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4 my-auto">
                          <img
                            src="<?=base_url('assets/img/comida/entry1.jpg');?>"
                            class="img-fluid rounded"
                          />
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Tomato Soup</h5>
                            <p class="card-text">
                              Ingredients: Tomato, cilantro.
                            </p>
                            <div class="row">
                              <p class="card-text col fs-5">
                                $7.00
                              </p>
                              <button class="btn btn-primary col mx-4 text-btn-type">Add</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card mb-3 plato" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4 my-auto">
                          <img
                            src="<?=base_url('assets/img/comida/entry2.jpg');?>"
                            class="img-fluid rounded"
                          />
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Thai Fish Cakes</h5>
                            <p class="card-text">
                              Ingredients: Fish, onion, eggs.
                            </p>
                            <div class="row">
                              <p class="card-text col fs-5">
                                $8.50
                              </p>
                              <button class="btn btn-primary col mx-4 text-btn-type">Add</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card mb-3 plato" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4 my-auto">
                          <img
                            src="<?=base_url('assets/img/comida/entry3.jpg');?>"
                            class="img-fluid rounded"
                          />
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Garlic Bread</h5>
                            <p class="card-text">
                              Ingredients: Garlic, bread, cilantro, vegetable oil.
                            </p>
                            <div class="row">
                              <p class="card-text col fs-5">
                                $5.50
                              </p>
                              <button class="btn btn-primary col mx-4 text-btn-type">Add</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="main-course">
                    <h1 class="">Main Course</h1>
                    <div class="card mb-3 plato" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4 my-auto">
                          <img
                            src="<?=base_url('assets/img/comida/plato1.jpg');?>"
                            class="img-fluid rounded"
                          />
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Le Poulet</h5>
                            <p class="card-text">
                              Ingredients: Chicken, broccoli, lettuce, carrot, rice, cauliflower and tomato.
                            </p>
                            <div class="row">
                              <p class="card-text col fs-5">
                                $14.00
                              </p>
                              <button class="btn btn-primary col mx-4 text-btn-type">Add</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card mb-3 plato" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4 my-auto">
                          <img
                            src="<?=base_url('assets/img/comida/plato2.jpg');?>"
                            class="img-fluid rounded"
                          />
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Salad</h5>
                            <p class="card-text">
                              Ingredients: Tomato, lettuce, onion, dressing.
                            </p>
                            <div class="row">
                              <p class="card-text col fs-5">
                                $9.00
                              </p>
                              <button class="btn btn-primary col mx-4 text-btn-type">Add</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card mb-3 plato" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4 my-auto">
                          <img
                            src="<?=base_url('assets/img/comida/plato3.jpg');?>"
                            class="img-fluid rounded"
                          />
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Tuna Salad</h5>
                            <p class="card-text">
                              Ingredients: Tuna, tomato, lettuce, onion, dressing.
                            </p>
                            <div class="row">
                              <p class="card-text col fs-5">
                                $12.00
                              </p>
                              <button class="btn btn-primary col mx-4 text-btn-type">Add</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="main-course">
                    <h1 class="">Desserts</h1>
                    <div class="card mb-3 plato" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4 my-auto">
                          <img
                            src="<?=base_url('assets/img/comida/postre1.jpg');?>"
                            class="img-fluid rounded"
                          />
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Fruits</h5>
                            <p class="card-text">
                              Ingredients: Orange, strawberry, banana, kiwi, whipped cream.
                            </p>
                            <div class="row">
                              <p class="card-text col fs-5">
                                $5.00
                              </p>
                              <button class="btn btn-primary col mx-4 text-btn-type">Add</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card mb-3 plato" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4 my-auto">
                          <img
                            src="<?=base_url('assets/img/comida/postre3.jpeg');?>"
                            class="img-fluid rounded"
                          />
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Rice Pudding</h5>
                            <p class="card-text">
                              Ingredients: Rice, milk, cinnamon.
                            </p>
                            <div class="row">
                              <p class="card-text col fs-5">
                                $4.00
                              </p>
                              <button class="btn btn-primary col mx-4 text-btn-type">Add</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card mb-3 plato" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4 my-auto">
                          <img
                            src="<?=base_url('assets/img/comida/postre2.webp');?>"
                            class="img-fluid rounded"
                          />
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Red Berries</h5>
                            <p class="card-text">
                              Ingredients: Blueberry, raspberry, strawberry, blackberry, chantilly.
                            </p>
                            <div class="row">
                              <p class="card-text col fs-5">
                                $4.50
                              </p>
                              <button class="btn btn-primary col mx-4 text-btn-type">Add</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="main-course">
                    <h1 class="">Drinks</h1>
                    <div class="card mb-3 plato" style="max-width: 450px;">
                      <div class="row g-0">
                        <div class="col-md-4 my-auto">
                          <img
                            src="<?=base_url('assets/img/comida/drink1.jpg');?>"
                            class="img-fluid rounded"
                          />
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Strawberry Juice</h5>
                            <p class="card-text">
                              Ingredients: <br> Strawberry, ice, water.
                            </p>
                            <div class="row">
                              <p class="card-text col fs-5">
                                $7.00
                              </p>
                              <button class="btn btn-primary col mx-4 text-btn-type">Add</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card mb-3 plato" style="max-width: 450px;">
                      <div class="row g-0">
                        <div class="col-md-4 my-auto">
                          <img
                            src="<?=base_url('assets/img/comida/drink2.jpg');?>"
                            class="img-fluid rounded"
                          />
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Pineapple Juice</h5>
                            <p class="card-text">
                              Ingredients: <br> Pineapple, ice, water.
                            </p>
                            <div class="row">
                              <p class="card-text col fs-5">
                                $7.00
                              </p>
                              <button class="btn btn-primary col mx-4 text-btn-type">Add</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card mb-3 plato" style="max-width: 450px;">
                      <div class="row g-0">
                        <div class="col-md-4 my-auto">
                          <img
                            src="<?=base_url('assets/img/comida/drink3.jpg');?>"
                            class="img-fluid rounded"
                          />
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Berries Juice</h5>
                            <p class="card-text">
                              Ingredients: <br> Red berries, ice, water, plums.
                            </p>
                            <div class="row">
                              <p class="card-text col fs-5">
                                $7.00
                              </p>
                              <button class="btn btn-primary col mx-4 text-btn-type">Add</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col carrito me-3">
                Espacio para el carrito
              </div>
            </section>
          </div>
        </div>
      </div>
      
      <!-- Footer -->
      <?=$this->load->view('layouts/footer.php',null,TRUE);?>
      <!-- End Footer -->
    </div>
    <!-- End Content  -->
</main>