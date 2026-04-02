<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Tenant;
use App\Models\Transaction;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Total rent collected this month from transactions
        $totalRentCollected = Transaction::where('type', 'rent_payment')
            ->whereMonth('payment_date', Carbon::now()->month)
            ->whereYear('payment_date', Carbon::now()->year)
            ->sum('amount');

        // Pending arrears = sum of outstanding_balance from tenants
        $pendingArrears = Tenant::sum('outstanding_balance');

        // Occupancy rate
        $totalUnits = Property::count();
        $occupiedUnits = Property::where('is_occupied', true)->count();
        $occupancyRate = $totalUnits ? round(($occupiedUnits / $totalUnits) * 100) : 0;

        // Priority arrears list (top 5 by outstanding_balance)
        $arrears = Tenant::with('unit')
            ->where('outstanding_balance', '>', 0)
            ->orderBy('outstanding_balance', 'desc')
            ->take(5)
            ->get()
            ->map(function ($tenant) {
                // Calculate overdue days (simplified)
                $dueDate = Carbon::now()->subMonth()->day(5);
                $overdueDays = max(0, $dueDate->diffInDays(Carbon::now(), false));

                // Generate initials from name (e.g., "John Ndegwa" -> "JN")
                $initials = collect(explode(' ', $tenant->name))
                    ->map(fn($word) => strtoupper(substr($word, 0, 1)))
                    ->join('');

                return [
                    'initials'     => $initials,
                    'name'         => $tenant->name,
                    'unit'         => $tenant->unit->unit_number ?? 'N/A',
                    'amount'       => 'KES ' . number_format($tenant->outstanding_balance, 0),
                    'overdue_days' => $overdueDays,
                ];
            });

        return view('dashboard.index', compact(
            'totalRentCollected',
            'pendingArrears',
            'occupancyRate',
            'arrears'
        ));
    }
}