<!DOCTYPE html><html>

<body>



    <h1>View</h1>



    <?php
    session_start();
    //draw the table
    function drawTable($table)
    {
        $row = 3;
        $column = 3;

        echo "<table>";

        for ($currentRow = 0; $currentRow < $row; $currentRow++) {
            echo "<tr>";
            for ($currentColumn = 0; $currentColumn < $column; $currentColumn++) {
                echo "<td>";
                echo $table[$currentRow][$currentColumn];
                echo "</td>";
            }
            echo "</tr>";
        }


        echo "</table>";


    }


    
    $table = $_SESSION['table'];
    drawTable($table);

    //controll and display
    $winner = "inGame";

    //get input
    if ($winner == "inGame") {
        $row = 3;
        $column = 3;

        echo "<form action='controller.php' method='post' >";


        //Select row
        echo "Row ";
        echo "<select name='row' id='row' >";
        for ($currentRow = 0; $currentRow < $row; $currentRow++) {
            echo "<option value='" . $currentRow . "'>" . $currentRow + 1 . "</option>";
        }
        echo "</select>";

        //Select column
        echo "Column ";
        echo "<select name='column' id='column' >";
        for ($currentColumn = 0; $currentColumn < $column; $currentColumn++) {
            echo "<option value='" . $currentColumn . "'>" . $currentColumn + 1 . "</option>";
        }


        echo " <input type='submit' value='Submit'>";
        echo "</form>";
    }
    //print winner
    else {
        echo "<br>";
        echo "The winner is " . $winner;
    }
    ?>





    <form action='controller.php' method='post'>
        <input type="hidden" value="true" name="refresh">
    <input type='submit' " value='Clear table'>
    </form>

</body>

</html>