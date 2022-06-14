<?php 

class MY_Loader extends CI_Loader{
    public function template($nome,$dados=array()){
        $this->view('template/header.php');
        $this->view('template/sidebar.php');
        $this->view('template/navbar.php');
        $this->view($nome,$dados);
        $this->view('template/footer.php');
    }

}

?>