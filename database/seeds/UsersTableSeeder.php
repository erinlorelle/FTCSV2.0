<?php
    /**
     * Created by PhpStorm.
     * User: Erin Lorelle
     * Date: 4/7/2018
     * Time: 3:25 PM
     */
    
use Illuminate\Database\Seeder;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$faker = Faker\Factory::create();
        for($i=0; $i < 20; $i++){
            
            $user = new App\User;
            $user->first_name = $faker->firstName;
            $user->last_name = $faker->lastName;
            $user->email = strtolower($user->last_name . substr($user->first_name, 0, 1) . "@etsu.edu");
            $user->save();
            
            $user->roles()->attach(Role::where('title', 'Student')->get());
            
            
            
        }*/
        
        $this->createUser("1","JonesB@mail.etsu.edu", "Bob", "Jones", "Fall 2018", "MBA Master of Business Admin", "East Tennessee State University", "None Required", "Professional", "Appalachian Studies", "Arts & Sciences","Full-Time","Ast Dean Student for Stud Eng");
        $this->createUser("2","PopcornK@mail.etsu.edu", "Kathy", "Popcorn", "Fall 2017", "MA Master of Arts", "East Tennessee State University", "None Required", "Academic", "Accounting", "Business & Technology","Part-Time","Assistant Dean");
        $this->createUser("3","BunnyB@mail.etsu.edu", "Bugs", "Bunny", "Spring 2018", "EDD Doctor of Education", "East Tennessee State University", "None Required", "Professional", "Accounting", "Arts & Sciences","Full-Time","Ast Dean of Time Travel");
        $this->createUser("4","BurnsG@mail.etsu.edu", "George", "Burns", "Fall 2018", "MS Master of Science", "East Tennessee State University", "None Required", "Professional", "Biostatistics & Epidemiology", "Public Health","Part-Time","Teaching Associate");
        $this->createUser("5","McFlyM@mail.etsu.edu", "Marty", "McFly", "Spring 2017", "MBA Master of Business Admin", "East Tennessee State University", "None Required", "Academic", "Audio & Spch-Lang Pathology", "Clinical & Rehab Health Science","Graduate Associate","Teaching Associate");
        $this->createUser("6","LincolnA@mail.etsu.edu", "Abraham", "Lincoln", "Fall 2018", "MS Master of Science", "East Tennessee State University", "None Required", "Professional", "Counseling and Human Services", "Clemmer College","Full-Time","Assistant Dean");
       
    }
    
    private function createUser($id, $username, $first_name, $last_name, $start_year, $degree, $institution, $qualifications, $credentials, $department, $college, $type, $title){
        
        $data = new App\User;
        $data->id = $id;                    // temporarily hardcoded
        $data->username = $username;
        $data->first_name = $first_name;
        $data->last_name = $last_name;
        $data->start_year = $start_year;
        $data->degree = $degree;
        $data->institution = $institution;
        $data->qualifications = $qualifications;
        $data->credentials= $credentials;
        $data->department = $department;
        $data->college = $college;
        $data->type = $type;
        $data->title = $title;
        $data->save();
        
    }
    

}
