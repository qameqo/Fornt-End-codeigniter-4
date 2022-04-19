<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Contact extends Controller{
    
    public function index(){
        
        echo view('Templates/header');
        echo view('pages/contact');
        echo view('Templates/footer');
    }
}