<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Importar los "meta" y "links que se usaran" -->
    <?=$this->load->view('layouts/head.php',null,TRUE);?>
</head>
<body>
    <!-- Contenido que mostrar -->
    <?=$this->load->view($page,null,TRUE);?>

    <!-- Importar los script que se usaran -->
    <?=$this->load->view('layouts/scripts.php',null,TRUE);?>
</body>
</html>