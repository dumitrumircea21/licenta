<?php
/**
 * Created by PhpStorm.
 * User: Dorinel
 * Date: 02.09.2018
 * Time: 10:35
 */

class ContestController extends CI_Controller
{
    public function contest($contestID)
    {
        $this->load->model('Contest_model');
        $contest = $this->Contest_model->getAllContestsByContestId($contestID);

        $this->load->model('Link_model');
        $links = $this->Link_model->getAllLinksForContest($contestID);

        $data = [
            'contest_id' => $contestID,
            'contest_title' => $contest->title,
            'contest_description' => $contest->description,
            'links' => $links
        ];


        $this->load->view('header');
        $this->load->view('contest/index', $data);
        $this->load->view('footer');
    }
}