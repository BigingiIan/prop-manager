<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Property;   // your units table
use App\Models\Tenant;
use App\Models\Transaction;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // 1. Create properties (units)
        $units = ['A4', 'B12', 'C1', 'A2', 'B9', 'D3', 'E7'];
        foreach ($units as $unit) {
            Property::create([
                'unit_number' => $unit,
                'is_occupied' => true,
                'monthly_rent' => rand(8000, 15000),
            ]);
        }

        // 2. Tenants data (initials will be generated from name)
        $tenantsData = [
            ['name' => 'John Ndegwa',   'unit' => 'A4', 'balance' => 8000,  'phone' => '0712345678', 'id_number' => '12345678'],
            ['name' => 'Sarah Otieno',  'unit' => 'B12','balance' => 12500, 'phone' => '0723456789', 'id_number' => '23456789'],
            ['name' => 'Moses Kamau',   'unit' => 'C1', 'balance' => 15000, 'phone' => '0734567890', 'id_number' => '34567890'],
            ['name' => 'Lucy Wambui',   'unit' => 'A2', 'balance' => 4500,  'phone' => '0745678901', 'id_number' => '45678901'],
            ['name' => 'David Mutua',   'unit' => 'B9', 'balance' => 5000,  'phone' => '0756789012', 'id_number' => '56789012'],
        ];

        foreach ($tenantsData as $data) {
            $property = Property::where('unit_number', $data['unit'])->first();
            $tenant = Tenant::create([
                'name'               => $data['name'],
                'unit_id'            => $property->id,
                'outstanding_balance'=> $data['balance'],
                'phone_number'       => $data['phone'],
                'id_number'          => $data['id_number'],
            ]);

            // Record a transaction (partial payment, leaving the balance as outstanding)
            Transaction::create([
                'tenant_id'    => $tenant->id,
                'amount'       => $property->monthly_rent - $data['balance'],
                'type'         => 'rent_payment',
                'payment_date' => Carbon::now()->subMonth()->day(10),
                'for_month'    => Carbon::now()->subMonth(),
            ]);
        }

        // 3. One fully paid tenant
        $extraUnit = Property::where('unit_number', 'D3')->first();
        $paidTenant = Tenant::create([
            'name'               => 'Alice Wanjiku',
            'unit_id'            => $extraUnit->id,
            'outstanding_balance'=> 0,
            'phone_number'       => '0767890123',
            'id_number'          => '67890123',
        ]);
        Transaction::create([
            'tenant_id'    => $paidTenant->id,
            'amount'       => $extraUnit->monthly_rent,
            'type'         => 'rent_payment',
            'payment_date' => Carbon::now()->day(5),
            'for_month'    => Carbon::now(),
        ]);

        // 4. Vacant unit (E7) remains unoccupied, no tenant
        Property::where('unit_number', 'E7')->update(['is_occupied' => false]);
    }
}