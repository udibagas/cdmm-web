<?php

class MY_Controller extends CI_Controller
{
    public $template = 'templates/main';

    public $title = 'INFOTEK PRATAMA';

    public $navigation = [
        '' => 'Home',
        'about' => 'About Us',
        'services' => 'Our Services',
        'customers' => 'Our Customers',
        'projects' => 'Our Projects',
        'contact' => 'Contact Us'
    ];

    public function __construct() {
        parent::__construct();
    }

    public function render($view, $data = null) {
        return $this->load->view($this->template, array(
            'content' => $this->load->view($view, $data, true),
        ));
    }
}
