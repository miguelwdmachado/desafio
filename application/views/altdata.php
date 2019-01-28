<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('header');
?>
<br>
<!-- Início do formulário de informações -->
<div class="container">
    <p class="page-header text-center" style="font-face:Ubuntu; color:#3e4095; font-size:20px;"><?php echo $page_title;?></p>
    <?php echo (isset($msg) ? $msg : '') ?>
    <?php echo form_open('index.php/altdata/gravar_informacoes', 'class="altdata" id = "frmaltdata"');?>
	<div class="form-group">
        <label for="dtini">Data e Hora Inicial:</label>
        <input type="datetime" name="dtini" id="dtini" class="form-control" style="background:#d2d3d5" value="" onkeypress="formatar_mascara(this, '00/00/0000 00:00')" maxlength="16" required/>
    </div>    
    <div class="form-group">
        <label for="op">Operação:</label>
        <select name="op" class="form-control" autocomplete="on" style="background:#d2d3d5">
        <option value="+">+</option>
        <option value="-">-</option>
        </select>
    </div>
    <div class="form-group">
        <label for="valor">Valor:</label>
        <input type="int" name="valor" class="form-control" style="background:#d2d3d5" value="" maxlength="6" required/>
    </div>
    <div class="form-group">
      <div class="input-group ajuste_esquerda">
        <input type="submit" class="btn btn-primary" style="width:120px" value="Salvar">
        <a type="reset" href="javascript:history.go(-1)" class="btn btn-cancel" style="width:120px">Cancelar</a>
      </div>
    </div>
    </form>
</div>

<!-- Fim do formulário de informações -->
<?php
$this->load->view('foother');
?>
