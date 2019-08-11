<?php

namespace App\Imports;

use App\User;
use App\Student;
use App\School;
use App\Group;
// use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Row;
use Maatwebsite\Excel\Concerns\OnEachRow;

class UsersImport implements OnEachRow
{
    public function onRow(Row $row)
    {
        $rowIndex = $row->getIndex();
        $row      = $row->toArray();
        
        if($this->search($row[1])!=0){
            $student = Student::where('user_id', $this->search($row[1]))->first();
            $student->code = $row[5];
            $student->school_id = $this->getSchoolId($row[3]);
            $student->group_id = $this->getGroupId($row[3], $row[4]);
            $student->update();
        }else{            
            $student = Student::firstOrCreate([
                'code'      => $row[5],
                'user_id'   => $this->getUserId($row[0], $row[1], $row[2]),
                'school_id' => $this->getSchoolId($row[3]),
                'group_id'  => $this->getGroupId($row[3], $row[4]),
            ]);   
        }        
    }

    public function search($email){
        $user = User::where('email', $email)->first();
        if ($user){
            return $user->id;
        }else{
            return 0;
        }
    }

    public function getUserId($nombre, $email, $password)
    {
        $user = User::where('email', $email)->first();
        if($user){
            return $user->id;
        }else{
            User::create([
                'name' => $nombre,
                'email' => $email,
                'password' => bcrypt($password),
            ]);
            $user = User::where('email', $email)->first();
            return $user->id;
        }        
    }

    public function getSchoolId($name)
    {
        $school = School::where('name', $name)->first();
        if($school){
            return $school->id;
        }else{
            School::create([
                'name' => $name,
                'address' => 'Actualice los datos...',
                'phone' => '',
            ]);
            $school = School::where('name', $name)->first();
            return $school->id;
        }        
    }

    public function getGroupId($school, $group)
    {
        $grupo = Group::where('name', $group)->where('school_id', $this->getSchoolId($school))->first();
        if($grupo){
            return $grupo->id;
        }
        Group::create([
            'name'      => $group,
            'level_id'  => NULL,
            'school_id' => $this->getSchoolId($school),
            'course_id' => NULL,
        ]);
        $grupo = Group::where('name', $group)->where('school_id', $this->getSchoolId($school))->first();
        return $grupo->id;        
    }
}



// class UsersImport implements ToModel
// {
//     /**
//     * @param array $row
//     *
//     * @return \Illuminate\Database\Eloquent\Model|null
//     */
//     public function model(array $row)
//     {
//         $username = $row[0];
//         $email = $row[1];
//         $password = bcrypt($row[2]);

//         return new User([
//             'name' => $username,
//             'email' => $email,
//             'password' => $password,
//         ]);
//     }
// }
