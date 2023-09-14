<?php require_once "../db.php";

class Select extends DB
{
    function __construct()
    {
        parent::__construct();
    }
}

$Select = new Select;


switch ($_POST['scores']) {
    case 'max':
        $Select->select_scores('=', "(SELECT MAX(`scores`) FROM scores WHERE LEFT(`school_num`, 6) = LEFT('{$_SESSION['school_nums'][0]}', 6))", $_SESSION['school_nums'][0]);
        break;
    case 'min':
        $Select->select_scores('=', "(SELECT MIN(`scores`) FROM scores WHERE LEFT(`school_num`, 6) = LEFT('{$_SESSION['school_nums'][0]}', 6))", $_SESSION['school_nums'][0]);
        break;
    case 'pass':
        $Select->select_scores('>=', '60', $_SESSION['school_nums'][0]);
        break;
    case 'flunk':
        $Select->select_scores('<', '60', $_SESSION['school_nums'][0]);
        break;
}

header("location:../backend.php?do=display_scores");
