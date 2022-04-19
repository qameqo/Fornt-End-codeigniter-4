<?php namespace App\Controllers;

use CodeIgniter\Controller;

class About extends Controller{
    
    public function index(){
        
        echo view('Templates/header');
        echo view('pages/about');
        echo view('Templates/footer');
    }
}