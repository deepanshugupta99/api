<?php
header("Content-Type: application/json");

header("Access-Control-Allow-Origin: *"); 
// header("Access-Control-Allow-Credentials: true");
// header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
// header('Access-Control-Max-Age: 1000');
// header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');
class Data{
    public $name;
    public $email;
    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }
    function set_email($email){
        $this->email=$email;
    }
    function get_email(){
        return $this->email;
    }
    
}

if(isset($_GET['data'])){
    $data = new Data();
    $data->set_name('aman');
    $data->set_email('aman@gmail.com');
    //return json_encode($data);
    echo json_encode($data);
}
if(isset($_POST['data'])){
    $data = new Data();
    $data->set_name('aman');
    $data->set_email('aman@gmail.com');
    //return json_encode($data);
    echo json_encode($data);
}


?>