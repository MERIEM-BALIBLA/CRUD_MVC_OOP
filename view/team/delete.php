<?php   
    require_once ("C:\Users\Youcode\Desktop\LARAGON\www\CrudPDO\controller\Teamcontroller.php");
    // echo "keep your tears for another day ";
    $ob = new Teamcontroller();
    $ob -> deleteAction($_GET['id']);
    header("Location: index.php");
