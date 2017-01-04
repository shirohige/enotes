<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Manage extends CI_Controller {
  public function __construct(){
		parent::__construct();
		if(!($this->session->loggedin == 1)){
			redirect('login');
		}
    $this->load->model('fileman');
	}
  public function index(){
    $this->load->view('manage-page');
  }
  public function getdir(){
    if(isset($_GET['depth'])) {
      $dir = realpath($this->session->dir.$_GET['depth']);
      if(!$this->checkpath(realpath($this->session->dir),$dir)) exit(97);
    }
    else $dir = $this->session->dir;
    echo json_encode($this->fileman->getdirarr($dir));
  }
  private function checkpath($base,$test){
    if(!strncmp($test,$base,strlen($base))) return 1;
    else return 0;
  }
  public function logout(){
    $this->session->sess_destroy();
    redirect('login');
  }
  public function upload(){
    if(move_uploaded_file($_FILES['myfile']['tmp_name'],$this->session->dir.$_FILES['myfile']['name'])) echo 1;
    else echo 0;
  }
  public function move(){
    $_POST[''];
    $src  = realpath($this->session->dir.$this->input->post('src'));
    $dest = realpath($this->session->dir.$this->input->post('dest'));
    if(!($this->checkpath(realpath($this->session->dir),$src) && $this->checkpath(realpath($this->session->dir),$dest))){
      echo "error with dir";
      return;
    }
    echo $this->fileman->mv($src,$dest);
  }
  public function createdir(){
    $name = basename($this->input->post('name'));
    $depth = realpath($this->session->dir.$this->input->post('depth'));
    if(!($this->checkpath(realpath($this->session->dir),$depth))) {
      echo "Error dir";
      return;
    }else{
      if(!mkdir($depth.'/'.$name)) echo 0;
      else echo 1;
    }
  }
  public function download(){
    $_POST['depth'] = '';
    $_POST['name'] = 'marksheet2016.jpg';
    if($this->input->post('depth') == '')$path = realpath($this->session->dir.$this->input->post('name'));
    else $path = realpath($this->session->dir.$this->input->post('depth').'/'.$this->input->name);
    if(!$this->checkpath($this->session->dir,$path)){
      echo "Path error";
    }
    else $this->fileman->download($path);
  }
  public function getsharelink(){
    $_POST['file'] = '';
    $path = realpath($this->session->dir.$this->input->post('file'));
    if(!checkpath(realpath($this->session->dir),$path)) {
      echo "invalid path";
      return;
    }
  }
}
