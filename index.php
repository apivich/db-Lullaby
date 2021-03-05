<!doctype html><!-- main -->
<html>
<!-- head -->
<?php
include 'head.php';
new Head_Set('./');

?>
<!-- test DB -->
<?php
include 'fn/manage_dataBase.php';
$sql = new Data_Base();
$sql->field_count();
?>

<body>
    <!--nav-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="index.php">Lullaby</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="user/register.php">register</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
            <a href="user" class="btn btn-outline-info my-2 my-sm-0" role="button">Sing</a>
        </div>
    </nav>

    <!-- table -->
    <div class="container">
        <div class="col">
            <h1 class="text-center">ตารางจัดการ</h1>
            <div class="shadow p-3 mb-5 bg-white rounded">
                <div class="border border-secondary">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ชื่อ</th>
                                <th scope="col">วัน/เดือน/ปี</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <!-- in table ข้อมูฃในตาราง -->
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>
                                    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Edit.
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#">ลบ</a>
                                        <a class="dropdown-item" href="#">แก้ไข link</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>
                                    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Edit.
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#">ลบ</a>
                                        <a class="dropdown-item" href="#">แก้ไข link</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>cob</td>
                                <td>nton</td>
                                <td>
                                    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Edit.
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#">เพิ่ม</a>
                                        <a class="dropdown-item" href="#">แก้ไข link</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <!-- Pagination นับหน้าด้านล่าง -->
    <!-- <nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav> -->



</body>

</html>