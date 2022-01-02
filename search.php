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
    <script src="script.js"></script>
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

    .new {
        width: 250px;
        height: 300px;
        margin: auto;
        cursor: pointer;
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
        <img src="https://i.pinimg.com/736x/8b/08/ed/8b08ed0cb7a60f9372a160fcbacb47b1.jpg" alt="profile" style="width: 80px;
            height: 80px;">
    </nav>

    <!-- -->
    <div class="container text-center my-5 " style='border-radius: 25px;'>
        <h1><b>ค้นหาหนังสือภายในห้องสมุด</b></h1><br />
        <div class="container">
            <div class="row">
                <div class="col-7 bg0 ">
                    <form action="">
                        <div class="mb row">
                            <label for="keyword_search" class="col-sm-3 col-form-label">
                                <b>ข้อมูลที่ต้องการค้นหา :</b>
                            </label>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="keyword_search" placeholder="Keyword"
                                    maxlength="20" onchange="checkKeyword()" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb row">
                                    <label for="search_form_dd" class="col-sm-4 col-form-label">
                                        <b>ค้นหาจาก :</b>
                                    </label>
                                    <div class="col-sm">
                                        <select class="form-select dropdown-toggle" id="search_form_dd" required>
                                            <option value="-">เลือก</option>
                                            <option id="search_form_title_btn" value="ชื่อหนังสือ">ชื่อหนังสือ
                                            </option>
                                            <option id="search_form_author_btn" value="ชื่อผู้แต่ง">ชื่อผู้แต่ง
                                            </option>
                                            <option id="search_form_publisher_btn" value="สำนักพิมพ์">สำนักพิมพ์
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-5 edge">
                                <label for="search_form_radiobtn" class="col-sm-4 col-form-label">
                                    <b>ประเภทหนังสือ:</b>
                                </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type_book"
                                        id="search_type_journal_radiobtn" value="journal">
                                    <label class="form-check-label" for="search_type_journal_radiobtn">
                                        ดรรชนีวารสาร
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type_book"
                                        id="search_type_book_radiobtn" value="book">
                                    <label class="form-check-label" for="search_type_book_radiobtn">
                                        หนังสือ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type_book"
                                        id="search_type_chilbook_radiobtn" value="chilbook">
                                    <label class="form-check-label" for="search_type_chilbook_radiobtn">
                                        หนังสือวันเด็กแห่งชาติ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="type_book"
                                        id="search_type_rare_book_radiobtn" value="rarebook">
                                    <label class="form-check-label" for="search_type_rare_book_radiobtn">
                                        หนังสือหายาก
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-primary" type="button" id="search_btn" data-bs-toggle="modal"
                                        data-bs-target="#search-book" onclick="saveValue()">ค้นหา</button>
                                    <div class="modal fade" id="search-book" tabindex="-1" aria-labelledby="search-book"
                                        Label" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">ค้นหาหนังสือ</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col fs-6">ข้อมูลที่ค้นหา :
                                                            <span id='keyword-value' class='text-nowrap'>keyword</span>
                                                        </div>
                                                        <div class="col fs-6">ค้นหาจาก :
                                                            <span id='search-from-value' class='text-nowrap'>search
                                                                from</span>
                                                        </div>
                                                        <div class="col fs-6">ประเภทหนังสือ :
                                                            <span id='type-book-value' class='text-nowrap'></span>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="fs-4 fw-bolder">
                                                        <div class="row" id="area-book"></div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </form>
                </div>
                <!--  -->
                <!--  -->
                <div class="col-4 ms-5 bg1 carousel slide">
                    <div id="carouselExampleControls" class="carousel" data-bs-touch="false" data-bs-interval="false">
                        <div class="carousel-inner ">
                            <div class="carousel-item active ">
                                <img src="https://images-se-ed.com/ws/Storage/Originals/978616/810/9786168109151L.jpg?h=bb4b14e93f5d27dcb4bc011db6327b50"
                                    class="d-block new" alt="life_good" data-bs-toggle="modal"
                                    data-bs-target="#first-book">
                                <div class="modal fade" id="first-book" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">ชีวิตดีเมื่อมีของน้อย
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="https://images-se-ed.com/ws/Storage/Originals/978616/810/9786168109151L.jpg?h=bb4b14e93f5d27dcb4bc011db6327b50"
                                                    class="d-block new w-100 h-100" alt="life_good"
                                                    style="cursor: default;">
                                            </div>
                                            <div class="modal-footer">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <img src="https://images-se-ed.com/ws/Storage/Originals/978616/083/9786160833979L.jpg?h=fbe3d12f62cbc6072361b4852981dee3"
                                    class="d-block new" alt="python" data-bs-toggle="modal"
                                    data-bs-target="#secondary-book">
                                <div class="modal fade" id="secondary-book" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">การเขียนโปรแกรมด้วย
                                                    Python
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="https://images-se-ed.com/ws/Storage/Originals/978616/083/9786160833979L.jpg?h=fbe3d12f62cbc6072361b4852981dee3"
                                                    class="d-block new w-100 h-100" alt="life_good"
                                                    style="cursor: default;">
                                            </div>
                                            <div class="modal-footer">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://storage.naiin.com/system/application/bookstore/resource/product/201806/237375/1000208592_front_XXL.jpg?imgname=Blockchain-Technology-%E0%B8%96%E0%B8%99%E0%B8%99%E0%B8%AA%E0%B8%B2%E0%B8%A2%E0%B9%83%E0%B8%AB%E0%B8%A1%E0%B9%88%E0%B9%80%E0%B8%8A%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%A1%E0%B9%82%E0%B8%A5%E0%B8%81%E0%B8%94%E0%B8%B4%E0%B8%88%E0%B8%B4%E0%B8%97%E0%B8%B1%E0%B8%A5%E0%B9%84%E0%B8%A3%E0%B9%89%E0%B8%9E%E0%B8%A3%E0%B8%A1%E0%B9%81%E0%B8%94%E0%B8%99"
                                    class="d-block new" alt="blockchain" data-bs-toggle="modal"
                                    data-bs-target="#last-book">
                                <div class="modal fade" id="last-book" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Blockchain Technology
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="https://storage.naiin.com/system/application/bookstore/resource/product/201806/237375/1000208592_front_XXL.jpg?imgname=Blockchain-Technology-%E0%B8%96%E0%B8%99%E0%B8%99%E0%B8%AA%E0%B8%B2%E0%B8%A2%E0%B9%83%E0%B8%AB%E0%B8%A1%E0%B9%88%E0%B9%80%E0%B8%8A%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%A1%E0%B9%82%E0%B8%A5%E0%B8%81%E0%B8%94%E0%B8%B4%E0%B8%88%E0%B8%B4%E0%B8%97%E0%B8%B1%E0%B8%A5%E0%B9%84%E0%B8%A3%E0%B9%89%E0%B8%9E%E0%B8%A3%E0%B8%A1%E0%B9%81%E0%B8%94%E0%B8%99"
                                                    class="d-block new w-75 h-75" alt="life_good"
                                                    style="cursor: default;">
                                            </div>
                                            <div class="modal-footer">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
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
                    <button class="btn btn-dark footer_btn fs-5" type="button" id="back_btn"
                        onclick="window.location.href='menu.php'">
                        << Back</button>
                            <button class="btn btn-success me-md-2 footer_btn fs-5" type="button" id="ok_btn"
                                onclick="window.location.href='borrow.php'">ยืม</button>
                </div>
            </div>
        </div>
    </footer>

</body>

<script>

    saveValue = () => {
        var checked_val=$('input[name=type_book]:checked').val()
        $('#keyword-value').text($('#keyword_search').val())
        $('#search-from-value').text($('#search_form_dd').val())
        $('#type-book-value').text($('input[name=type_book]:checked').val())
        $('#area-book').empty()
        if(checked_val===undefined){
            switch ($('#search_form_dd').val()) {
                case "ชื่อหนังสือ":
                    $.each(data_book, (item, value) => {
                        var result = data_book[item]["title"].includes($('#keyword_search').val())
                        if (result) {
                            var line = ""
                            line += "<div class='col-3 mb-3'>"
                            line += "<div class='card' id='daCard'>"
                            line += "<img class='card-img-top' src=" + "'" + data_book[item]["img"] + "'"
                            line += " alt=" + "'" + data_book[item]['id'] + "'" + " >"
                            line += "<div class='card-body'>"
                            line += '<h5 class="card-title">' + data_book[item]['title'] + '</h5>'
                            line += '<p class="card-text fs-6">' + 'ID : ' + data_book[item]['id'] + '</p>'
                            line += '<p class="card-text fs-6">' + 'Author : ' + data_book[item]['author'] + '</p>'
                            line += '<p class="card-text fs-6">' + 'Publisher : ' + data_book[item]['publisher'] + '</p>'
                            line += "</div>"
                            line += "</div>"
                            line += "</div>"
                            $('#area-book').append(line)
                        }
                    })
                    if (document.getElementById('daCard') === null) {
                        $('#area-book').append('<div class="text-center fs-4 fw-bolder">ไม่พบหนังสือที่ค้นหา</div>')
                    }
                    break
                case "ชื่อผู้แต่ง":
                    $.each(data_book, (item, value) => {
                        var result = data_book[item]["author"].includes($('#keyword_search').val())
                        if (result) {
                            var line = ""
                            line += "<div class='col-3 mb-3'>"
                            line += "<div class='card' id='daCard'>"
                            line += "<img class='card-img-top' src=" + "'" + data_book[item]["img"] + "'"
                            line += " alt=" + "'" + data_book[item]['id'] + "'" + " >"
                            line += "<div class='card-body'>"
                            line += '<h5 class="card-title">' + data_book[item]['title'] + '</h5>'
                            line += '<p class="card-text fs-6">' + 'ID : ' + data_book[item]['id'] + '</p>'
                            line += '<p class="card-text fs-6">' + 'Author : ' + data_book[item]['author'] + '</p>'
                            line += '<p class="card-text fs-6">' + 'Publisher : ' + data_book[item]['publisher'] + '</p>'
                            line += "</div>"
                            line += "</div>"
                            line += "</div>"
                            $('#area-book').append(line)
                        }
                    })
                    if (document.getElementById('daCard') === null) {
                        $('#area-book').append('<div class="text-center fs-4 fw-bolder">ไม่พบหนังสือที่ค้นหา</div>')
                    }
                    break
                case "สำนักพิมพ์":
                    $.each(data_book, (item, value) => {
                        var result = data_book[item]["publisher"].includes($('#keyword_search').val())
                        if (result) {
                            var line = ""
                            line += "<div class='col-3 mb-3'>"
                            line += "<div class='card' id='daCard'>"
                            line += "<img class='card-img-top' src=" + "'" + data_book[item]["img"] + "'"
                            line += " alt=" + "'" + data_book[item]['id'] + "'" + " >"
                            line += "<div class='card-body'>"
                            line += '<h5 class="card-title">' + data_book[item]['title'] + '</h5>'
                            line += '<p class="card-text fs-6">' + 'ID : ' + data_book[item]['id'] + '</p>'
                            line += '<p class="card-text fs-6">' + 'Author : ' + data_book[item]['author'] + '</p>'
                            line += '<p class="card-text fs-6">' + 'Publisher : ' + data_book[item]['publisher'] + '</p>'
                            line += "</div>"
                            line += "</div>"
                            line += "</div>"
                            $('#area-book').append(line)
                        }
                    })
                    if (document.getElementById('daCard') === null) {
                        $('#area-book').append('<div class="text-center fs-4 fw-bolder">ไม่พบหนังสือที่ค้นหา</div>')
                    }
                    break
                case "-":
                    if (($('#keyword_search').val()).length == 0) {
                        loadBook()
                    } else {
                        $.each(data_book, (item, value) => {
                            var result_title = data_book[item]["title"].includes($('#keyword_search').val())
                            var result_author = data_book[item]["author"].includes($('#keyword_search').val())
                            var result_publisher = data_book[item]["publisher"].includes($('#keyword_search').val())
                            if (result_title || result_author || result_publisher) {
                                var line = ""
                                line += "<div class='col-3 mb-3'>"
                                line += "<div class='card' id='daCard'>"
                                line += "<img class='card-img-top' src=" + "'" + data_book[item]["img"] + "'"
                                line += " alt=" + "'" + data_book[item]['id'] + "'" + " >"
                                line += "<div class='card-body'>"
                                line += '<h5 class="card-title">' + data_book[item]['title'] + '</h5>'
                                line += '<p class="card-text fs-6">' + 'ID : ' + data_book[item]['id'] + '</p>'
                                line += '<p class="card-text fs-6">' + 'Author : ' + data_book[item]['author'] + '</p>'
                                line += '<p class="card-text fs-6">' + 'Publisher : ' + data_book[item]['publisher'] + '</p>'
                                line += "</div>"
                                line += "</div>"
                                line += "</div>"
                                $('#area-book').append(line)
                            }
                        })
                    }
    
            }
        }else{
            switch ($('#search_form_dd').val()) {
                case "ชื่อหนังสือ":
                    $.each(data_book, (item, value) => {
                        var result = data_book[item]["title"].includes($('#keyword_search').val())
                        var result_type = data_book[item]["type"].includes(checked_val)
                        if (result&&result_type) {
                            var line = ""
                            line += "<div class='col-3 mb-3'>"
                            line += "<div class='card' id='daCard'>"
                            line += "<img class='card-img-top' src=" + "'" + data_book[item]["img"] + "'"
                            line += " alt=" + "'" + data_book[item]['id'] + "'" + " >"
                            line += "<div class='card-body'>"
                            line += '<h5 class="card-title">' + data_book[item]['title'] + '</h5>'
                            line += '<p class="card-text fs-6">' + 'ID : ' + data_book[item]['id'] + '</p>'
                            line += '<p class="card-text fs-6">' + 'Author : ' + data_book[item]['author'] + '</p>'
                            line += '<p class="card-text fs-6">' + 'Publisher : ' + data_book[item]['publisher'] + '</p>'
                            line += "</div>"
                            line += "</div>"
                            line += "</div>"
                            $('#area-book').append(line)
                        }
                    })
                    if (document.getElementById('daCard') === null) {
                        $('#area-book').append('<div class="text-center fs-4 fw-bolder">ไม่พบหนังสือที่ค้นหา</div>')
                    }
                    break
                case "ชื่อผู้แต่ง":
                $.each(data_book, (item, value) => {
                        var result = data_book[item]["author"].includes($('#keyword_search').val())
                        var result_type = data_book[item]["type"].includes(checked_val)
                        if (result&&result_type) {
                            var line = ""
                            line += "<div class='col-3 mb-3'>"
                            line += "<div class='card' id='daCard'>"
                            line += "<img class='card-img-top' src=" + "'" + data_book[item]["img"] + "'"
                            line += " alt=" + "'" + data_book[item]['id'] + "'" + " >"
                            line += "<div class='card-body'>"
                            line += '<h5 class="card-title">' + data_book[item]['title'] + '</h5>'
                            line += '<p class="card-text fs-6">' + 'ID : ' + data_book[item]['id'] + '</p>'
                            line += '<p class="card-text fs-6">' + 'Author : ' + data_book[item]['author'] + '</p>'
                            line += '<p class="card-text fs-6">' + 'Publisher : ' + data_book[item]['publisher'] + '</p>'
                            line += "</div>"
                            line += "</div>"
                            line += "</div>"
                            $('#area-book').append(line)
                        }
                    })
                    if (document.getElementById('daCard') === null) {
                        $('#area-book').append('<div class="text-center fs-4 fw-bolder">ไม่พบหนังสือที่ค้นหา</div>')
                    }
                    break
                case "สำนักพิมพ์":
                $.each(data_book, (item, value) => {
                        var result = data_book[item]["publisher"].includes($('#keyword_search').val())
                        var result_type = data_book[item]["type"].includes(checked_val)
                        if (result&&result_type) {
                            var line = ""
                            line += "<div class='col-3 mb-3'>"
                            line += "<div class='card' id='daCard'>"
                            line += "<img class='card-img-top' src=" + "'" + data_book[item]["img"] + "'"
                            line += " alt=" + "'" + data_book[item]['id'] + "'" + " >"
                            line += "<div class='card-body'>"
                            line += '<h5 class="card-title">' + data_book[item]['title'] + '</h5>'
                            line += '<p class="card-text fs-6">' + 'ID : ' + data_book[item]['id'] + '</p>'
                            line += '<p class="card-text fs-6">' + 'Author : ' + data_book[item]['author'] + '</p>'
                            line += '<p class="card-text fs-6">' + 'Publisher : ' + data_book[item]['publisher'] + '</p>'
                            line += "</div>"
                            line += "</div>"
                            line += "</div>"
                            $('#area-book').append(line)
                        }
                    })
                    if (document.getElementById('daCard') === null) {
                        $('#area-book').append('<div class="text-center fs-4 fw-bolder">ไม่พบหนังสือที่ค้นหา</div>')
                    }
                    break
                case "-":
                    if (($('#keyword_search').val()).length == 0) {
                        loadBook()
                    } else {
                        $.each(data_book, (item, value) => {
                            var result_title = data_book[item]["title"].includes($('#keyword_search').val())
                            var result_author = data_book[item]["author"].includes($('#keyword_search').val())
                            var result_publisher = data_book[item]["publisher"].includes($('#keyword_search').val())
                            if (result_title || result_author || result_publisher) {
                                var line = ""
                                line += "<div class='col-3 mb-3'>"
                                line += "<div class='card' id='daCard'>"
                                line += "<img class='card-img-top' src=" + "'" + data_book[item]["img"] + "'"
                                line += " alt=" + "'" + data_book[item]['id'] + "'" + " >"
                                line += "<div class='card-body'>"
                                line += '<h5 class="card-title">' + data_book[item]['title'] + '</h5>'
                                line += '<p class="card-text fs-6">' + 'ID : ' + data_book[item]['id'] + '</p>'
                                line += '<p class="card-text fs-6">' + 'Author : ' + data_book[item]['author'] + '</p>'
                                line += '<p class="card-text fs-6">' + 'Publisher : ' + data_book[item]['publisher'] + '</p>'
                                line += "</div>"
                                line += "</div>"
                                line += "</div>"
                                $('#area-book').append(line)
                            }
                        })
                    }
    
            }
        }
    }

    loadBook = () => {
        $('#area-book').empty()
        $.each(data_book, (item, value) => {
            var line = ""
            line += "<div class='col-3 mb-3'>"
            line += "<div class='card'>"
            line += "<img class='card-img-top' src=" + "'" + data_book[item]["img"] + "'"
            line += " alt=" + "'" + data_book[item]['id'] + "'" + " >"
            line += "<div class='card-body'>"
            line += '<h5 class="card-title fw-bolder">' + data_book[item]['title'] + '</h5>'
            line += '<p class="card-text fs-6">' + 'ID : ' + data_book[item]['id'] + '</p>'
            line += '<p class="card-text fs-6">' + 'Author : ' + data_book[item]['author'] + '</p>'
            line += '<p class="card-text fs-6">' + 'Publisher : ' + data_book[item]['publisher'] + '</p>'
            line += "</div>"
            line += "</div>"
            line += "</div>"
            $('#area-book').append(line)
            // $('#area-book').empty()
        })
    }

    $(() => {

    })


</script>

</html>