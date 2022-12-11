<?php
$conn = mysqli_connect("localhost", "root", "", "wednangcao1");
if (isset($_GET["search"]) && !empty($_GET["search"])) {
    $key = $_GET["search"];
    $sql = "SELECT * FROM san_pham WHERE ten_san LIKE " % $key % " OR anh LIKE " % $key % " OR mo_ta LIKE " % $key % " OR gia LIKE " % $key % "";
} else {
    $sql = "SELECT * san_pham";
}
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper {
            width: 1600px;
            margin: 0 auto;
        }

        table tr td:last-child {
            width: 220px;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>
    <table cellspacing="0" cellpadding="5" width="85px">
        <tr>
            <th>Quê quán</th>
            <th>Ngày sinh</th>
            <th>Ngành học</th>
            <th>Tác vụ</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            $title = $row["ten_san"];
            $thumbnail = $row["anh"];
            $content = $row["mo_ta"];
            $price = $row["gia"];
        }
        ?>
        <tr>
            <td><?php echo $title ?></td>
            <td><?php echo $thumbnail ?></td>
            <td><?php echo $content ?></td>
            <td><?php echo $price ?></td>
        </tr>
    </table>


</body>

</html>