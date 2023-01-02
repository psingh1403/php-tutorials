<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
    include('configdb.php');
    $sql = "SELECT * FROM student JOIN studentclass where student.sclass = studentclass.cid";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessfull.");
    if (mysqli_num_rows($result) > 0) {
    ?>
    <table cellpadding="7px">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Class</th>
            <th>Phone</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php
        $count = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $count = $count + 1;
            ?>
            <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $row['sname']; ?></td>
                <td><?php echo $row['saddrerss']; ?></td>
                <td><?php echo $row['cname']; ?></td>
                <td><?php echo $row['sphone']; ?></td>
                <td>
                    <a href='edit.php?stuid=<?php echo $row["sid"]; ?>'>Edit</a>
                    <a href='delete-inline.php?stuid=<?php echo $row["sid"]; ?>'>Delete</a>
                </td>
            </tr>
            <?php
        }
            ?>
        </tbody>
    </table>
    <?php
    } else {
        echo "<h2>No Record Found.</h2>";
    }
    // close the connection.
    mysqli_close($conn);
    ?>
</div>
</div>
</body>

</html>