<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function index()
    {
        $invoices = Invoice::with('patient')->latest()->paginate(10);
        return view('billing.index', compact('invoices'));
    }
}