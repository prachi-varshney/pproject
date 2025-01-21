<?php
require 'database.php';

header('Content-Type: application/json'); // Ensure the response is JSON


function tableList(){
    
    $db = new Database();
    $query = "select * from project";
    $result = $db->getData($query);
    
    $html = '';  

    
    if($result['success'] == true){
        $data = $result['data'];
        foreach($data as $value){
           
          
            $html .= '<tr><td> <a href="javascript:void(0);" style="text-decoration:none" onclick="getFromData(' . $value['id'] . ')" >#' .$value['id']. '</a></td>';
            $html .= '<td>' . $value['name'] . '</td>';
            $html .= '<td>' . $value['email'] . '</td>';
            $html .= '<td>' . $value['phone'] . '</td>';
            $html .= '<td>
            <button class="btn btn-sm btn-primary" onclick="getFromData(' . $value['id'] . ')" >edit</button>
            <button class="btn btn-sm btn-danger" onclick="deleteData(' . $value['id'] . ')" >delete</button>
          </td>';
            $html .= '</tr>';
        }
    }

    return $html;


}




function addEditForm($post) {
    $db = new Database();
    // print_r($post);die;
        $formData = [];
        foreach ($post as $key => $value) {
            $formData[$key] = isset($value) ? $value : '';
        }
       
        $id = isset($formData['id'])?$formData['id']:0;
        $name = $formData['name'];
        $email = $formData['email'];
        $phone = $formData['phone'];
        $password=$formData['password'];

        $errors = [];

        if (empty($name)) {
            $errors[] = "Name cannot be empty.";
        }

        if (empty($email)) {
            $errors[] = "Email cannot be empty.";
        }

        if (empty($phone)) {
            $errors[] = "Phone number cannot be empty.";
        }

        if (empty($password)) {
            $errors[] = "Password cannot be empty.";
        }

        if (!empty($errors)) {
            echo json_encode([
                'success' => false,
                'message' => implode(' ', $errors)
            ]);
            exit;
        }

        // Insert data into the database
      



        $query = "INSERT INTO project (name, email, phone, password) 
                 VALUES ('$name', '$email', '$phone', '$password')";


$db_resp = $db->runQuery($query);
if($db_resp){
    return array("success"=>true,"message"=>"Recrod saved successfully");
}else{
    return array("success"=>false,"message"=>"Failed to save");
}

}


function getDetails($id){
$db = new Database();
$query = "SELECT * FROM empp WHERE id = ".$id;
$dbresp = $db->getRowData($query);
// print_r($dbresp);die;
return $dbresp;
}








function deleteData($id){
    $db = new Database();
    $query = "DELETE FROM project WHERE id = ".$id;
    return $db->runQuery($query);
}


if(isset($_POST['type'])) {
    
$req_type = $_POST['type'];
unset($_POST['type']);
$post = $_POST;
if(!empty($req_type)){
    if($req_type == "list"){
        echo tableList();  
    }else if($req_type == "addupdate"){
       $respone = addEditForm($post);
       echo json_encode($respone);
    }  elseif($req_type == 'delete'){
        $result = deleteData($post['id']);
        echo json_encode(array("success"=>true, "message"=>"Record deleted"));
    } 
    
    elseif($req_type == 'searchRecord'){
        // $name = $_POST['name'];
        $query = "SELECT * FROM project WHERE name LIKE '%$name%' and email LIKE '%$email%' and phone LIKE '%$phone%'";
        $result = $db->getData($query);

    
        
        if($result['success'] == true){
            $data = $result['data'];
            $html = '';
            foreach($data as $value){
                $html .= '<tr><td> <a href="javascript:void(0);" style="text-decoration:none" onclick="getFromData(' . $value['id'] . ')" >#' .$value['id']. '</a></td>';
                $html .= '<td>' . $value['name'] . '</td>';
                $html .= '<td>' . $value['email'] . '</td>';
                $html .= '<td>' . $value['phone'] . '</td>';
                $html .= '<td>
                <button class="btn btn-sm btn-primary" onclick="getFromData(' . $value['id'] . ')" >edit</button>
                <button class="btn btn-sm btn-danger" onclick="deleteData(' . $value['id'] . ')" >delete</button>
              </td>';
                $html .= '</tr>';
            }
            echo $html;
        } else {
            echo 'No records found';
        }
    }
}
}


?>