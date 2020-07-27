<?php
require __DIR__ . '/vendor/autoload.php';
use Study\Controller\GradeController;
use Study\Controller\SubjectController;
$gradeController = new \Study\Controller\GradeController();
$subjectController = new SubjectController();
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : "";
include_once('src/View/menu/menu.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>

<body>
<?php
    $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;
    switch ($page) {
        case 'list-subject':
            $subjectController->viewSubject();
            break;
        case 'add-subject':
            $subjectController->addSubject();
            break;
        case 'update-subject':
            $subjectController->updateSubject();
            break;
        case 'delete-subject':
            $subjectController->deleteSubject();
            break;
        case 'logOut':
            include_once('src/View/tbl_users/login.php');
            break;
        case 'add-grade':
            $gradeController->addGrade();
            break;
        case 'update-grade':
            $gradeController->updateGrade();
            break;
        case 'delete-grade':
            $gradeController->deleteGrade();
            break;
        default:
            $gradeController->showListGrade();
            break;
    }
    ?>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</html>