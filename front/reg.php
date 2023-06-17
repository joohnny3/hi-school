<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="./css/reg.css">
</head>

<body>
    <div class="row mt-3" id="title">
        <div class="col-6 border border-black" id="studentBox">
            <div id="studentCard" class="card" style="width: 12rem; margin: 20px 5px 20px 5px">
                <img class="card-img-top" src="./photo/graduated.png" alt="image" style="width: 100%" />
                <div class="card-body">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary disabled">學生</button>
                        <input class="btn btn-primary" type="button" id="student" value="student" onclick="updateForm(this.value);">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 border border-black" id="teacherBox">
            <div id="teacherCard" class="card" style="width: 12rem; margin: 20px 5px 20px 5px">
                <img class="card-img-top" src="./photo/professor.png" alt="image" style="width: 100%" />
                <div class="card-body">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-warning disabled">老師</button>

                        <input class="btn btn-warning" type="button" id="teacher" value="teacher" onclick="updateForm(this.value);">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="hr_">
        <hr>
    </div> -->
    <div id="regBox">
        <div id="formContainer" style="display: none;">
            <form action="./api/reg.php" method="post">
                <div class="studentForm">
                    <div class="input-group mb-2">
                        <label class="input-group-text" for="dept">科系</label>
                        <select class="form-select" name="dept" id="dept">
                            <option selected>請選擇....</option>
                            <option value="資訊工程">資訊工程系</option>
                            <option value="商業管理">商業管理系</option>
                            <option value="化工材料">化工材料系</option>
                            <option value="觀光事業">觀光事業系</option>
                            <option value="大眾傳播">大眾傳播系</option>
                        </select>
                    </div>
                </div>
                <div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">帳號</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="user" id="user">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">密碼</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="password" id="password">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">姓名</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name" id="name">
                    </div>
                    <div class="studentForm">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">學號</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="school_num" id="school_num">
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">身分證字號</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="uni_id" id="uni_id">
                    </div>
                </div>
                <div class="studentForm">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">英文名字</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="en_name" id="en_name">
                    </div>
                </div>
                <div class="studentForm">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">出生日期</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="birthday" id="birthday">
                    </div>
                </div>
                <div class="studentForm">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">居住地址</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="addr" id="addr">
                    </div>
                </div>
                <div class="studentForm">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">手機號碼</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="tel" id="tel">
                    </div>
                </div>
                <div class="studentForm">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">電子郵件</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="email" id="email">
                    </div>
                </div>
                <div class="studentForm">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">法定代理</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="guardian" id="guardian">
                    </div>
                </div>
                <div>
                    <input type="hidden" name="role" id="role" value="">
                </div>
                <div">
                    <button id="bReg" type="submit" value="註冊" class="btn btn-success">註冊 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z" />
                        </svg></button>
                </div>
            </form>
        </div>
    </div>
    <?php
    if (isset($_GET['error'])) {
        print "<div style='color:red;text-align:center'>";
        print "註冊時出現問題 請重新註冊";
        print "</div>";
    } elseif (isset($_GET['repeat'])) {
        print "<div style='color:red;text-align:center'>";
        print "帳號已註冊";
        print "</div>";
    }
    ?>

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