<?php
include 'parts/head.php';
?>

<!-- test DB -->
<?php
include 'fn/manage_dataBase.php';
$sql = new Data_Base();
$sql->check_sql();
?>

<!-- <body> -->

<!--nav-->
<?php
include 'parts/nav.php';
?>

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
                    <!-- in table ส่วนข้อมูฃในตาราง -->
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


<!-- </body> -->
<?php
include 'parts/foot.php';
?>