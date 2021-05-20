<?php
require_once('./templates/header.php')

?>

<div class="text-center">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPostModal">
        Add Data
    </button>
</div>





<!-- Modal -->
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


<div class="row">
    <!-- <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Candra</h4>
                <p class="card-text">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora impedit iusto officiis asperiores officia eligendi, et corporis quo consequatur iste sit maiores natus, debitis magni accusamus hic in alias repudiandae?
                </p>
                <h6 class="card-subtitle text-muted text-right">xkkxkkx</h6>
                <button class="btn btn-warning">Edit</button>
                <button class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div> -->


    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Mark Hugion</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">O9990202</li>
                <li class="list-group-item">exemple@gmail.com</li>
                <li class="list-group-item">Jakarta Selatan</li>
            </ul>
        </div>

       
    </div>





</div>
<?php
require_once('./templates/footer.php')

?>