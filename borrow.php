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
        <img src="https://i.pinimg.com/736x/8b/08/ed/8b08ed0cb7a60f9372a160fcbacb47b1.jpg" alt="profile" style="width: 80px;
            height: 80px;">
    </nav>

    <!--  -->
    <div class="container text-center my-5 " style='border-radius: 25px;'>

        <p class="fw-bolder fs-1 mb-3">บันทึกการยืมหนังสือ</p>

        <div class="row">
            <div class="col">
                <div class="row left-top box" style="margin-bottom: 50px;padding-bottom: 0px;">
                    <div class="col">
                        <div class="row mt-3">
                            <label for="id_customer" class="col-sm-3 fs-5 my-auto">
                                <b>รหัสสมาชิก:</b>
                            </label>
                            <div class="col">
                                <input type="number" class="form-control id-customer-borrow " id="id_customer" required>
                            </div>
                        </div>
                        <div class="row">
                            <label for="id_book" class="my-auto col-sm-3 fs-5">
                                <b>รหัสหนังสือ:</b>
                            </label>
                            <div class="col">
                                <input type="text" class="form-control id-book-borrow" id="id_book" maxlength="20" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-md-auto mb-3">
                        <button type="button" class="btn fw-bolder" id='search_btn' onclick="borrowRecord()" style="background-color: #086FA1;color: white">บันทึก</button>
                    </div>
                </div>

                <div class="row left-bottom box">
                    <div class="row">
                        <div class="fs-4 text-start fw-bolder ps-5 pt-3 pb-3">
                            ข้อมูลหนังสือ
                        </div>
                        <div class="col-lg my-lg-auto my-0">
                            <div class="row">
                                <label for="id_book_value" class="my-auto col-5 px-0">
                                    <b>รหัสหนังสือ:</b>
                                </label>
                                <div class="col px-0">
                                    <input type="text" class="form-control px-3" id="id_book_value" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <label for="name_book" class="my-auto col-5 px-0">
                                    <b>ชื่อหนังสือ:</b>
                                </label>
                                <div class="col px-0">
                                    <input type="text" class="form-control px-3" id="name_book" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <label for="type_book" class="my-auto col-5 px-0">
                                    <b>ประเภทหนังสือ:</b>
                                </label>
                                <div class="col px-0">
                                    <input type="text" class="form-control px-3" id="type_book" disabled>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg">
                            <div class="row">
                                <label for="pub_book" class="my-auto col-5 px-0">
                                    <b>สำหนังพิมพ์:</b>
                                </label>
                                <div class="col px-0">
                                    <input type="text" class="form-control px-3" id="pub_book" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <label for="book_author" class="my-auto col-5 px-0">
                                    <b>ผู้แต่ง:</b>
                                </label>
                                <div class="col px-0">
                                    <input type="text" class="form-control px-3" id="book_author" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <label for="pub_year" class="my-auto col-5 px-0">
                                    <b>ปีที่พิมพ์:</b>
                                </label>
                                <div class="col px-0">
                                    <input type="text" class="form-control px-3" id="pub_year" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <label for="time_of_pub_book" class="my-auto col-5 px-0">
                                    <b>ครั้งที่พิมพ์:</b>
                                </label>
                                <div class="col px-0">
                                    <input type="text" class="form-control px-3" id="time_of_pub_book" disabled>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="col text-sm-center">
                <div class="row right-top" style="margin-bottom: 50px;">
                    <label for="borrowed_date_dd" class="text-sm-center col-lg-3 col-md-12 fs-5">
                        <b>วันที่ยืม: </b>
                    </label>
                    <div class="col-lg-6">
                        <input type="date" class="form-control" id="borrowed_date_dd" required>
                    </div>
                </div>

                <div class="row right-bottom box ms-3 pb-0">

                    <table class="table table-bordered border-dark my-4 bg-light mx-auto" style="width: 90%;">
                        <thead>
                            <tr>
                                <th>รหัสหนังสือ</th>
                                <th>ชื่อหนังสือ</th>
                            </tr>
                        </thead>
                        <tbody id="tbody-book">
                        </tbody>
                    </table>


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
                            <button class="btn btn-success me-md-2 footer_btn fs-5" type="button" id="ok_btn_borrow" onclick="ok_btn_borrow()">ยืนยัน</button>
                </div>
            </div>
        </div>
    </footer>



</body>

<script>

</script>

</html>