<?php

class Router
{

    private $_uri = [];

    /**
     * Configure possible routes
     */
    public function __construct()
    {
        $this->_uri[] = "home";
        $this->_uri[] = "about";
        $this->_uri[] = "houses";
        $this->_uri[] = "contact";
    }

    /**
     * Validate and submit page
     * @return void
     */
    public function submit()
    {

        $uri = isset($_GET['uri']) ? $_GET['uri'] : "/";

        $current = "";

        // Search if the uri match a set route
        foreach ($this->_uri as $key => $value) {
            if (preg_match("#^$value$#", $uri)) {
                if (file_exists(ROOT . 'views/' . $current)) {
                    $current = $value;
                }
            }
        }

        ob_start();
        switch ($current) {
            case '':
                $current = "home";
                $title = "Accueil";
                require_once(ROOT . 'views/home.php');
                break;
            case 'home':
                $title = "Accueil";
                require_once(ROOT . 'views/home.php');
                break;
            case 'about':
                $title = "A propos";
                require_once(ROOT . 'views/about.php');
                break;
            case 'houses':
                $title = "Nos Maisons";
                require_once(ROOT . 'views/houses.php');
                break;
            case 'contact':
                $title = "Contact";
                require_once(ROOT . 'views/contact.php');
                break;
            default:
                require_once(ROOT . 'views/404.php');
                break;
        }

        // Add page content in to a variable to display on the layout
        $content_for_layout = ob_get_clean();

        // Call layout and place page content in it
        require_once(ROOT . "layout/layout.php");
    }
}
