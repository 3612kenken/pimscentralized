<?php
if (!isset($_POST['tableContent']) || empty($_POST['tableContent'])) {
    echo "<h3 class='text-center text-danger'>No table content provided.</h3>";
    exit;
}
$tableContent = $_POST['tableContent'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printable Table</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        h2,
        h4 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h4><i>Republic of the Philippines</i></h4>
    <h2>MARINDUQUE PROVINCIAL HOSPITAL</h2>
    <h4><i>Boac, Marinduque</i></h4>
    <h4><i>(042) 332-2490</i></h4>

    <h3 class="text-center">Patient Masterlist Report</h3>
    <div class="table-responsive">
        <table>

            <tbody>
                <?php echo $tableContent; ?>
            </tbody>
        </table>
    </div>
    <script>
        window.onload = function () {
            window.print();
        };
    </script>
</body>

</html>