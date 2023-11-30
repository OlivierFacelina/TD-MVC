<?php
 
require './models/connection.php';
require './utils/functions.php';
require './controllers/student_controller.php';

if(isset($_GET["page"])) {
    // var_dump($_GET["page"]);
    switch($_GET["page"]) {
        case "home":
            students_list_action();
            break;
        case "details":
            student_details_action();
            break;
        case "add":
            student_add_action();
            break;
    }
}
else {
    students_list_action();
}