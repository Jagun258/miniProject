ary = [
    {
        "username": "aeioustop",
        "password": "player456",
        "email": "mora_zhongli_0@gmail.com",
        "name": "Omaewa moushindeiru",
        "phone": "0941112345",
        "address": "wiui 62/274",
        "gender": "man"
    },
    {
        "username": "test",
        "password": "test",
        "email": "Jagun2588@gmail.com",
        "name": "Thanabodi Limjoo",
        "phone": "0936548224",
        "address": "134",
        "gender": "man"
    }
]


confirm = () => {
    var canSave = false
    data_customer = {
        "username": $('#username_customer').val(),
        "password": $('#password_customer').val(),
        "email": $('#email_customer').val(),
        "name": $('#name_customer').val(),
        "phone": $('#phone_customer').val(),
        "address": $('#address_customer').val(),
        "gender": $('input[name=gender_customer]:checked').val()
    }

    $.each(data_customer, (key, value) => {
        if ((value.length == 0) || (typeof value === 'undefined')) {
            canSave = false
            return false
        } else {
            canSave = true
        }
    })
    if (canSave) {
        ary.push(data_customer)
    }


}

function check() {
    var user = document.getElementById('username_customer').value;
    var password = document.getElementById('password_customer').value;
    if (user == "" || password == "") {
        alert("กรุณากรอกข้อมูล");
        user.value = "";
    }
    else if (!(user.match(/^([a-z0-9])+$/i))) {
        alert("กรอกได้เฉพาะตัวเลขและตัวอักษรภาษาอังกฤษเท่านั้น");
        document.getElementById('username_customer').value = "";
    } else {
        $.each(ary, (item, value) => {
            if (user == ary[item]['username']) {
                if (password == ary[item]['password']) {
                    alert('correct')
                    window.location.href='https://wubook-menu.herokuapp.com'
                    return false
                }
            }
            else {
                alert('* Username and password ไม่ถูกต้อง')
            }
        })
    }
}

$(() => {

    $('#confirm_btn').click(() => { confirm() })

})
