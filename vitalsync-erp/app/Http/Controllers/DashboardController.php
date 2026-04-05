<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Queue;
use App\Models\Medicine;
use App\Models\Invoice;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_patients' => Patient::count(),
            'active_queues' => Queue::whereIn('status', ['waiting', 'calling'])->count(),
            'low_stock_medicines' => Medicine::whereColumn('stock', '<=', 'critical_limit')->count(),
            'unpaid_invoices' => Invoice::where('status', 'unpaid')->count(),
        ];

        return view('dashboard', compact('stats'));
    }
}