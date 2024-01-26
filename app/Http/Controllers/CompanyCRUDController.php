<?php

namespace App\Http\Controllers;

use app\Models\Company;
use Illuminate\Http\Request;


class CompanyCRUDController extends Controller
{
    //Create index.
    public function index() {
        $data['companies'] = Company::orderBy('id', 'desc')->paginate(5);
        return view('companies.index', $data);
        
    }

    // Create resource
    public function create() {
        return view('companies.create');
    }
}
