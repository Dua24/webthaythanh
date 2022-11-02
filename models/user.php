<?php
class user{
    private $id_user;
    private $name_user;
    private $password_user;
   

    public function id_user() {
        return $this->id_user;
    }
    public function name_user() {
        return $this->name_user;
    }
    public function password_user() {
        return $this->password_user;
    }
    
    public function __construct($id_user,$name_user,$password_user) {
        $this->id_user=$id_user;
        $this->name_user=$name_user;
        $this->password_user=$password_user;
    }
    public function __toString() {
        return "";
    }
    
}


?>