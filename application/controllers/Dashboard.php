<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
    $data['konten']="v_dashboard";
		$this->load->view('template',$data); //load -> view (mengincludekan file view) //load -> model(mengincludekan file model)
	}
  public function kontak()
  {
    $data['konten']="v_kontak";
		$this->load->view('template',$data);
  }
  public function profil()
  {
    $data['konten']="v_profil";
		$this->load->view('template',$data);
  }
  public function trending()
  {
    $data['konten']="v_trending";
    $this->load->view('template',$data);
  }
  public function booking()
  {
    $data['konten']="v_booking";
    $this->load->view('template',$data);
  }
  public function agenda()
  {
    $data['konten']="v_agenda";
    $this->load->view('template',$data);
  }
}
