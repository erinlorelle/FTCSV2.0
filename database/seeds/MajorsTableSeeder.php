<?php

use Illuminate\Database\Seeder;

class MajorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createRole("1", "Academic Affairs", "Academic Affairs");
        $this->createRole("2", "Accounting", "Business & Technology");
        $this->createRole("3", "Appalachian Studies", "Arts & Sciences");
        $this->createRole("4", "Biostatistics & Epidemiology", "Arts & Sciences");
        $this->createRole("5", "Counseling and Human Services", "Clemmer College");
        $this->createRole("6", "Audio & Spch-Lang Pathology", "Clinical & Rehab Health Science");
    }
    
    protected function createRole($id, $name, $college)
    {
        $data = new App\Major;
        $data->id = $id;            // temporarily hardcoded
        $data->name = $name;
        $data->college = $college;
        $data->save();
    }
}
