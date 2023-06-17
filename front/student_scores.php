<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .title>h1 {
            display: none;
        }

        .back>a {
            color: white;
            position: absolute;
            top: 90%;
            left: 2%;
            text-decoration: none;
            font-size: 18px;
        }

        .chartBox {
            width: 40vw;
            height: 450px;
            display: flex;
            justify-content: center;
            background-color: #ffffff90;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <?php
    $sql = "SELECT * FROM `scores`,`students` 
     WHERE `scores`.`school_num`=`students`.`school_num` 
     AND `scores`.`school_num` = {$_SESSION['school_num']}";
    $scores = q($sql);
    foreach ($scores as $key => $value) {
    ?>
        <div class="chartBox">
            <canvas id="myChart" width="600px" height="450px"></canvas>
        </div>
        <script>
            let ctx = document.getElementById('myChart');
            let myBarChart = new Chart(ctx, {
                type: 'bar', // 圖表類型
                data: {
                    labels: ['第一次模擬考', '第二次模擬考', '第三次模擬考', '第四次模擬考', '第五次模擬考'],
                    datasets: [{
                        label: '模擬考成績', // 圖表的標籤
                        data: [
                            <?= $value['scores']; ?>,
                            <?= $value['scores_2']; ?>,
                            <?= $value['scores_3']; ?>,
                            <?= $value['scores_4']; ?>,
                            <?= $value['scores_5']; ?>
                        ], // 圖表的數據
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)'
                        ], // 條形顏色
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)'
                        ], // 條形邊線顏色
                        borderWidth: 1 // 條形邊線寬度
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            min: 0, // 設定最小值
                            max: 100 // 設定最大值
                        }
                    }
                }
            });
        </script>
    <?php
    }
    ?>
    <div class="back">
        <a href="index.php?do=student"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
            </svg>back</a>
    </div>
</body>

</html>