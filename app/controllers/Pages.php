<?php
    class Pages extends Controller {
        public function __construct(){

        }

        public function index(){
            $data = [
                'title' => 'Welcome',
            ];
            $this->view('pages/index', $data);

        }

        public function about(){
            $data = [
                'title' => 'About Us'
            ];
            $this->view('pages/about', $data);
        }
        public function userhome(){
            $data = [
                'title' => 'Fill up Form'
            ];
            $this->view('pages/userhome', $data);
        }
    }