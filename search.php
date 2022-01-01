<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <title>WUBOOK</title>
</head>

<style>

    .bg0 {
        background-color: #D7E8FF;
        border: 1px solid #8B86BB;
        padding-top: 20px;
        box-sizing: border-box;
        box-shadow: 5px 7px 8px -1px rgba(8, 0, 0, 0.25);
        border-radius: 20px;
    }

    .bg1 {
        background-color: #b8d0f1;
        border: 1px solid #8B86BB;
        padding-top: 20px;
        padding-bottom: 20px;
        box-sizing: border-box;
        box-shadow: 5px 7px 8px -1px rgba(8, 0, 0, 0.25);
        border-radius: 20px;
    }

    .edge {
        background-color: #D7E8FF;
        border: 1px solid #000000;
        box-sizing: border-box;
        border-radius: 20px;
    }
</style>

<body class='bg-info bg-opacity-10'>

    <nav class="navbar navbar-light bg-info bg-opacity-50 px-5"
        style="border-radius: 0px 0px 20px 20px; box-shadow: 5px 7px 8px -1px rgba(0, 0, 0, 0.25);">
        <a class="navbar-brand fs-3 fw-bolder" href="#">
            <img src="https://i.pinimg.com/originals/8c/1b/1a/8c1b1aeaa47f60548eb0e5c3ddf4ff17.png" alt="logo"
                width="60" height="70">
            <span class='align-middle'>
                WU BOOK
            </span>
        </a>
    </nav>

    <!-- แก้ไขตรงนี้ -->
    <div class="container text-center my-5 " style='border-radius: 25px;'>
        <h1><b>ค้นหาหนังสือภายในห้องสมุด</b></h1><br />
        <div class="container">
            <div class="row">
                <div class="col-8 bg0 ">
                    <form action="">
                        <div class="mb row">
                            <label for="keyword_search" class="col-sm-3 col-form-label">
                                <b>ข้อมูลที่ต้องการค้นหา :</b>
                            </label>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="keyword_search" placeholder="Keyword"
                                    required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb row">
                                    <label for="search_form_dd" class="col-sm-4 col-form-label">
                                        <b>ค้นหาจาก :</b>
                                    </label>
                                    <div class="col-sm">
                                        <select class="form-control" id="search_form_dd" required>
                                            <option value="" selected>เลือก</option>
                                            <option value="search_form_title_btn">ชื่อหนังสือ</option>
                                            <option value="search_form_author_btn">ชื่อผู้แต่ง</option>
                                            <option value="search_form_type_btn">ประเภทหนังสือ</option>
                                            <option value="search_form_publisher_btn">สำนักพิมพ์</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-5 edge">
                                <label for="search_form_dd" class="col-sm-4 col-form-label">
                                    <b>ประเภทหนังสือ :</b>
                                </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type_book"
                                        id="search_type_journal_radiobtn">
                                    <label class="form-check-label" for="search_type_journal_radiobtn">
                                        ดรรชนีวารสาร
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type_book"
                                        id="search_type_book_radiobtn">
                                    <label class="form-check-label" for="search_type_book_radiobtn">
                                        หนังสือ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type_book"
                                        id="search_type_chilbook_radiobtn">
                                    <label class="form-check-label" for="search_type_chilbook_radiobtn">
                                        หนังสือวันเด็กแห่งชาติ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type_book"
                                        id="search_type_rare_book_radiobtn">
                                    <label class="form-check-label" for="search_type_rare_book_radiobtn">
                                        หนังสือหายาก
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-primary" type="button" id="search_btn">ค้นหา</button>
                                </div>
                            </div>
                        </div>



                    </form>
                </div>
                <div class="col-4 bg1">
                    <h3><b>หนังสือมาใหม่</b></h3>
                    <a class="navbar-brand fs-3 fw-bolder" href="#">
                        <img src="https://images-se-ed.com/ws/Storage/Originals/978616/810/9786168109151L.jpg?h=bb4b14e93f5d27dcb4bc011db6327b50"
                            alt="book" width="210" height="320">
                        <span class='align-middle'>
                        </span>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <!-- --------------------- -->

    <footer>
        <div class="bg-info bg-opacity-50 text-center" style="border-radius: 20px 20px 0px 0px; box-shadow: 11px -1px 14px 4px rgba(0, 0, 0, 0.25);
            height: 100px;">
            <div class="fs-1 p-4">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-success me-md-2" type="button" id="ok_btn">OK</button>
                    <button class="btn btn-dark" type="button" id="back_btn" onclick="window.location.href='menu.php'">Back</button>
                  </div>
            </div>
        </div>
    </footer>


</body>

<script>

</script>

</html>
