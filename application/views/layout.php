<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Importar los "meta" y "links que se usaran" -->
    <?=$this->load->view('layouts/head.php',null,TRUE);?>
</head>
<body>
    <!-- Contenido que mostrar -->
    <?=isset($errors) ? $this->load->view($page,$errors,TRUE) : $this->load->view($page,null,TRUE) ?>

    <!-- Importar los script que se usaran -->
    <?=$this->load->view('layouts/scripts.php',null,TRUE);?>
</body>
<script>
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ['75%', '16%', '5%', '1%', '3%'],
          datasets: [{
              label: 'Reviews',
              data: [982, 205, 65, 17, 46],
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
</html>