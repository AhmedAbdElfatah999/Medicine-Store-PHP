<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    session_start();
    include_once './DBConection/DbConnection.php';


    Class Sign_in_query{
        private $Db_object;
        private $query;
        private $returned_Array;

    //__________________________________________________________________________________Construct
    public function __construct($query) {
        $this->Db_object=new DbConnection();
        $this->query=$query;
    }
    function excute_query()
    {   
        $returned_Array =$this->Db_object->select($this->query);
        return  $returned_Array;
    }
    //__________________________________________________________________________________

    }
   /* if(isset($_SESSION['type'])){
        //private $Db_object;
     
        $query="SELECT * FROM `permission` WHERE type_ip='1'";
    }*/
}else {
    echo "SORRY For Wasting your time : you can't open this page directly";
}


?>