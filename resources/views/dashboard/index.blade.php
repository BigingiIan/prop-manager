@extends('layouts.app')

@section('content')
    <!-- KPI Cards -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
        <x-stat-card 
            label="TOTAL RENT COLLECTED THIS MONTH"
            :value="'KES ' . number_format($totalRentCollected, 0)"
            icon="payments"
            value-color="text-green-600"
        />
        <x-stat-card 
            label="PENDING ARREARS"
            :value="'KES ' . number_format($pendingArrears, 0)"
            icon="warning"
            value-color="text-error"
        />
        <x-stat-card 
            label="OCCUPANCY RATE"
            :value="$occupancyRate . '%'"
            icon="analytics"
            value-color="text-on-surface"
        />
    </section>

    <!-- Arrears List Section -->
    <section>
        <x-section-header title="Priority Arrears" badge="TOP 5 OVERDUE" />

        <div class="space-y-3">
            @forelse($arrears as $arrear)
                <x-arrear-row 
                    :initials="$arrear['initials']"
                    :name="$arrear['name']"
                    :unit="$arrear['unit']"
                    :amount="$arrear['amount']"
                    :overdueDays="$arrear['overdue_days']"
                />
            @empty
                <div class="bg-surface-container-lowest p-6 rounded-xl text-center">
                    <p class="text-on-surface-variant">No outstanding arrears. 🎉</p>
                </div>
            @endforelse
        </div>
    </section>
@endsection