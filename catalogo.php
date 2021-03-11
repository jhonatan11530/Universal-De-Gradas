
<?php
        include "bases/tops.php";
        ?>
<?php


 if($_GET){
        if ($_GET['p']=='0') {
                include "catalogo/0.php";
        }
      if ($_GET['p']=='1') {
                include "catalogo/1.php";
        }
        if ($_GET['p']=='2') {
                include "catalogo/2.php";
                
                        }
        if ($_GET['p']=='3') {
                include "catalogo/3.php";
                        }
        if ($_GET['p']=='4') {
                include "catalogo/4.php";
                        }
        if ($_GET['p']=='5') {
                include "catalogo/5.php";
                        }
        if ($_GET['p']=='6') {
                include "catalogo/6.php";
                        }
        if ($_GET['p']=='7') {
                include "catalogo/7.php";
                        }
        if ($_GET['p']=='8') {
                include "catalogo/8.php";
                        }
        if ($_GET['p']=='9') {
                include "catalogo/9.php";
                        }
        if ($_GET['p']=='10') {
                include "catalogo/10.php";
                }   
        if ($_GET['p']=='11') {
                include "catalogo/11.php";
                }    
        if ($_GET['p']=='12') {
                include "catalogo/12.php";
                }
        if ($_GET['p']=='13') {
                include "catalogo/13.php";
                }
        if ($_GET['p']=='14') {
                include "catalogo/14.php";
                }
        
                                     
 }else{

        include "catalogo/entrada.php";

}

include "bases/bots.php";
?>

     
