<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if(isset($_GET['error'])){
        print "<span style='color:red'>";
        print "資料不可為空";
        print "</span>";
    }elseif (isset($_GET['repeat'])) {
        print "<span style='color:red'>";
        print "帳號名稱已存在";
        print "</span>";
    }
    ?>
    <div>
        <input type="button" id="student" value="student" onclick="updateForm(this.value);">
        <label for="student">學生</label><br>
        <input type="button" id="teacher" value="teacher" onclick="updateForm(this.value);">
        <label for="teacher">老師</label><br>
    </div>
    <div id="formContainer" style="display: none;">
        <form action="./api/reg.php" method="post">
            <div class="studentForm">
                <label for="dept">科系</label>
                <select name="dept" id="dept">
                    <option value="">請選擇科系</option>
                    <option value="資訊工程">資訊工程系</option>
                    <option value="商業管理">商業管理系</option>
                    <option value="化工材料">化工材料系</option>
                    <option value="觀光事業">觀光事業系</option>
                    <option value="大眾傳播">大眾傳播系</option>
                </select>
            </div>
            <div>
                <label for="user">帳號</label>
                <input type="text" name="user" id="user">
            </div>
            <div>
                <label for="password">密碼</label>
                <input type="text" name="password" id="password">
            </div>
            <div class="studentForm">
                <label for="school_num">學號</label>
                <input type="text" name="school_num" id="school_num">
            </div>
            <div>
                <label for="name">姓名</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="studentForm">
                <label for="en_name">英文名字</label>
                <input type="text" name="en_name" id="en_name">
            </div>
            <div class="studentForm">
                <label for="birthday">出身年月日</label>
                <input type="text" name="birthday" id="birthday">
            </div>
            <div>
                <label for="uni_id">身分證號碼</label>
                <input type="text" name="uni_id" id="uni_id">
            </div>
            <div class="studentForm">
                <label for="addr">地址</label>
                <input type="text" name="addr" id="addr">
            </div>
            <div class="studentForm">
                <label for="tel">電話</label>
                <input type="text" name="tel" id="tel">
            </div>
            <div class="studentForm">
                <label for="email">電子郵件</label>
                <input type="text" name="email" id="email">
            </div>
            <div class="studentForm">
                <label for="guardian">監護人</label>
                <input type="text" name="guardian" id="guardian">
            </div>
            <div>
                <input type="hidden" name="role" id="role" value="">
            </div>
            <div>
                <input type="submit" value="註冊">
            </div>
        </form>
    </div>

    <script>
    window.onload = () => {
        updateForm('');
    }

    function updateForm(role) {
        const formContainer = document.querySelector('#formContainer');
        const studentForm = document.querySelectorAll('.studentForm');
        let roleForm = document.querySelector('#role')
        if (role == 'student') {
            formContainer.style.display = 'block';
            roleForm.value = 'student';
            for (var i = 0; i < studentForm.length; i++) {
                studentForm[i].style.display = 'block';
            }
        } else if (role == 'teacher') {
            formContainer.style.display = 'block';
            roleForm.value = 'teacher';
            for (var i = 0; i < studentForm.length; i++) {
                studentForm[i].style.display = 'none';
            }
        } else {
            formContainer.style.display = 'none';
        }
    }
    </script>




</body>

</html>