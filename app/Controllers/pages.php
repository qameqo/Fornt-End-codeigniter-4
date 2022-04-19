<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller{
    
    public function index(){
        
        echo view('Templates/header');
        echo view('pages/justmedia');
        echo view('Templates/footer');
    }
}