<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="myForm" action="./index.php?do=student" method="post">
        <input type="hidden" name="school_num" id="school_num">
        <div>
            <?php for($i = 0; $i < count($_SESSION['school_nums']); $i++): ?>
            <img src="path/to/image<?=$_SESSION['school_nums'][$i];?>.png" data-value=<?=$_SESSION['school_nums'][$i];?>>
            <?php endfor; ?>
            <img src="path/to/image7.png" data-value="+">
        </div>
    </form>
    <!-- <form id="myForm" action="./api/select_student.php" method="post">
        <input type="hidden" name="school_num" id="school_num">
        
        <div>
            <img src="path/to/image1.png" data-value=<?=$_SESSION['school_nums'][0];?>>
            <img src="path/to/image2.png" data-value=<?=$_SESSION['school_nums'][1];?>>
            <img src="path/to/image3.png" data-value=<?=$_SESSION['school_nums'][2];?>>
            <img src="path/to/image4.png" data-value=<?=$_SESSION['school_nums'][3];?>>
            <img src="path/to/image5.png" data-value=<?=$_SESSION['school_nums'][4];?>>
            <img src="path/to/image6.png" data-value=<?=$_SESSION['school_nums'][5];?>>
        </div>
    </form> -->
    <script type="text/javascript">
    const images = document.querySelectorAll('img');
    for (let i = 0; i < images.length; i++) {
        images[i].addEventListener('click', function() {
            const val = this.getAttribute('data-value');
            document.querySelector('#school_num').value = val;
            document.querySelector('#myForm').submit();
        });
    }
    </script>
</body>


</html>