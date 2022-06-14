<?php 

class Verifica_model extends CI_Model{

    function verify($dados){
        $login = $dados['login'];
        $pswd = $dados['pswd'];
         $result = $this->db->where('login',$login)
                  ->where('pswd',$pswd)
                  ->get('user')->row_array(); 
         return $result;
    }

}

?>