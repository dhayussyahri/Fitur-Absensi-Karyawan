<?php 
class users{
    private $idemployment;
    private $name;
    private $password;
    private $role;

    function set_login_data($idemployment, $password)
    {
        $this->idemployment = $idemployment;
        $this->password = $password;
    }

    function set_profile_data()
    {

    }
    function get_idemployment()
    {
        return $this->idemployment;
    }
    function get_password()
    {
        return $this->password;
    }
}

?>