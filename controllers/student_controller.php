<?php

// Student list action
require './models/student_model.php';
function students_list_action() {

    // On récupère tous les étudiants 
    $students = get_all_students();

    // On gère la barre de recherche 
    $search = $_GET["search"] ?? '';
    $search_students = search_student($search);
    if(isset($search) && !empty($search)) {
        $students = $search_students;
    }

    // On gère le delete
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
        $delete = FILTER_INPUT(INPUT_POST, "id");
        $deleteUser = delete_student($delete);
    }
    render('home.php', compact('students'));
}

// One student
function student_details_action() {
    $student_id = $_GET["student_id"];
    // var_dump($student_id);
    $student_details = get_one_student($student_id);
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
        $INE = FILTER_INPUT(INPUT_POST,"INE",FILTER_SANITIZE_NUMBER_INT);
        $firstname = FILTER_INPUT(INPUT_POST,"firstname",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $lastname = FILTER_INPUT(INPUT_POST,"lastname",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $phone = FILTER_INPUT(INPUT_POST,"phone",FILTER_SANITIZE_NUMBER_INT);
        $data = compact("INE","firstname","lastname","phone","student_id");
       update_student($data);
    }
    render('details.php', compact('student_details'));
}

function student_add_action() {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
        $INE = FILTER_INPUT(INPUT_POST,"INE",FILTER_SANITIZE_NUMBER_INT);
        $firstname = FILTER_INPUT(INPUT_POST,"firstname",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $lastname = FILTER_INPUT(INPUT_POST,"lastname",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $birthdate = FILTER_INPUT(INPUT_POST, "birthdate", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $phone = FILTER_INPUT(INPUT_POST,"phone",FILTER_SANITIZE_NUMBER_INT);
        $email = FILTER_INPUT(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $address = FILTER_INPUT(INPUT_POST, "address");
        $postal_code = FILTER_INPUT(INPUT_POST, "postal_code");
        $city = FILTER_INPUT(INPUT_POST, "city", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $class = FILTER_INPUT(INPUT_POST, "class");
        $data = compact("INE","firstname","lastname","birthdate", "phone","email", "address", "postal_code", "city", "class");
        $create_student = create_student($data);
    }
    render('student_add.php');
}