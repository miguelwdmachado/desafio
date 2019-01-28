<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Desafio DB Seller</title>
    <link rel="icon" href="<?php echo base_url();?>img/favicom.ico">  

    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">     
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
    <script src="<?php echo base_url();?>js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>   
      
    <script type="text/javascript">
    function formatar_mascara(src, mascara) {
    var campo = src.value.length;
    var saida = mascara.substring(0,1);
    var texto = mascara.substring(campo);
    if(texto.substring(0,1) != saida) {
    src.value += texto.substring(0,1);
    }
    }
    </script> 
    <script type="text/javascript">
    var x = document.getElementById("frmaltdata");
    x.addEventListener("focusout", myBlurFunction);       
    function myBlurFunction() {
      var matches = document.getElementById("dtini").value.match(/^(\d{2})\.(\d{2})\.(\d{4}) (\d{2}):(\d{2})$/);
      //alt:
      // value.match(/^(\d{2}).(\d{2}).(\d{4}).(\d{2}).(\d{2}).(\d{2})$/);
      // also matches 22/05/2013 11:23:22 and 22a0592013,11@23a22
      if (matches === null) {
          // invalid
      } else{
          // now lets check the date sanity
          var year = parseInt(matches[3], 10);
          var month = parseInt(matches[2], 10) - 1; // months are 0-11
          var day = parseInt(matches[1], 10);
          var hour = parseInt(matches[4], 10);
          var minute = parseInt(matches[5], 10);
          var date = new Date(year, month, day, hour, minute);
          if (date.getFullYear() !== year
            || date.getMonth() != month
            || date.getDate() !== day
            || date.getHours() !== hour
            || date.getMinutes() !== minute
          ) {
             // invalid
          } else {
             // valid
          }

      }
    }
    </script>
     
    <script>  
      $(document).ready(function() {
          $('#example').DataTable( {
              "language": {
                  "lengthMenu": "Mostrar _MENU_ registros por página",
                  "zeroRecords": "Desculpe - Não Encontrado",
                  "info": "Mostrando página _PAGE_ of _PAGES_",
                  "infoEmpty": "Nenhum registro encontrado",
                  "search": "Pesquisar",
                  "controls": "Anterior próximo",
                  "infoFiltered": "(filtrado de _MAX_ total registros)"
              }
          } );
      } );
     </script>  

  </head>
  <body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo base_url();?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>index.php/altdata">Nova Alteração de Data </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>index.php/listalt">Listar Alterações </a>
                </li>
            </ul>
        </div>
    </div>
