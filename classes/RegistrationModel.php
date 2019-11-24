<?php

session_start();

class RegistrationModel extends Model


{
    public function find(string $tablename, array $fields)
    {
        
    }

    public function findall(string $tablename)
    {
        
    }

    public function add(string $tablename, array $fields)
    {
            $query = "INSERT INTO $tablename VALUES ('" . $fields['natl_id'] . "',
            '{$fields['license_num']}',
            '{$fields['first_name']}',
            '{$fields['last_name']}',
            '{$fields['email']}',
            '{$fields['telephone'][0]}',
            '{$fields['telephone'][1]}',
            '{$fields['addr'][0]}',
            '{$fields['addr'][1]}',
            '{$fields['parish']}',
            '{$fields['psw']}',
            '{$fields['cover_note_file']}',
            '{$fields['license_image_file']}')
            ";

            $result = $this->sql->query($query);
            if ($this->sql->errno) {
            echo 'SQL Error occurred: ';
            echo $this->sql->error;
            exit();
    }

    if ($result->num_rows == 1) {

        //Get database result
        while($row = $result->fetch_assoc()){
           
            $_SESSION['authenticated_user'] = array(
                'licence_num'=>$row['license_num'],
                'name'=>$row['first_name']." ".$row['last_name'],
                'address'=>$row['address_1'].", ".$row['parish'],
            );
        }
            
        //Set session variables
        return true;
    }
    else {
        return false;
    }

    }

    public function del(string $tablename, string $id)
    {
        
    }

    public function update(string $tablename, array $fields)
    {
        
    }
}