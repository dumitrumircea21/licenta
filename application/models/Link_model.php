<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Link_model extends CI_Model
{
    const FACEBOOK = 'facebook';
    const STEAM = 'steam';
    const GOOGLE = 'google';
    const INSTAGRAM = 'instagram';

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllLinksForContest($contestId){
        $sql = 'SELECT * 
                FROM Links
                INNER JOIN LinkTypes L ON Links.link_type_id = L.link_type_id
                WHERE contest_id = ? ';

        $query = $this->db->query($sql, $contestId);

        return $query->result_array();
    }
}