<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Gameinfo_Controller extends CI_Controller
{
    const SEPARATOR = "::";

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Load the template with header, main menu and footer
     * @param $view_name
     * @param array $vars
     * @param bool $return
     * @param bool $parse
     * @return bool|string
     */
    protected function loadTemplate($view_name, $vars = array(), $return = false, $parse = false)
    {
        $cfg = array(
            'site_title' => $this->config->item('site_title'),
            'site_copyright' => $this->config->item('site_copyright'),
            'page_name' => isset($vars['page_name']) ? ' ' . self::SEPARATOR . ' ' . $vars['page_name'] : ''
        );

        $content = $this->load->view('page/header', $cfg, $return);

        $content .= $this->load->view('page/main_menu');

        if (!$parse) {
            $content .= $this->load->view($view_name, $vars, $return);
        } else {
            $content .= $this->parser->parse($view_name, $vars, $return);
        }

        $content .= $this->load->view('page/footer', $cfg, $return);

        if ($return) {
            return $content;
        } else {
            return false;
        }
    }

    protected function redirectIfUserLoggedIn()
    {
        if (isUserLogged()) {
            redirect('HomeController');
        }
    }

    protected function redirectIfUserNotLoggedIn()
    {
        if (!isUserLogged()) {
            redirect('HomeController');
        }
    }

    protected function redirectIfUserNotAdmin()
    {
        if (!isUserAdmin()) {
            redirect('HomeController');
        }
    }
}


// this is udsed in the controlers to load dthe view.
//public function viewGameDetails($gameID, $accesFromIndex = false)
//{
//    $this->load->model('db_details/game_db_details');
//    $this->data = array(
//        'page_name' => self::PAGE_NAME
//    );
//    $libraryGameIDs = $this->game_db_details->getAllLibraryGames(getUserId());
//    if ($libraryGameIDs)
//    {
//        $this->data['library_games'] = $libraryGameIDs;
//        $gameDetails = $this->game_db_details->getGameDetails($accesFromIndex ?
//            $libraryGameIDs[0]['game_id'] : $gameID);
//        if (is_array($gameDetails))
//        {
//            $this->data['game_details'] = $gameDetails;
//        } else
//        {
//            $this->data['error'] = 'This game is not in your library !';
//        }
//    } else
//    {
//        $this->data['message'] = 'You do not have any games added in the library.';
//    }
//    $this->loadTemplate(self::VIEWS_FOLDER_NAME . DS . 'index', $this->data);
//}