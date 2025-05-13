<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Show all products
        return view('products.index');
    }

    public function presentations()
    {
        return view('products.presentations');
    }

    public function policyBrief()
    {
        return view('products.policy-brief');
    }

    public function dissemination()
    {
        return view('products.dissemination');
    }

    public function workingPaper()
    {
        return view('products.working-paper');
    }
}