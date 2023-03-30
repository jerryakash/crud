<?php

include 'connect.php';
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

?>
<!--===== html block======---->
<!Doctype html>
<html>

<head>

    <title>Users List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <section class="intro">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col">

                    <h1 class="my-4 text-center">Users list</h1>
                    <div class="table-responsive">
                        <?php
                        if (mysqli_num_rows($result) > 0) {

                        ?>

                            <a class="btn btn-warning" href="add_task.php">Add Task</a>
                            <a class="btn btn-warning" href="index.php">Add User</a>


                            <table id="" class="table table-striped" width="100%">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email Address</th>
                                        <th>Phone Number</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $i = 0;
                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>

                                        <tr>

                                            <td><?php echo $row["id"]; ?></td>
                                            <td><?php echo $row["name"]; ?></td>
                                            <td><?php echo $row["email"]; ?></td>
                                            <td><?php echo $row["mobile"]; ?></td>
                                            <!-- <td><a class="btn btn-primary" href="view.php?id=<?php echo $row["id"]; ?>">View</a></td> -->
                                        </tr>
                                    <?php
                                        $i++;
                                    }
                                    ?>
                                <?php
                            } else {
                                echo "No result found";
                            }
                                ?>
                                </tbody>
                            </table>

                    </div>

                </div>
            </div>
        </div>

    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--== external js ==-->
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-bs/2.1.1/dataTables.bootstrap.min.js" integrity="sha512-3Oh481vgLg54WOogdGR71fm7D21LB3KNxh/z6Ms612X3tRboDg4eNgVO5Z5C8iQtbRnNwvQoCielmtLTYW4zcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>