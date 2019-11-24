<?php
class License_UploadModel extends Model
{
    public function find(string $tablename, array $fields)
    {
       
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
        
        $licensenum = $_POST['license_num'];
        $driverImageName = time().' ' . $_FILES['license_image']['name'];
        $target = 'upload/' . $driverImageName;

        //check if image Upload Sucessfully
        if(move_uploaded_file($_FILES['license_image']['tmp_name'], $target))
        {
            $query = "UPDATE citizen SET license_image_file = '" . $_FILES['license_image']['name'] ."' WHERE license_num = '" . $fields['license_num'] ."'";
            $result = $this->sql->query($query);

            if ($this->sql->errno) {
                echo 'SQL Error occurred: ';
                echo $this->sql->error;
                exit();
            }
        }
            if($result == true)
            {
                return true;
            }
            else{
                $this->setErrors('license_image', 'Error');
                return false;
            }

        }
    

}