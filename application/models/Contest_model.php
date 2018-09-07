<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contest_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllContestsByContestId($contestId)
    {
        $sql = 'SELECT * FROM Contests WHERE contest_id = ? ';

        $query = $this->db->query($sql, $contestId);

        return $query->row();
    }

}