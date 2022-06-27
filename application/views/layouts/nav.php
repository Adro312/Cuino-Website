<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl mt-4" id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3" style="margin: 0px auto; width: 90%; display: flex; flex-direction: row; align-items: center; justify-content: space-around;">
    <nav aria-label="breadcrumb" class="row" style="display: flex; flex-direction: row; align-items: center; justify-content: space-evenly;">
        <a href="<?=site_url('Pages/About_Us');?>" style="width: 15%;">
            <img src="<?=base_url('assets/img/logos/LogoLetrasBlancas.png');?>" alt="" style="width: 100%;">
        </a>
        <ul class="breadcrumb bg-transparent justify-content-center" style="width: 70%; height: auto; align-self: center; margin-top: auto; margin-bottom: auto;">
            <li><a class="text-white text-btn-type" style="font-size: 1.3em;" href="<?=site_url('Pages/About_Us');?>">About Us</a></li>
            <li><a class="opacity-5 text-white text-btn-type" style="font-size: 1.3em; margin-left: 1.7em;" href="#">Enterprise</a></li>
            <li><a class="opacity-5 text-white text-btn-type" style="font-size: 1.3em; margin-left: 1.7em;" href="#">Menu</a></li>
            <li><a class="opacity-5 text-white text-btn-type" style="font-size: 1.3em; margin-left: 1.7em;" href="#">Reviews</a></li>
            <li><a class="opacity-5 text-white text-btn-type" style="font-size: 1.3em; margin-left: 1.7em;" href="#">Profile</a></li>
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