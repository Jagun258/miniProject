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

    <title>WUBOOK</title>
</head>

<style>
    * {
        font-family: 'Kanit', sans-serif;
    }

    .row {
        padding-bottom: 15px;
    }

    .login_area {
        width: 844px;
        height: 430px;
        background-color: #D7E8FF;
        border: solid black 1px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 63px;
        margin-bottom: 63px;
        border-radius: 50px;
    }

    input[type=submit] {
        width: 226px;
        height: 60px;
        font-size: 36px;
        border-radius: 25px;
        text-align: center;
        margin-left: 55px;
        margin-top: 59px;
        background-color: white;
        color: black;
        border: solid black 3px
    }

    button[type=register] {
        width: 226px;
        height: 60px;
        font-size: 36px;
        border-radius: 25px;
        text-align: center;
        margin-left: 55px;
        margin-top: 59px;
        background-color: white;
        color: black;
        border: solid black 3px
    }

    .button1 {
        background-color: white;
        color: black;
    }

    .button1:hover {
        background-color: #B9BEE2;
        color: black;
    }

    .button1:active {
        color: white;
        background-color: #2F3985;
        box-shadow: inset 0px 10px 0px rgba(0, 0, 0, 0.25);
    }

    a {
        text-decoration: none;
        color: black;
    }

    a:hover {
        color: black;
    }
    a:active {
        color: white;
    }

</style>

<body class='bg-info bg-opacity-10'>

    <nav class="navbar navbar-light bg-info bg-opacity-50"
        style="border-radius: 0px 0px 20px 20px; box-shadow: 5px 7px 8px -1px rgba(0, 0, 0, 0.25);">
        <div class="container px-0">
            <span>
                <img src="https://i.pinimg.com/originals/8c/1b/1a/8c1b1aeaa47f60548eb0e5c3ddf4ff17.png" alt="logo"
                    width="60" height="70">
                <span class='fs-3 align-middle rounded-bottom'>WU BOOK</span>
            </span>
        </div>
    </nav>

    <!-- แก้ไขตรงนี้ -->
    <div class="container">
        <div class="login_area">
            <div class='fs-1 fw-bolder' style="margin-left: 41px;margin-top: 22px;">Login</div>
            <form action="" style="margin-left:85px; margin-right: 111px;">
                <div class="form-group">
                    <label for="username_customer"></label>
                    <input type="text" class="form-control text-center border-dark fs-2" id="username_customer" placeholder="Username:">
                </div>
                <div class="form-group">
                    <label for="username_customer"></label>
                    <input type="password" class="form-control text-center border-dark fs-2" id="password_customer" placeholder="Password:">
                </div>
                <div class="row ">
                    <div class="col-md-6">
                        <button type="register"  class="button1 fs-4" id="register_btn"><a
                                href="hw_minipro_register.html" >สมัครสมาชิก</a></button>
                    </div>
                    <div class="col-md-6">
                        <input type="submit" value="Login" class="button1 fs-4" id="login_btn" onClick="check()" />
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- --------------------- -->


</body>

<script>
    function check() {
        var user = document.getElementById('username_customer').value;
        var password = document.getElementById('password_customer').value;
        if (user == "") {
            alert("กรุณากรอกข้อมูลในช่องUsername");
            document.getElementById('username_customer').value = "";
        }
        else if (!user.match(/^([a-z0-9])+$/i)) {
            alert("กรอกได้เฉพาะตัวเลขและตัวอักษรภาษาอังกฤษเท่านั้น");
            document.getElementById('username_customer').value = "";
        }
        if (password == "") {
            alert("กรุณากรอกข้อมูลในช่อง Password");
            document.getElementById('password_customer').value = "";
        }
    }



</script>

</html>
