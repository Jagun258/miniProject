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


<body class='bg-info bg-opacity-10 h-100'>

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

    <!-- -->
    <div class="container text-center my-5 " style='border-radius: 25px;'>
        <p class="fw-bolder fs-1">รายการการยืมหนังสือ</p>
        <div class="row right-bottom box pb-0 mb-4">
            <table class="table table-bordered border-dark my-4 bg-light mx-auto" style="width: 90%;">
                <thead>
                    <tr>
                        <th>ลำดับ</th>
                        <th>รหัสหนังสือ</th>
                        <th>ชื่อหนังสือ</th>
                    </tr>
                </thead>
                <tbody id="tbody-book-record">
                </tbody>
            </table>

        </div>
        <!--  -->
        <div class="row mx-auto fs-1 p-4">
            <div class="justify-content-md-end">
                <button class="btn btn-danger footer_btn fs-5" type="button" id="cancel_btn" onclick="clear_borrow()">
                    ยกเลิก</button>
                <button class="btn btn-success me-md-2 footer_btn fs-5" type="button" id="ok_btn" onclick="window.location.href='borrow-save.php'">ยืม</button>
            </div>
        </div>
    </div>
    <!-- --------------------- -->

    <footer class='mt-auto' style="display: block;">
        <div class="bg-info bg-opacity-50 text-center " style="border-radius: 20px 20px 0px 0px; box-shadow: 11px -1px 14px 4px rgba(0, 0, 0, 0.25);
            height: 100px;">
        </div>
    </footer>



</body>

<script>
    $(() => {
        for (var a = 0; a <= 50; a++) {
            if ((sessionStorage.getItem('idBook' + a) !== null) && (sessionStorage.getItem('nameBook' + a) !== null)) {
                var line = ""
                line += "<tr>"
                line += "<td>" + a + "</td>"
                line += "<td class='text-start' >" + sessionStorage.getItem('idBook' + a) + "</td>"
                line += "<td class='text-start'>" + sessionStorage.getItem('nameBook' + a) + "</td>"
                line += "</td>"
                $('#tbody-book-record').append(line)
            }
        }
    })
</script>

</html>