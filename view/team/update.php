<?php   
    require_once ("C:\Users\Youcode\Desktop\LARAGON\www\CrudPDO\controller\Teamcontroller.php");

    $obj = new Teamcontroller();
    $obj->editAction($_POST['id'],$_POST['name'],$_POST['description']);

    header("Location:index.php");
