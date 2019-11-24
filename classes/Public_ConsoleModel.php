<?php
class Public_ConsoleModel extends Model
{
    public function find(string $tablename, array $fields)
    {
        $user_id = $fields['natl_id'];
        $user_driverimg = $fields['license_image_file'];

        $query = "SELECT * from $tablename WHERE natl_id='$user_id' AND license_image_file ='$user_driverimg'";
        
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

    public function findall(string $tablename)
    {
        
    }

    public function add(string $tablename, array $fields)
    {
     
    }

    public function del(string $tablename, string $id)
    {
        
    }

    public function update(string $tablename, array $fields)
    {
        
    }
}