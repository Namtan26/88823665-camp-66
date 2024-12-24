<?php
/**
 * แสดงข้อมูลตัวเลข 1 - 100 ว่าเป็นเลขคู่ หรือ เลขคี่
 */
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="mystyle_03.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <?php
        $my_var = 1;
        ?>
        <h1 class="text-center">ตัวเลข 1-100</h1>
        <table class="table table-bordered text-center" style="width: 50%" align="center">
            <thead>
                <tr>
                    <th>ตัวเลข</th>
                    <th>ประเภท</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 1; $i <= 100; $i++) {
                    echo "<tr>";
                    echo "<td>" . $i . "</td>";
                    if ($i % 2 == 0) {
                        echo "<td>เลขคู่</td>";
                    } else {
                        echo "<td>เลขคี่</td>";
                    }
                    echo "</tr>";
                }
                ?>
    </div>
    </div>
    </tbody>
    </table>
    </div>
</body>

</html>