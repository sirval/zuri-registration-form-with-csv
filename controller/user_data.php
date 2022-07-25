<?php
//get all users
function getUsers()
{
    $handle = $handle = fopen(__DIR__ . '/userdata.csv', 'r');
    while (!feof($handle) ) {
        $users[] = fgetcsv($handle, 1000, ',');
    }
    fclose($handle);
    return $users;
}

function store($data)
{
    //get max user id 
     $id = 1;
    
    // $handle = $handle = fopen(__DIR__ . '/userdata.csv', 'r');
    // while(!feof($handle)) {
    //     $row = fgetcsv($handle);
    //     if (!empty($row)) {
    //         $line[] = str_replace('|','',$row[0]);
    //     }else {
    //         $line[]=0;
    //     }
    // }
    // $id += max($line);
    // fclose($handle);

    $data = $id.'|'.$data['name'].'|'.$data['email'].'|'.$data['dob'].'|'.$data['gender'].'|'.$data['country'];
    // $handle = $handle = fopen(__DIR__ . '/userdata.csv', 'a+');
    $handle = $handle = fopen(__DIR__ . '/userdata.csv', 'w+');
    
    if(fputcsv($handle, array($data),',',' ')){
        header('location: ../index.php?success');
    }else {
        header('location: ../index.php?error');
    }
   fclose($handle);
}

if (isset($_POST['submit']) ) {
   store($_POST);
}
?>