<?php
    class Teamcontroller {
        private $model;

        public function __construct(){
            require_once ('C:\Users\Youcode\Desktop\LARAGON\www\CrudPDO\model\Teammodel.php');
            $this -> model = new Teammodel();                
            
        }

        public function insertAction($name,$description) {
            $add = $this -> model -> insert($name,$description);
            return $add;
        }

        public function readAction(){
            $read = $this -> model -> read();
            return $read;
        }

        // public function editAction($id,$name,$description){
        //     $update = $this -> model -> edit($id,$name,$description);
        //     return $update;
        // }

        public function showAction($id){
            return $this->model->show($id);
        }

        public function editAction($id, $name, $description) {
            return $this->model->edit($id, $name, $description);
        }
        
        public function deleteAction($id) {
            return $this->model->delete($id);
        }
        
    }