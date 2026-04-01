<?php
namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class HomeController extends Controller {
    public function index() {
        echo view('home');
    }
}