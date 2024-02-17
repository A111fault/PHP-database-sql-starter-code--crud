<?php

include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">
</head>

<body>
    <button class="btn btn-primary mt-5" class=""><a href="user.php" class="text-light">Add User</a></button>
    <div class="container_box mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sl no.</th>
                    <th scope="col">Name</th>
                    <th scope="col">email</th>
                    <th scope="col">mobile</th>
                    <th scope="col">password</th>
                    <th scope="col">operation</th>

                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "select * from crud ";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];

                        echo ' <tr>
                            
                                                <th scope="row">' . $id . '</th>
                                                <td>' . $name . '</td>
                                                <td>' . $email . '</td>
                                                <td>' . $mobile . '</td>
                                                <td>' . $password . '</td>

                                                <td><button class="btn btn-info"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button></td>
                                                <td><button class="btn btn-danger"><a href="delete.php? deleteid= '.$id.'" class="text-light">Delete</a></button></td>
                                            </tr>';
                    }
                }



                ?>

                
            </tbody>
        </table>
    </div>
</body>

</html>