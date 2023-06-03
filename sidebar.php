<div id="sidebar">
    <ul>
        <li><a href="index.php?do=edit_student">編輯學生資訊</a></li>
        <!-- 可以在這裡添加更多的功能選項 -->
        <?php if (empty($row['img'])) : ?>
            <li><a href="index.php?do=photo_upload">新增照片</a></li>
        <?php endif; ?>
        <?php if (!isset($value['scores'])&&isset($_POST['school_num'])) : ?>
            <li>
                <form method="post" action="backend.php?do=add_scores">
                    <input type="hidden" name="school_num" value="<?= $_POST['school_num'] ?>">
                    <button type="submit">成績登入</button>
                </form>
            </li>
        <?php endif; ?>
        <?php if (isset($_SESSION['login'])) : ?>
            <li><a href="./api/logout.php">登出</a></li>
        <?php endif; ?>
    </ul>
</div>

<div id="sidebar-button-wrapper">
    <button id="sidebar-button" onclick="toggleSidebar()">功能表</button>
</div>