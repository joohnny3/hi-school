<div id="sidebar">
    <ul>
        <?php if (!isset($value['scores']) && isset($_POST['school_num'])) { ?>
            <li>
                <form method="post" action="backend.php?do=add_scores">
                    <input type="hidden" name="school_num" value="<?= $_POST['school_num'] ?>">
                    <button type="submit">成績登入</button>
                </form>
            </li>
        <?php }; ?>
        <li>
                <form method="post" action="backend.php?do=select_scores">
                    <input type="hidden" name="school_num" value="<?= $_POST['school_num'] ?>">
                    <button type="submit">成績查詢</button>
                </form>
            </li>
        <?php if (isset($_SESSION['login'])) { ?>
            <li><a href="./api/logout.php">登出</a></li>
        <?php }; ?>
    </ul>
</div>
<div id="sidebar-button-wrapper">
    <button id="sidebar-button" onclick="toggleSidebar()">功能表</button>
</div>