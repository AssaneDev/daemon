<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcoleController extends Controller
{
    //
     public function IndexEcole(){
        return(view('school.ecole_index'));
    }

    public function Form(){
        return(view('school.form_ecole'));
    }



}
