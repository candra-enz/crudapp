<?php
require_once('./templates/header.php');

require_once "connect.php";

?>

<div class="container-main p-4">



    <!-- button add data -->
    <div class="text-end">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPostModal">
            Add Data
        </button>
    </div>

    <div class="container_card d-flex justify-content-around">

        <?php

        $sql = "SELECT * FROM person";
        if ($result = $mysqli->query($sql)) {
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_array()) {
        ?> <div class="card bg-light" style="width: 18rem;">
                        <img class="card-img-top" src="resources/img/foto.jpg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?= $row['name'] ?></h5>
                            <div class="grup">

                                <p class="phone fw-normal "><i class="material-icons">phone</i><?= $row['telephone'] ?></p>
                                <p class="email fw-normal"><i class="material-icons">mail_outline</i><?= $row['email'] ?></p>
                                <p class="addres fw-normal"><i class="material-icons">home</i><?= $row['address'] ?></p>
                            </div>



                        </div>
                        <div class=" action d-flex justify-content-end px-2">
                            <!-- <a href="#" class="btn btn-primary">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a> -->
                            <a href="#" class="card-link" data-bs-toggle="modal" data-bs-target="#editPostModal"><i class="material-icons text-success">edit</i></a>
                            <a href="#" class="card-link"><i class="material-icons text-danger">delete_forever</i></a>
                        </div>
                    </div>

        <?php }
                // Free result set
                $result->free();
            } else {
                echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
            }
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }

        // Close connection
        $mysqli->close();
        ?>









        <!-- modal section -->
        <!-- addModal -->
        <div class="modal fade" id="addPostModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input class="form-control" type="text" name="name" id="name" require>
                                <label for="telephone">Telephone</label>
                                <input class="form-control" type="number" name="telephone" id="telephone" require>
                                <label for="email">Email</label>
                                <input class="form-control" type="email" name="email" id="email" require>
                                <label for="address">Address</label>
                                <input class="form-control" type="address" name="address" id="address" require>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--edit Modal -->
        <div class="modal fade" id="editPostModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input class="form-control" type="text" name="name" id="name" require>
                                <label for="telephone">Telephone</label>
                                <input class="form-control" type="number" name="telephone" id="telephone" require>
                                <label for="email">Email</label>
                                <input class="form-control" type="email" name="email" id="email" require>
                                <label for="address">Address</label>
                                <input class="form-control" type="address" name="address" id="address" require>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal section end -->

    </div>
    <!-- containerend -->
</div>
<?php
require_once('./templates/footer.php')

?>