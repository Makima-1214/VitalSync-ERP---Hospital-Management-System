<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;

class PharmacyController extends Controller
{
    public function index()
    {
        return view('pharmacy.index');
    }

    public function prescriptions()
    {
        return view('pharmacy.prescriptions');
    }

    public function inventory()
    {
        return view('pharmacy.inventory');
    }
}