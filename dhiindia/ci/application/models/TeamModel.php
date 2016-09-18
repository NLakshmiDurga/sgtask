<?php
class TeamModel extends CI_Model
{
	public function __construct()
	{
        // $this->load->library('session');
        $this->load->database('default');
    }
    public function getTeamDetails()
    {
    	$sql = "SELECT * FROM teamdetails";
    	$query = $this->db->query($sql);
    	$result_set = $query->result();
    	$team_details = array();
    	$affected_rows = $this->db->affected_rows();
        if ($affected_rows>0) {
            foreach ($result_set as $row) {
                $team_details[] = $row;
            }
        }
        return $team_details;
    }
}    