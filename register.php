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

    .btn {
        margin: 20px 0px;
        border-radius: 188px;
        color: black;
    }

    .btn:active {
        box-shadow: inset 0px 7px 0px rgba(0, 0, 0, 0.25);
    }


    a {
        text-decoration: none;
        color: black;
    }
    a:hover {
        color: black;
    }
</style>

<body>

    <nav class="navbar navbar-light bg-info bg-opacity-50"
        style="border-radius: 0px 0px 20px 20px; box-shadow: 5px 7px 8px -1px rgba(0, 0, 0, 0.25);">
        <div class="container px-0">
            <span>
                <img src="https://i.pinimg.com/originals/8c/1b/1a/8c1b1aeaa47f60548eb0e5c3ddf4ff17.png" alt="logo"
                    width="60" height="70">
                <span class='fs-3 align-middle rounded-bottom fw-bolder'>WU BOOK</span>
            </span>
        </div>
    </nav>

    <div class="container bg-info bg-opacity-25 text-center my-5 " style='border-radius: 25px;'>

        <form action="index.php" novalidate>
            <div class="row">
                <div class="fs-2 text-start fw-bolder ps-5 pt-3">
                    สมัครสมาชิก
                </div>
            </div>

            <div class="row">
                <label for="username_customer" class="form-label col-4 text-end mb-0 fs-5 pt-1">Username *</label>
                <div class="col">
                    <input type="text" class="form-control ms-5" id="username_customer"
                        onchange="check_now('username_customer')" maxlength="20" required>
                    <div class='text-danger warning text-start ps-5' id='username_customer_warning'>
                        *กรุณาระบุ Username 6-20 ตัวษร (a-z, 0-9)
                    </div>
                </div>
                <div class="col-4"></div>
            </div>

            <div class="row">
                <label for="password_customer" class="form-label col-4 text-end mb-0 fs-5 pt-1">Password *</label>
                <div class="col">
                    <input type="password" class="form-control ms-5" id="password_customer" onchange="check_password()"
                        maxlength="100" required>
                    <div class='text-danger warning text-start ps-5' id='password_customer_warning'>
                        *กรุณาระบุ Password
                    </div>
                </div>
                <div class="col-4"></div>
            </div>

            <div class="row">
                <label for="cf_password_customer" class="form-label col-4 text-end mb-0 fs-5 pt-1">Confirm password
                    *</label>
                <div class="col">
                    <input type="password" class="form-control ms-5" id="cf_password_customer"
                        onchange="check_password()" maxlength="100" required>
                    <div class='text-danger warning text-start ps-5' id='cf_password_customer_warning'>
                        *กรุณาระบุ Password
                    </div>
                    <div class='text-danger warning text-start ps-5' id='notmatch'>
                        Password ไม่ตรงกัน
                    </div>
                </div>
                <div class="col-4"></div>
            </div>

            <input type="submit" class="btn btn-success fw-bolder" style='color:white' id='submit'
                value='ยืนยันการสมัคร'>
            <button type="cancel" class="btn btn-danger" id='cancel'><a href="index.php" class='fw-bolder'
                    style="color:white">ยกเลิกการสมัคร</a></button>
        </form>
    </div>

    <footer>
        <div class="bg-info bg-opacity-50" style="border-radius: 20px 20px 0px 0px; box-shadow: 11px -1px 14px 4px rgba(0, 0, 0, 0.25);
            height: 140px;">
            >
        </div>
    </footer>


</body>

<script>
    check_password = () => {
        var pass = $('#password_customer').val()
        var cfpass = $('#cf_password_customer').val()
        if(cfpass.length!=0){
            if(pass!=cfpass){
                $('#notmatch').show()
            }
            else{
                $('#notmatch').hide()
            }
        }else{
            if(pass.length==0){
                $('#password_customer_warning').show()
            }else{
                $('#password_customer_warning').show()
            }
        }
    }
    check_now = (thisId) => {
        if (((($('#' + thisId).val()).length) == 0) || (($('#' + thisId).val()).length) < 6) {

            $('#' + thisId + '_warning').show();
            $('#' + thisId).attr('class', 'form-control ms-5 border-danger');

        } if (!($('#' + thisId).val()).match(/^[A-Za-z0-9]+$/)) {
            $('#' + thisId + '_warning').show();
            $('#' + thisId).attr('class', 'form-control ms-5 border-danger');
        } else {
            $('#' + thisId + '_warning').hide();
            $('#' + thisId).attr('class', 'form-control ms-5 border-success');
        }
    }
    $(() => {
        // $('#submit').prop('disabled', true);
        // $('#submit').prop('disabled', false);
        $('.warning').hide();
        $('#submit').prop('disabled', true);
    })
</script>

</html>
