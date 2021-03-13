<?php
 class Kalkulator{
   
  //deklarasi variable
  var $add; 
  var $kurang;
  var $kali;
  var $bagi;
    
  //method2 yang ada
  function tambah($n1,$n2){
   echo $this->add = $n1 + $n2;
  }
    
  function Kurang($n1,$n2){
   echo $this->kurang = $n1 - $n2;
  }
    
  function Kali($n1,$n2){
   echo $this->kali = $n1 * $n2;
  }
    
  function Bagi($n1,$n2){
   echo $this->bagi = $n1 / $n2;
  }
 }
?>