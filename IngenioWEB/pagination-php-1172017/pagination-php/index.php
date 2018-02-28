<?php
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>PHP Pagination</title>
    <link href="style.css" rel="stylesheet"/>
</head>
<body>
    <div class="container">
        <h1 style="text-align:center">PHP Paginator</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start Date</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <?php for( $i = 0; $i < count( $results->data ); $i++ ) : ?>
                        <tr>
                                <td><?php echo $results->data[$i]['ID']; ?></td>
                                <td><?php echo $results->data[$i]['Name']; ?></td>
                                <td><?php echo $results->data[$i]['Position']; ?></td>
                                <td><?php echo $results->data[$i]['Office']; ?></td>
                                <td><?php echo $results->data[$i]['Age']; ?></td>
                                <td><?php echo $results->data[$i]['Start_date']; ?></td>
                                <td><?php echo $results->data[$i]['Salary']; ?></td>
                        </tr>
                <?php endfor; ?>
            </tbody>
        </table>
        <?php echo $paginator->createLinks($links); ?> 
    </div>
</body>
</html>