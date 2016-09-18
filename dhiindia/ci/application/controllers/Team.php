<?php
class Team extends CI_Controller {

        public function index()
        {
        	$this->load->model('TeamModel');
        	$data['team']=$this->TeamModel->getTeamDetails();
        	$this->load->view('team', $data);
        }
}