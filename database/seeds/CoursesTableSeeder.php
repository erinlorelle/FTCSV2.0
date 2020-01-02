<?php
    /**
     * Created by PhpStorm.
     * User: Erin Lorelle
     * Date: 4/7/2018
     * Time: 3:25 PM
     */
    
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$computing_major = App\Major::where('abbr', '=', 'CSCI')->firstOrFail();*/
        
        $this->createCourse("BIOL 5597", "Recombinant DNA Lab", "Biological Sciences", "Arts & Sciences");
        $this->createCourse("MATH 5327", "Time Series Analysis", "Mathematics & Statistics", "Arts & Sciences");
        $this->createCourse("SOCI 5900", "Independent Study", "Sociology & Anthropology", "Arts & Sciences");
        $this->createCourse("CUAI 5426", "Secondary Clnical Field I", "Curriculum & Instruction", "Clemmer College");
        $this->createCourse("PSCI 3350", "Intl lPol Econ", "Pol Sc, Intl Affairs & Pub Adm", "Arts & Sciences");
        $this->createCourse("ECED 4018", "Honors Thesis", "Early Childhood Education", "Clemmer College");
        
    }
    
    private function createCourse($course_number, $course_name, $department, $college){
        
        $data = new App\Course;
       /* $data->major()->associate($major_id);*/
        $data->course_number = $course_number;
        $data->course_name = $course_name;
        $data->department = $department;
        $data->college = $college;
        $data->save();
        
    }
}
