<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    
    <nav class="navber navber-dark bg-dark">
        <a href="#" class="navbar-brand">Muliple Input</a>
    </nav>
<div class="container">
    <div class="row mt-3">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">ร้านหอมกว่า Starbucks</h4>
                    <form action="save.php" method="post">
                        <div class="form-group">
                            <div class="">ชื่อผู้สั่ง</div>
                            <input type="text" name="cFname" class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="">เบอร์มือถือ</div>
                            <input type="text" name="cMobile" class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="">เครื่องดื่มที่ต้องการสั่ง</div>
                            <ol>
                                <li>
                                    <div class="d-flex mb-2">
                                        <input type="text" name="cOrder[]" class="form-control">
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex mb-2">
                                        <input type="text" name="cOrder[]" class="form-control">
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex mb-2">
                                        <input type="text" name="cOrder[]" class="form-control">
                                    </div>
                                </li>
                            </ol>                            
                        </div>
                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</body>
</html>