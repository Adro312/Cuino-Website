<main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder text-primary-own login-text-title">Sign Up</h4>
                  <p class="mb-0 login-text-subtitle-">Enter your data to sign up</p>
                </div>
                <div class="card-body">
                  <form role="form">
                    <div class="mb-3">
                      <input type="text" class="form-control form-control-lg" placeholder="Name" aria-label="Name">
                    </div>
                    <div class="mb-3">
                      <input type="text" class="form-control form-control-lg" placeholder="Phone Number" aria-label="phone-number">
                    </div>
                    <div class="mb-3">
                      <input type="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email">
                    </div>
                    <div class="mb-3">
                      <input type="email" class="form-control form-control-lg" placeholder="Password" aria-label="Password">
                    </div>
                    <div class="text-center">
                    <a href="<?=site_url('Pages/About_Us');?>"><button type="button" class="btn btn-lg btn-primary btn-lg text-btn-type w-100 mt-4 mb-0">Sign Up</button></a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('<?=base_url('assets/img/login/Ensalada.jpg');?>'); background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative login-text-img-title">Meet our company</h4>
                <p class="text-white position-relative login-text-img-subtitle">The smart menu that will explode your mind</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</main>