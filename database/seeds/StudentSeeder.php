<?php


use Illuminate\Database\Seeder;
use App\Student;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $s1=new Student();

        // $s1->name="Su SU";
        // $s1->email="susu@gmail.com";
        // $s1->address="Bahan";
        // $s1->save();

        // $s2=new Student();
        // $s2->name="Kg Kg";
        // $s2->email="kgkg@gmail.com";
        // $s2->address="Latha";
        // $s2->save();
        factory(App\Student::class,10)->create();


  
    }
}
