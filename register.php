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
    .btn {
        margin: 20px 0px;
        border-radius: 188px;
        color: black;
    }

    .btn:active {
        box-shadow: inset 0px 7px 0px rgba(0, 0, 0, 0.25);
    }

    textarea {
        resize: none;
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

    <div class="container bg-info bg-opacity-25 text-center my-5" style='border-radius: 25px;'>

        <form action="index.php" method="post">
            <div class="row">
                <div class="fs-2 text-start fw-bolder  pt-3">
                    ?????????????????????????????????
                </div>
            </div>

            <div class="row">
                <label for="id_customer" class="form-label col-4 text-end mb-0 fs-5 pt-1">ID *</label>
                <div class="col">
                    <input type="number" class="form-control " id="id_customer" placeholder="0123456"
                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        onchange="check_now('id_customer')" maxlength="20" maxlength="20" required>
                    <div class='text-danger warning text-start ' id='id_customer_warning'>
                        *??????????????????????????? ID ?????????????????? 20 ?????????????????? (0-9)
                    </div>
                </div>
                <div class="col-lg-4 col-sm-2"></div>
            </div>

            <div class="row">
                <label for="username_customer" class="form-label col-4 text-end mb-0 fs-5 pt-1">Username *</label>
                <div class="col">
                    <input type="text" class="form-control " id="username_customer" placeholder="example123"
                        onchange="check_username()" maxlength="20" required>
                    <div class='text-danger warning text-start' id='username_customer_warning'>
                        *??????????????????????????? Username 6-20 ???????????????????????? (a-z, 0-9)
                    </div>
                </div>
                <div class="col-lg-4 col-sm-2"></div>
            </div>

            <div class="row">
                <label for="password_customer" class="form-label col-4 text-end mb-0 fs-5 pt-1">Password *</label>
                <div class="col">
                    <input type="password" class="form-control" id="password_customer" onchange="check_password()"
                        maxlength="20" required>
                    <div class='text-danger warning text-start ' id='password_customer_warning'>
                        *??????????????????????????? Password (a-z, 0-9, ?????????????????????????????????????????????) ????????????????????? 20 ????????????????????????
                    </div>
                </div>
                <div class="col-lg-4 col-sm-2"></div>
            </div>

            <div class="row">
                <label for="cf_password_customer" class="form-label col-4 text-end mb-0 fs-5 pt-1">Confirm password
                    *</label>
                <div class="col">
                    <input type="password" class="form-control" id="cf_password_customer" onchange="check_password()"
                        maxLength="20" required>
                    <div class='text-danger warning text-start ' id='cf_password_customer_warning'>
                        *??????????????????????????? Confirm Password
                    </div>
                    <div class='text-danger warning text-start ' id='notmatch'>
                        *Password ???????????????????????????
                    </div>
                </div>
                <div class="col-lg-4 col-sm-2"></div>
            </div>
            <div class="row">
                <label for="email_customer" class="form-label col-4 text-end mb-0 fs-5 pt-1">Email
                    *</label>
                <div class="col">
                    <input type="email" class="form-control" id="email_customer" onchange="check_email()"
                        placeholder="example123@gmail.com" maxlength="100" required>
                    <div class='text-danger warning text-start ' id='email_customer_warning'>
                        *??????????????????????????? Email
                    </div>
                    <div class='text-danger warning text-start ' id='email_not_correct'>
                        *Email ??????????????????????????????
                    </div>
                </div>
                <div class="col-lg-4 col-sm-2"></div>
            </div>

            <div class="row">
                <label for="name_customer" class="form-label col-4 text-end mb-0 fs-5 pt-1">????????????-?????????????????????
                    *</label>
                <div class="col">
                    <input type="text" class="form-control" id="name_customer" onchange="check_name()" maxlength="100"
                        placeholder="Firstname Lastname" required>
                    <div class='text-danger warning text-start ' id='name_customer_warning'>
                        *???????????????????????????????????????-?????????????????????
                    </div>
                </div>
                <div class="col-lg-4 col-sm-2"></div>
            </div>

            <div class="row">
                <label for="phone_customer" class="form-label col-4 text-end mb-0 fs-5 pt-1">????????????????????????
                    *</label>
                <div class="col">
                    <input type="tel" class="form-control" id="phone_customer" onchange="check_phone()" maxlength="10"
                        placeholder="0123456789" required>
                    <div class='text-danger warning text-start ' id='phone_customer_warning'>
                        *??????????????????????????????????????????????????????????????????
                    </div>
                    <div class='text-danger warning text-start ' id='phone_customer_not_correct'>
                        *?????????????????????????????????????????????????????????????????????
                    </div>
                </div>
                <div class="col-lg-4 col-sm-2"></div>
            </div>

            <div class="row">
                <label for="address_customer" class="form-label col-4 text-end mb-0 fs-5 pt-1">?????????????????????
                    *</label>
                <div class="col">
                    <textarea type="tel" class="form-control" id="address_customer" placeholder="address"
                        onchange="check_now('address_customer')" required></textarea>
                    <div class='text-danger warning text-start ' id='address_customer_warning'>
                        *????????????????????????????????????????????????
                    </div>
                </div>
                <div class="col-lg-4 col-sm-2"></div>
            </div>

            <div class="row">
                <label for="address_customer" class="form-label col-4 text-end mb-0 fs-5 pt-1">?????????
                    *</label>
                <div class="col pt-1 mx-auto">
                    <input class="form-check-input mt-2" type="radio" id="man" name='gender_customer' value="man"
                        required><span class="fs-5 me-5">?????????</span>
                    <input class="form-check-input mt-2" type="radio" id="woman" name='gender_customer' value="woman"
                        required><span class='fs-5'>????????????</span>
                </div>
                <div class="col-lg-4 col-sm-2"></div>
            </div>

            <button type="cancel" class="btn btn-danger" id='cancel'><a href="index.php" class='fw-bolder'
                    style="color:white">??????????????????????????????????????????</a></button>
            <input type="submit" class="btn btn-success fw-bolder" style='color:white' id='confirm_btn'
                value='??????????????????????????????????????????'>
        </form>
    </div>

    <footer>
        <div class="bg-info bg-opacity-50" style="border-radius: 20px 20px 0px 0px; box-shadow: 11px -1px 14px 4px rgba(0, 0, 0, 0.25);
            height: 100px;">
        </div>
    </footer>


</body>

<script>

    check_username = () => {
        if (((($('#username_customer').val()).length) == 0) || (($('#username_customer').val()).length) < 6) {
            $('#username_customer_warning').show();
            $('#username_customer').attr('class', 'form-control border-danger');

        } else if (!($('#username_customer').val()).match(/^[A-Za-z0-9]/)) {
            $('#username_customer_warning').show();
            $('#username_customer').attr('class', 'form-control border-danger');
        } else {
            $('#username_customer_warning').hide();
            $('#username_customer').attr('class', 'form-control border-success');
        }
        trueonoff()
    }

    check_password = () => {
        var pass = $('#password_customer').val()
        var cfpass = $('#cf_password_customer').val()
        if (cfpass.length != 0) {
            if (pass != cfpass) {
                $('#notmatch').show()
                $('#cf_password_customer').attr('class', 'form-control border-danger')
            }
            else {
                $('#cf_password_customer').attr('class', 'form-control border-success')
                $('#notmatch').hide()
            }
        } else {
            if (pass.length == 0) {
                $('#password_customer_warning').show()
                $('#password_customer').attr('class', 'form-control border-danger')
            } else {
                $('#password_customer_warning').hide()
                $('#password_customer').attr('class', 'form-control border-success')
            }
        }
        if (!(pass.match(/^[A-Za-z0-9]+$/))) {
            $('#password_customer_warning').show()
            $('#password_customer').attr('class', 'form-control border-danger')
        } else {
            $('#password_customer').attr('class', 'form-control border-success')
            $('#password_customer_warning').hide()
        }
        trueonoff()
    }


    check_now = (thisId) => {
        if (((($('#' + thisId).val()).length) == 0) || (($('#' + thisId).val()).length) < 6) {

            $('#' + thisId + '_warning').show();
            $('#' + thisId).attr('class', 'form-control border-danger');

        } if (!($('#' + thisId).val()).match(/^[A-Za-z0-9]/)) {
            $('#' + thisId + '_warning').show();
            $('#' + thisId).attr('class', 'form-control border-danger');
        } else {
            $('#' + thisId + '_warning').hide();
            $('#' + thisId).attr('class', 'form-control border-success');
        }
        trueonoff()
    }

    check_name = () => {
        if ((($('#name_customer').val()).length) == 0) {

            $('#name_customer_warning').show();
            $('#name_customer').attr('class', 'form-control border-danger');

        } else {
            $('#name_customer_warning').hide();
            $('#name_customer').attr('class', 'form-control border-success');
        }
        trueonoff()
    }

    check_email = () => {
        var email = $('#email_customer').val()
        if (!(email.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/))) {
            $('#email_not_correct').show()
            $('#email_customer').attr('class', 'form-control border-danger');

        } else {
            $('#email_not_correct').hide()
            $('#email_customer').attr('class', 'form-control border-success');
        }
        trueonoff()
    }

    check_phone = () => {
        var phone = $('#phone_customer').val();
        if ((phone.length != 10) || (!(phone.match(/[0-9]{10}/)))) {
            if (phone.length == 0) {
                $('#phone_customer_not_correct').hide()
                $('#phone_customer_warning').show()
                $('#phone_customer').attr('class', 'form-control border-danger');
            } else {
                $('#phone_customer_not_correct').show()
                $('#phone_customer_warning').hide()
                $('#phone_customer').attr('class', 'form-control border-danger');
            }
        }
        else {
            $('#phone_customer_not_correct').hide()
            $('#phone_customer_warning').hide()
            $('#phone_customer').attr('class', 'form-control border-success');
        }
        trueonoff()
    }

    trueonoff = () => {
        if ($('.warning').is(':visible')) {
            $('#confirm_btn').prop('disabled', true)
        } else {
            $('#confirm_btn').prop('disabled', false)
        }
    }

    $(() => {
        $('.warning').hide();
    })
</script>

</html>
