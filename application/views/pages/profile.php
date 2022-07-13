<div style="height: 10px; background-color: #064420 !important; margin-top: 0px !important;"></div>

<div class="min-height-300 position-absolute w-100" style="background-color: #064420 !important;"></div>

<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <?=$this->load->view('layouts/nav.php',null,TRUE);?>
    <!-- End Navbar -->

    <script>
        let perfil = document.getElementById('NAV-PROF');
        perfil.classList.remove('opacity-5');
    </script>

    <!-- Content  -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h1 style="text-align: center; color: rgba(0, 0, 0, 0.800);">Profile</h1>
              <hr style="border: 1px solid #064420; width: 70%; margin: 30px auto 0px auto;">
            </div>
            <div class="card-header pb-0">
              <!-- 
                  Aqui poner todo el contenido que va a ir en la pagina
                --> 
              <div class="main-content position-relative max-height-vh-100 h-100">
                <div class="container-fluid py-4">
                  <div class="my-details"> <!-- Centra el contenido del formulario -->
                    <div class="col-md-10">                        
                      <div class="card">
                        <div class="card-body my-details2">
                          <div class="row">
                            <p class="text-uppercase fw-bold text-lg">User Information</p>
                            <div class="row-2">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="example-text-input" class="form-control-label text-cuino">Name</label>
                                  <input class="form-control" type="text" value="<?=$this->session->name?>">
                                </div>
                              </div>
                            </div>
                            <div class="row-2">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="example-text-input" class="form-control-label text-cuino">Cellphone</label>
                                  <input class="form-control" type="text" value="<?=$this->session->cellphone?>">
                                </div>
                              </div>
                            </div>
                            <div class="row-2">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="example-text-input" class="form-control-label text-cuino">Email address</label>
                                  <input class="form-control" type="text" value="<?=$this->session->email?>">
                                </div>
                              </div>
                            </div>
                            <div class="row-2">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="example-text-input" class="form-control-label text-cuino">Creation date</label>
                                  <input class="form-control" type="text" value="<?=$this->session->created_at?>">
                                </div>
                              </div>
                            </div>
                            <div class="row-2">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="example-text-input" class="form-control-label text-cuino">Role</label>
                                  <input class="form-control" type="text" value="<?=$this->session->role?>">
                                </div>
                              </div>
                            </div>
                          </div>
                      
                          <div class="row">
                            <img src="<?=base_url('assets/img/comida/img-perfil2.jpeg');?>" alt="" class="img-perfil">
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
      </div>
      
      <!-- Footer -->
      <?=$this->load->view('layouts/footer.php',null,TRUE);?>
      <!-- End Footer -->
    </div>
    <!-- End Content  -->
</main>

