<?php
/**
 * แสดงข้อมูลตัวเลข จาก $start ถึง $end ว่าเป็นเลขคู่ หรือ เลขคี่ โดยรับค่าจาก FORM
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
        <h1 class="my-4 text-center">เลขคู่หรือเลขคี่</h1>

        <form method="post" class="mb-4">
            <div class="mb-3">
                <label for="start" class="form-label">กรุณาใส่ตัวเลขเริ่มต้น (Start):</label>
                <input type="number" name="start" id="start" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="end" class="form-label">กรุณาใส่ตัวเลขสิ้นสุด (End):</label>
                <input type="number" name="end" id="end" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">แสดงผลลัพธ์</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $start = intval($_POST['start']);
            $end = intval($_POST['end']);

            if ($start <= $end) {
                echo "<h2 class='text-center'>ตารางแสดงตัวเลขตั้งแต่ $start ถึง $end</h2>";
                echo "<table class='table table-bordered table-striped'  style='width: 40%;' align='center'>";
                echo "<thead class='table-dark'>
                        <tr>
                            <th class='text-center'>ตัวเลข</th>
                            <th class='text-center'>ประเภท</th>
                        </tr>
                      </thead>";
                echo "<tbody>";

                for ($i = $start; $i <= $end; $i++) {
                    if ($i % 2 == 0) {
                        $type = "เลขคู่";
                    } else {
                        $type = "เลขคี่";
                    }
                    echo "<tr>
                            <td class='text-center'>$i</td>
                            <td class='text-center'>$type</td>
                          </tr>";
                }
                echo "</tbody></table>";
            } else {
                echo "<div class='alert alert-danger'></div>";
            }
        }
        ?>
    </div>
</body>

</html>