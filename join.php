<?php
    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $dbname = "bookit";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn,"utf8");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT book.BookID, book.BookName, typebook.TypeName
    FROM book 
    INNER JOIN typebook ON book.TypeID=typebook.TypeID ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<table border=1>';
        echo '<tr>';
        echo '<th>book_id</th>';
        echo '<th>book_name</th>';
        echo '<th>type_name</th>';
        echo '</tr>';
    // output data of each row
        while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>'.$row["BookID"].'</td>';
        echo '<td>'.$row["BookName"].'</td>';
        echo '<td>'.$row["TypeName"].'</td>';
        echo '</tr>';
    }
        echo '</table>';
    } else {
    echo "0 results";
    }
    $conn->close();
?>
