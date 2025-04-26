<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Employee::count() == 0){
            Employee::create([
                'full_name' => 'Baby Anjali',
                'nik' => 'SLS-01',
                'division_id' => 1,
                'branch_id' => 1,
                'join_date' => now()->subDays(rand(0, 1000)),
            ]);
            
        }
    }
}
