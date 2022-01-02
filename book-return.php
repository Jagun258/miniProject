<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>

    <title>WUBOOK</title>
</head>

<style>
</style>

<body class='bg-info bg-opacity-10'>

    <nav class="navbar navbar-light bg-info bg-opacity-50 px-5" style="border-radius: 0px 0px 20px 20px; box-shadow: 5px 7px 8px -1px rgba(0, 0, 0, 0.25);">
        <a class="navbar-brand fs-3 fw-bolder" href="menu.php">
            <img src="https://i.pinimg.com/originals/8c/1b/1a/8c1b1aeaa47f60548eb0e5c3ddf4ff17.png" alt="logo" width="60" height="70">
            <span class='align-middle'>
                WU BOOK
            </span>
        </a>
    </nav>

    <!--  -->
    <div class="container text-center my-5 " style='border-radius: 25px;'>

        <p class="fw-bolder fs-1">บันทึกการคืนหนังสือ</p>

        <div class="row">
            <div class="col-md-9">
                <div class="row left-top box" style="margin-bottom: 50px;padding-bottom: 0px;">
                    <div class="col-lg-5">
                        <div class="row mt-3">
                            <label for="id_customer" maxlength="20" class="col-lg-5 fs-5 my-auto">
                                <b>รหัสสมาชิก:</b>
                            </label>
                            <div class="col-lg">
                                <input type="number" class="form-control" id="id_customer" required>
                            </div>
                        </div>
                        <div class="row">
                            <label for="id_book" class="my-auto col-lg-5 fs-5">
                                <b>รหัสหนังสือ:</b>
                            </label>
                            <div class="col-lg">
                                <input type="text" class="form-control" id="id_book" maxlength="20" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-4 my-auto">
                        <button type="button" id='search_btn' onclick="searchValue()" class="btn fw-bolder" style="background-color: #086FA1;color: white">ค้นหา
                            <img src="https://www.freeiconspng.com/thumbs/search-icon-png/search-icon-png-29.png" style='-webkit-transform: scaleX(-1);
                            transform: scaleX(-1);' alt="search" width="20%" height="%"></button>
                    </div>
                    <div class="col me-3">
                        <div class="row mt-3">
                            <label for="name_customer_val" class="col-5 fs-5 my-auto">
                                <b>ชื่อสมาชิก:</b>
                            </label>
                            <div class="col">
                                <input type="text" class="form-control" id="name_customer_val" required disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col fs-5">
                            ประวัติการ ยืม หนังสือ
                        </div>
                        <div class="row">
                            <div class="col-md"></div>
                            <div class="col-md-6 col-lg-4">
                                <button type="button" class="btn btn-outline-dark mt-3 w-50 fs-5 fw-bolder" id="history" data-bs-toggle="modal" data-bs-target="#popup_history">
                                    ประวัติ
                                    <img src="https://cdn-icons-png.flaticon.com/512/565/565526.png" alt="history" width="20%" class="pb-1" />
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="popup_history" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title fw-bolder">ประวัติการ ยืม-คืน หนังสือ</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>ลำดับ</th>
                                                            <th>รหัสหนังสือ</th>
                                                            <th>ชื่อหนังสือ</th>
                                                            <th>วันที่ยืม</th>
                                                            <th>สถานนะ</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id='tbody_history'>
                                                    </tbody>
                                                </table>

                                            </div>
                                            <div class="modal-footer">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md"></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md">
                <img src="https://i.pinimg.com/736x/8b/08/ed/8b08ed0cb7a60f9372a160fcbacb47b1.jpg" alt="profile">
                <div class="fs-4 fw-bolder mt-3" id="username-show"></div>
            </div>
        </div>
        <div class="row">
            <div class="col" style="background-color: #D7E8FF;">
                <div class="row p-3">
                    <div class="col-lg fs-5 fw-bolder">
                        ชื่อหนังสือ
                    </div>
                    <div class="col-lg fs-6" id='book_name'>
                        ...
                    </div>
                    <div class="col-lg fs-5 fw-bolder">
                        วันที่ยืม
                    </div>
                    <div class="col-lg fs-6" id='borrow_date'>
                        ...
                    </div>
                    <div class="col-lg fs-5 fw-bolder">
                        วันที่คืน
                    </div>
                    <div class="col-lg fs-6" id='return_date'>
                        ----
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- --------------------- -->

    <footer>
        <div class=" bg-info bg-opacity-50 text-center" style="border-radius: 20px 20px 0px 0px; box-shadow: 11px -1px 14px 4px rgba(0, 0, 0, 0.25);
            height: 100px;">
            <div class="fs-1 p-4">
                <div class="d-grid gap-2 d-md-flex d-flex justify-content-end">
                    <button class="btn btn-dark footer_btn fs-5" type="button" id="back_btn" onclick="window.location.href='menu.php'">
                        << Back</button>
                            <button class="btn btn-success me-md-2 footer_btn fs-5" type="button" id="ok_btn" onclick="nextPage()">ยืนยัน</button>
                </div>
            </div>
        </div>
    </footer>



</body>

<script>
    searchValue = () => {
        idCustomer = $('#id_customer').val()
        idBook = $('#id_book').val()
        if (idCustomer == sessionStorage.getItem('id')) {
            $('#name_customer_val').val(sessionStorage.getItem('name'))
        } else {
            alert('รหัสสมาชิกไม่ถูกต้อง')
            return false
        }
        for (var a = 0; a <= 50; a++) {
            if (idBook == sessionStorage.getItem('idBook' + a)) {
                $('#book_name').text(sessionStorage.getItem('nameBook' + a))
                $('#borrow_date').text(sessionStorage.getItem('dateBorrow' + a))
                sessionStorage.setItem('returnBook_id', $('#id_book').val())

            }
        }

    }

    nextPage = () => {
        idCustomer = $('#id_customer').val()
        idBook = $('#id_book').val()
        if (idCustomer.length == 0 || idBook.length == 0) {
            alert('กรุณาใส่ข้อมูลให้ครบ')
        } else {
            window.location.href = 'bookreturn-confirm.php'
        }
    }


    $(() => {
        $('#username-show').text(sessionStorage.getItem('username'))
        for (var a = 0; a <= 50; a++) {
            if ((sessionStorage.getItem('idBook' + a) !== null) && (sessionStorage.getItem('nameBook' + a) !== null)) {
                var line = ""
                line += "<tr>"
                line += "<td>" + a + "</td>"
                line += "<td class='text-start' >" + sessionStorage.getItem('idBook' + a) + "</td>"
                line += "<td class='text-start'>" + sessionStorage.getItem('nameBook' + a) + "</td>"
                line += "<td class='text-start'>" + sessionStorage.getItem('dateBorrow' + a) + "</td>"
                line += "<td class='text-start'>" + sessionStorage.getItem('status' + a) + "</td>"
                line += "</td>"
                $('#tbody_history').append(line)
            }
        }

        sessionStorage.setItem('returnBook_id', $('#id_book').val())
    })
</script>


</html>
