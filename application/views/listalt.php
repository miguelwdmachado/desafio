<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('header');
?>
<br>
<!-- Início do formulário de informações -->
<div class="container">
    <p class="page-header text-center" style="font-face:Ubuntu; color:#3e4095; font-size:20px;"><?php echo $page_title;?></p>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
         <tr >
            <th>ID</th>
            <th>DATA INICIAL</th>
            <th>VALOR</th>
            <th>OPERAÇÃO</th>
            <th>DATA FINAL</th>
         </tr>
        </thead>

        <tbody>
            <?php foreach($alteradas->result() as $row) { ?>

            <tr>
            <td align='center'><?php echo $row->id; ?></td>
            <td align='center'><?php echo date('d/m/Y H:i:s', strtotime($row->dt_inicial)); ?></td>
            <td align='center'><?php echo $row->alteracao; ?></td>
            <td align='center'><?php echo $row->operacao; ?></td>
            <td align='center'><?php echo date('d/m/Y H:i:s', strtotime($row->dt_final)); ?></td>
            </tr>

            <?php } ?>
         </tbody>
    </table>

    </div>

<!-- Fim do formulário de informações -->
<?php
$this->load->view('foother');
?>
