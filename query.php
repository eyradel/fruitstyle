<?php

function getUsers()
{
    
    return  json_decode(file_get_contents(__DIR__.'/data.json'),true);
   
    
    
}



function putJson($users)
{
    file_put_contents(__DIR__ . '/data.json', json_encode($users, JSON_PRETTY_PRINT));
}

function createUser($data)
{
    $users = getUsers();
    $data['id'] = rand(1,500);
    $data['code']  = sprintf(rand(1,30).'@'.'fruitstyle');
    $data['date'] = date("Y-m-d h:i:sa");
    $users[] = $data;
    putJson($users);
    return $data;
    
}
function uploadImage($file, $user)
{
    if (isset($_FILES['picture']) && $_FILES['picture']['name']) {
        if (!is_dir(__DIR__ . "/img")) {
            mkdir(__DIR__ . "/img");
        }
        // Get the file extension from the filename
        $fileName = $file['name'];
        // Search for the dot in the filename
        $dotPosition = strpos($fileName, '.');
        // Take the substring from the dot position till the end of the string
        $extension = substr($fileName, $dotPosition + 1);

        move_uploaded_file($file['tmp_name'], __DIR__ . "/img/${user['id']}.$extension");

        $user['extension'] = $extension;
        updateUser($user, $user['id']);
    }
}

function updateUser($data, $id)
{
    $updateUser = [];
    $users = getUsers();
    foreach ($users as $i => $user) {
        if ($user['id'] == $id) {
            $users[$i] = $updateUser = array_merge($user, $data);
        }
    }

    putJson($users);

    return $updateUser;
}




?>
