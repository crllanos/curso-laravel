<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller{
    function index(){
        return "Holanda que Talca?";
    }

    function list(){
        return array("the", "users", "list");
    }

    function find($id){
        return "Info user $id.";
    }

    function insert(){
        return "Adding new user...";
    }
}
?>