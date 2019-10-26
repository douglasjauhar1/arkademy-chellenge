<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Hello, world!</title>
</head>

<body>
    <!-- navbar area -->
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://www.arkademy.com/img/logo%20arkademy-01.9c1222ba.png" width="120" height="50" class="d-inline-block align-top" alt="">
                <h3><span>ARKADEMY</span> COFEESHOP</h3>
            </a>
            <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalLong">
                ADD
            </button>
        </div>
    </nav>
    <!-- MODAL ADD -->
    <div class="modal fade mt-5" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">ADD </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option name="">Raisa Andrian</option>
                                <option>Pevita Pearce</option>
                                <option>Mokitoo</option>
                                <option>John</option>
                                <option>Lamee</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option name="">Ice Tea</option>
                                <option>Mokacino</option>
                                <option>Teh Tarik</option>
                                <option>Lemon</option>
                                <option>Martabak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Drink">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Rp. 75000">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn ">ADD</button>
                </div>
            </div>
        </div>
    </div>
    <!-- table area -->

    <div class="container">
        <table class="table mt-5">
            <thead class="table-active">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Cashier</th>
                    <th scope="col">Product</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Raisa Andriana</td>
                    <td>Cofee Latte</td>
                    <td>Drink</td>
                    <td>20000</td>
                    <td> <button type="button" class="btn " data-toggle="modal" data-target="#deleteModal">
                            Delete
                        </button>
                        |
                        <button type="button" class="btn " data-toggle="modal" data-target="#editModal">
                            Edit
                        </button></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Pevita Pearce</td>
                    <td>Martabak</td>
                    <td>Food</td>
                    <td>10000</td>
                    <td> <button type="button" class="btn " data-toggle="modal" data-target="#deleteModal">
                            Delete
                        </button>
                        |
                        <button type="button" class="btn " data-toggle="modal" data-target="#editModal">
                            Edit
                        </button></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Raisa Andriana</td>
                    <td>Cofee Latte</td>
                    <td>Drink</td>
                    <td>20000</td>
                    <td> <button type="button" class="btn " data-toggle="modal" data-target="#deleteModal">
                            Delete
                        </button>
                        |
                        <button type="button" class="btn " data-toggle="modal" data-target="#editModal">
                            Edit
                        </button></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Pevita Pearce</td>
                    <td>Martabak</td>
                    <td>Food</td>
                    <td>10000</td>
                    <td>
                        <button type="button" class="btn " data-toggle="modal" data-target="#deleteModal">
                            Delete
                        </button>
                        |
                        <button type="button" class="btn " data-toggle="modal" data-target="#editModal">
                            Edit
                        </button>
                    </td>
                </tr>
                <!-- Modal Hapus -->
                <div class="modal fade bd-example-modal-xl" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center">
                                    <h2 class="text-center">Data Raisa Adriana id#1</h2><br>
                                    <img src="https://www.trzcacak.rs/myfile/full/7-73460_checklist-graphic-icon-circle-green-check-png.png" alt="" width="350" height="350"><br>
                                    <h2 class="text-center">Data Berhasil dihapus</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Edit -->
                <div class="modal fade bd-example-modal-xl " id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">EDIT</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="">
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option name="">Raisa Andrian</option>
                                            <option>Pevita Pearce</option>
                                            <option>Mokitoo</option>
                                            <option>John</option>
                                            <option>Lamee</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option name="">Ice Tea</option>
                                            <option>Mokacino</option>
                                            <option>Teh Tarik</option>
                                            <option>Lemon</option>
                                            <option>Martabak</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Drink">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Rp. 75000">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn ">EDIT</button>
                            </div>
                        </div>
                    </div>
                </div>
            </tbody>
        </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>