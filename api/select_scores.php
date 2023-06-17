<?php require_once "../db.php";


dd($_POST);

switch ($_POST['scores']) {
    case 'max':
        select_scores('=', "(SELECT MAX(`scores`) FROM scores WHERE LEFT(`school_num`, 6) = LEFT('{$_SESSION['school_nums'][0]}', 6))", $_SESSION['school_nums'][0]);
        break;
    case 'min':
        select_scores('=', "(SELECT MIN(`scores`) FROM scores WHERE LEFT(`school_num`, 6) = LEFT('{$_SESSION['school_nums'][0]}', 6))", $_SESSION['school_nums'][0]);
        break;
    case 'pass':
        select_scores('>=', '60', $_SESSION['school_nums'][0]);
        break;
    case 'flunk':
        select_scores('<', '60', $_SESSION['school_nums'][0]);
        break;
}

header("location:../backend.php?do=display_scores");
