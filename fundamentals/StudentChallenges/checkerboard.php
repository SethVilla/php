<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Chessboard</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='main.js'></script>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="gridsize" min="2" max="15" step="1" required>
        <input type="submit" name="submit">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $gridsize = $_POST['gridsize'];

        echo "<table>";

        for($row=1; $row <= $gridsize; $row++){
            echo '<tr>';
            for($col=1; $col<=$gridsize; $col++){
                if(($row+$col) % 2 == 0){
                    echo "<td class='black'></td>";
                } else {
                    echo "<td></td>";
                }
            }
        }

        echo "</table>";

    }
    ?>

</body>
</html>