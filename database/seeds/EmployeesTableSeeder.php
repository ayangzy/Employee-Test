<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $employee = App\Employee::create([
            'name' =>'Ayange Felix',
            'position' => 'laravel-Developer',
            'salary' => 250000,
            'employmentType' => 'Full time',
            'status' => 'Senior',
            'created_at' => '2020-06-10 21:54:14'
        ]);

        $employee = App\Employee::create([
        'name' =>'Wombo Paul',
        'position' => 'Dot-net developer',
        'salary' => 200000,
        'employmentType' => 'Full time',
        'status' => 'Mid Level',
        'created_at' => '2020-02-09 20:54:10'
        ]);

         $employee = App\Employee::create([
         'name' =>'Atekombo Fater',
         'position' => 'django developer',
         'salary' => 150000,
         'employmentType' => 'Part time',
         'status' => 'Junior',
         'created_at' => '2019-05-08 19:54:14'
         ]);

         $employee = App\Employee::create([
         'name' =>'Peter Itodo',
         'position' => 'Node js developer',
         'salary' => 300000,
         'employmentType' => 'Full time',
         'status' => 'Senior',
         'created_at' => '2018-06-23 10:08:12'
         ]);



          $employee = App\Employee::create([
          'name' =>'Samuel Ikyulen',
          'position' => 'Python developer',
          'salary' => 400000,
          'employmentType' => 'Part time',
          'status' => 'Senior',
          'created_at' => '2020-01-10 21:54:14'
          ]);
    }
}