<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//include_once(APPPATH.'Datachange.php');

class Datachange {

   public function processa($data, $op, $value)
   {
      $dtini = $data.':00';
      $op = $op;
      $valor = abs($value);
      
      $dt = substr($dtini,0,10);// 00/00/0000
      $h  = substr($dtini,11,8);
      $minutos = $valor;
      $dias = 0;
      $meses = 0;
      $anos = 0;
      $horas = 0;
      $ddi = 0;
      $mdi = 0;
      $adi = 0;
      $hhi = 0;
      $mhi = 0;
      $shi = 0;
               
      $dte = explode('/', $dt);
      $ddi = $dte[0];
      $mdi = $dte[1];
      $adi = $dte[2];

      $hte = explode(':', $h);
      $hhi = $hte[0];
      $mhi = $hte[1];
      $shi = $hte[2];

      $di = new DateTime($adi.'-'.$mdi.'-'.$ddi.' '.$hhi.':'.$mhi.':'.$shi, new DateTimeZone('America/Sao_Paulo'));
      
      if (intdiv($minutos, 1440) > 0) {
         $dias = intdiv($minutos, 1440);
         $minutos = ($minutos % 1440);
      if (intdiv($minutos, 60) > 0) {
         $horas = intdiv($minutos, 60);
         $minutos = ($minutos % 60);
      }
      if (intdiv($horas, 24) > 0) {
         $dias = $dias + intdiv($horas, 24);
         $minutos = $minutos + ($horas % 24);
         }
      } else {
      if (intdiv($minutos, 60) > 0) {
         $horas = intdiv($minutos, 60);
         $minutos = ($minutos % 60);
      }
      }

      if ($op == '+') {
         $mhi = $mhi + $minutos;
         if (intdiv($mhi, 60) > 0) {
            $horas = $horas + intdiv($mhi, 60);
            $minutos = ($mhi % 60);
            $mhi = $minutos;
         }
         $hhi = $hhi + $horas;
         if (intdiv($hhi, 24) > 0) {
            $dias = $dias + intdiv($hhi, 24);
            $hhi = ($hhi % 24);
            }
         $ddi = $ddi + $dias;
         
         if ($mdi == '02' and $ddi > '28') {
            $ddi = $ddi - '28';
            $mdi = $mdi + 1;
         } 
         
         if (($mdi == '01' or $mdi == '03' or $mdi == '05' or $mdi == '07' or $mdi == '08' or $mdi == '10') and ($ddi > '31')) {
            $ddi = $ddi - '31';
            $mdi = $mdi + 1;
         }
         
         if (($mdi == '04' or $mdi == '06' or $mdi == '09' or $mdi == '11') and ($ddi > '30')) {
            $ddi = $ddi - '30';
            $mdi = $mdi + 1;
         }
         
         if ($mdi == '12' and $ddi > '31') {
            $ddi = $ddi - 31;
            $mdi = '01';
            $adi = $adi + 1;
         }

      }

      if ($op == '-') {
         $mhi = $mhi - $minutos;
         if ($mhi < 0) {
            $mhi = $mhi + 60;
            $hhi = $hhi - 1;
         }
         $hhi = $hhi - $horas;
         if ($hhi < 0) {
            $hhi = $hhi + 24;
            $ddi = $ddi - 1;
            }
         $ddi = $ddi - $dias;
         if ($mdi == '01' and $ddi < 1) {
            $mdi = '12';
            $ddi = $ddi + 31;
            $adi = $adi - 1;
         } 

         if ($mdi == '03' and $ddi < 1) {
            $ddi = $ddi + 28;
            $mdi = $mdi - 1;
         } 
         
         if (($mdi == '02' or $mdi == '05' or $mdi == '07' or $mdi == '08' or $mdi == '10' or $mdi == '12') and ($ddi < 1)) {
            $ddi = $ddi + 30;
            $mdi = $mdi - 1;
         }
         
         if (($mdi == '04' or $mdi == '06' or $mdi == '09' or $mdi == '11') and ($ddi < 1)) {
            $ddi = $ddi + 31;
            $mdi = $mdi - 1;
         }
         
      }
      //$dtfim = new DateTime($adi.'-'.$mdi.'-'.$ddi.' '.$hhi.':'.$mhi.':'.$shi, new DateTimeZone('America/Sao_Paulo'));
      $dtfim = $adi.'-'.str_pad($mdi, 2, "0", STR_PAD_LEFT).'-'.str_pad($ddi, 2, "0", STR_PAD_LEFT).' '.str_pad($hhi, 2, "0", STR_PAD_LEFT).':'.str_pad($mhi, 2, "0", STR_PAD_LEFT).':'.str_pad($shi, 2, "0", STR_PAD_LEFT);
      
      return $dtfim;
   }
}
?>
