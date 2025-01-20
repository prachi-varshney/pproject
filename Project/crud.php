<?php
require 'database.php';

function tableList(){
    $db = new Database();
    $query = "SELECT * FROM project";
    $result = $db->getData($query);

    $html = '';  

    if($result['success'] == true){
        $html .= '<tr>';
        $html .= '<th scope="col">#ID</th>';
        $html .= '<th scope="col">Name</th>';
        $html .= '<th scope="col">Email</th>';
        $html .= '<th scope="col">Phone No</th>';
        $html .= '</tr>';
        foreach($result['data'] as $value){
            $html .= '<tr>';
            $html .= '<td>' . $value['id'] . '</td>';
            $html .= '<td>' . $value['name'] . '</td>';
            $html .= '<td>' . $value['email'] . '</td>';
            $html .= '<td>' . $value['phone'] . '</td>';
            $html .= '</tr>';
        }
    }

    return $html;
}



function addForm() {
    $db = new Database();
    $formData = [];
    foreach ($_POST as $key => $value) {
        $formData[$key] = isset($value) ? $value : '';
    }
    $name = $formData['name'];
    $email = $formData['email'];
    $phone_no = $formData['phone'];
    $password = $formData['password'];

    $err = [];

    if (empty($name)) {
        $err[] = "Name cannot be empty.";
    }

    if (empty($email)) {
        $err[] = "Email cannot be empty.";
    }

    if (empty($phone_no)) {
        $err[] = "Phone number cannot be empty.";
    }

    if (empty($password)) {
        $err[] = "Password cannot be empty.";
    }

    if (!empty($err)) {
        foreach ($err as $message) {
            echo "<div class='alert alert-danger'>" . $message . "</div>";
            return;
        }
    }

    $query = "INSERT INTO project (name, email, phone, password)
        VALUES ('$name', '$email', '$phone_no', '$password')";

    $result = $db->getData($query);

    if ($result['success']) {
        echo "<div class='alert alert-success'>User  added successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Failed to add user!</div>";
    }
}
?>


