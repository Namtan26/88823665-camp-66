<?php
/**
 * แสดงตารางสูตรคูณ ตามแม่สูตรคูณที่ระบุค่าจาก FORM
 */
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
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
        <h1 class="text-center my-4">ตารางสูตรคูณ</h1>

        <form method="post" class="mb-4">
            <label for="number" class="form-label h4">กรุณาใส่แม่สูตรคูณ:</label>
            <input type="number" name="number" id="number" class="form-control" required>
            <button type="submit" class="btn btn-primary mt-3">แสดงตาราง</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = intval($_POST['number']);

            echo "<h2 class='text-center'>ตารางสูตรคูณแม่ $number</h2>";
            echo "<table class='table table-striped table-bordered' style='width: 50%;' align='center'>";

            for ($i = 1; $i <= 12; $i++) {
                $result = $number * $i;
                echo "<tr>
                        <td class='text-center'>$number x $i</td>
                        <td class='text-center'>= $result</td>
                    </tr>";
            }
            echo "</table>";
        }
        ?>
    </div>
</body>

</html>