<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl mt-4" id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3" style="margin: 0px auto; width: 90%; display: flex; flex-direction: row; align-items: center; justify-content: space-around;">
    <nav aria-label="breadcrumb" class="row" style="display: flex; flex-direction: row; align-items: center; justify-content: space-evenly;">
        <a href="<?=site_url('Pages/About_Us');?>" style="width: 15%;">
            <img src="<?=base_url('assets/img/logos/LogoLetrasBlancas.png');?>" alt="" style="width: 100%;">
        </a>
        <ul class="breadcrumb bg-transparent justify-content-center ul-menu-cuino" id="menu-original">
            <li><a class="opacity-5 nav-bar text-white text-btn-type item-menu-768 item-menu-1024 item-menu-600" href="<?=site_url('Pages/About_Us');?>">Home</a></li>
            <li><a class="opacity-5 nav-bar text-white text-btn-type item-menu-1024 item-menu-768 item-menu-600" href="<?=site_url('Pages/Enterprise');?>">Developing</a></li>
            <li><a class="opacity-5 nav-bar text-white text-btn-type item-menu-1024 item-menu-768 item-menu-600" href="<?=site_url('Pages/Menu');?>">Menu</a></li>
            <?php if(isset($this->session->id)){?>
                <li><a class="opacity-5 nav-bar text-white text-btn-type item-menu-1024 item-menu-768 item-menu-600" href="<?=site_url('Pages/Reviews');?>">Reviews</a></li>
                <li><a class="opacity-5 nav-bar text-white text-btn-type item-menu-1024 item-menu-768 item-menu-600" href="<?=site_url('Pages/Profile');?>">Profile</a></li>
            <?php }?>
        </ul>
        <div style="width: 15%;" class="justify-content-lg-end">
            <?php if(isset($this->session->id)){?>
            <form action="<?=site_url('Pages/Profile/logOut');?>">
                <button type="submit" class="boton-salir boton-salir-600">
                    <ion-icon name="log-out-outline" class="icon-boton-log-out-media-Plus-that-1024xp icon-boton-log-out-media-Plus-that-1024xp icon-boton-log-out-media-Plus-that-769px" id="icono-log-out"></ion-icon>
                    <p class="boton-log-out-media-1024xp boton-log-out-media-Plus-that-1024xp boton-log-out-media-769px">Log Out</p>
                </button>
            </form>
            <?php } else {?>
            <a href="<?=site_url('Login');?>">
                <button class="boton-salir boton-salir-600" <?php if(!isset($this->session->id))?>>
                    <ion-icon name="log-in-outline" class="icon-boton-log-out-media-Plus-that-1024xp icon-boton-log-out-media-Plus-that-1024xp icon-boton-log-out-media-Plus-that-769px" id="icono-log-out"></ion-icon>
                    <p class="boton-log-out-media-1024xp boton-log-out-media-Plus-that-1024xp boton-log-out-media-769px">Log In</p>
                </button>
            </a>
            <?php }?>
        </div>
    </nav>
    </div>
</nav>