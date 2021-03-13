<!DOCTYPE html>
<head>
          
        <title>kalkulator sederhana</title>
  <?php require("kalkulator.php"); ?> <!--untuk import file pert2_latihan3-->
</head>
<body>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
     
  
   <div align="center">
<b>LATIHAN OPERATOR ARITMATIKA</b></div>
  
  
   <table align="center">
<tr>
    <td><input type="text" name="number1" size="10" placeholder="nilai1"></td> 
    <td><input type="text" name="number2" size="10" placeholder="nilai2"></td>
    <td><select name="operator">
     <option>+</option>
     <option>-</option>
     <option>*</option>
     <option>/</option>
    </select></td>
    <td><input type="submit" name="submit" value="Hitung"></td>
      
    </tr>
</table>
</form>
</br>
  <center>
  <?php
   $hasil = new Kalkulator(); //membuat objek hasil dari klas kalkulator
   $num1 = $_POST['number1']; //untuk menangkap inputan dan masukan ke variable
   $num2 = $_POST['number2'];
   $opr = $_POST['operator'];
   if($opr == '+'){
    echo $num1." ".$opr." ".$num2." = "; 
    $hasil->tambah($num1,$num2);
   }
   else if($opr == '-'){
    echo $num1." ".$opr." ".$num2." = "; 
    $hasil->Kurang($num1,$num2);
   }
   else if($opr == '*'){
    echo $num1." ".$opr." ".$num2." = ";  
    $hasil->Kali($num1,$num2);
   }
   else if($opr == '/'){
    echo $num1." ".$opr." ".$num2." = ";  
    $hasil->Bagi($num1,$num2);
   }
  ?>
  </center>
</body>
  
</html>
<?php
   $hasil = new Kalkulator(); //membuat objek hasil dari klas kalkulator
   $num1 = $_POST['number1']; //untuk menangkap inputan dan masukan ke variable
   $num2 = $_POST['number2'];
   $opr = $_POST['operator'];
   if($opr == '+'){
    echo $num1." ".$opr." ".$num2." = "; 
    $hasil->tambah($num1,$num2);
   }
   else if($opr == '-'){
    echo $num1." ".$opr." ".$num2." = "; 
    $hasil->Kurang($num1,$num2);
   }
   else if($opr == '*'){
    echo $num1." ".$opr." ".$num2." = ";  
    $hasil->Kali($num1,$num2);
   }
   else if($opr == '/'){
    echo $num1." ".$opr." ".$num2." = ";  
    $hasil->Bagi($num1,$num2);
   }
  ?>