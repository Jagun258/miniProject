$(() => {
    $('#confirm_btn').click(() => { confirm() })
    $('#back_btn').click(() => { location.href = 'menu.php' })
})

var ary_save = []

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

data_book = [
    {
        "img": "https://storage.naiin.com/system/application/bookstore/resource/product/201711/225502/1000202357_front_XXL.jpg?imgname=PERFECT-SCIENCE-%E0%B8%AA%E0%B8%A3%E0%B8%B8%E0%B8%9B%E0%B9%80%E0%B8%82%E0%B9%89%E0%B8%A1%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C%E0%B8%A1.%E0%B8%95%E0%B9%89%E0%B8%99",
        "id": "S0111540",
        "title": "Perfect Science สรุปเข้มวิทยาศาสตร์ มัธยมต้น",
        "author": "อ.ภูชิชย์ พวงตะคุ",
        "publisher": "Life Balance",
        "pub_year": "2020",
        "time_of_pub": "1",
        "type": "book"

    },
    {
        "img": "https://images-se-ed.com/ws/Storage/Originals/978616/700/9786167000954L.jpg?h=2b295a090f9a970b855cf48d31966539",
        "id": "B0109900",
        "title": "ABC",
        "author": "ต้นกล้า นัยนา",
        "publisher": "สำนักพิมพ์แจ่มใส",
        "pub_year": "2020",
        "time_of_pub": "1",
        "type": "book",
    },
    {
        "img": "https://storage.naiin.com/system/application/bookstore/resource/product/201909/490171/1000224766_front_XXL.jpg?imgname=%E0%B8%8A%E0%B8%B5%E0%B8%A7%E0%B8%B4%E0%B8%95%E0%B8%94%E0%B8%B5%E0%B9%80%E0%B8%A1%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%A1%E0%B8%B5%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B8%99%E0%B9%89%E0%B8%AD%E0%B8%A2-%E0%B8%9B%E0%B8%A3%E0%B8%B1%E0%B8%8A%E0%B8%8D%E0%B8%B2%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%AA%E0%B8%B8%E0%B8%82-%E0%B8%89%E0%B8%9A%E0%B8%B1%E0%B8%9A-%E0%B8%A1%E0%B8%B4%E0%B8%99%E0%B8%B4%E0%B8%A1%E0%B8%AD%E0%B8%A5",
        "id": "L0105558",
        "title": "ชีวิตดีเมื่อมีของน้อย ปรัชญาความสุข ฉบับ มินิมอล",
        "author": "James Wallman",
        "publisher": "บิงโก",
        "pub_year": "-",
        "time_of_pub": "-",
        "type": "book",
    },
    {
        "img": "https://images-se-ed.com/ws/Storage/Originals/978616/083/9786160833979L.jpg?h=fbe3d12f62cbc6072361b4852981dee3",
        "id": "P0107410",
        "title": "การเขียนโปรแกรมด้วย Python สำหรับผู้เริ่มต้น",
        "author": "บัญชา ปะสีละเตสัง",
        "publisher": "กรุงเทพฯ : ซีเอ็ดยูเคชั่น",
        "pub_year": "2562",
        "time_of_pub": "-",
        "type": "book",
    },
    {
        "img": "https://c.lnwfile.com/3jtu7m.jpg",
        "id": "T0009959",
        "title": "Blockchain Technology ถนนสายใหม่เชื่อมโลกดิจิทัลไร้พรมแดน",
        "author": "GET SMART",
        "publisher": "-",
        "pub_year": "2561",
        "time_of_pub": "",
        "type": "book",
    }
]


confirm = () => {
    var canSave = false

    data_customer = {
        "id": $('#id_customer').val(),
        "username": $('#username_customer').val(),
        "password": $('#password_customer').val(),
        "email": $('#email_customer').val(),
        "name": $('#name_customer').val(),
        "phone": $('#phone_customer').val(),
        "address": $('#address_customer').val(),
        "gender": $('input[name=gender_customer]:checked').val()
    }

    sessionStorage.setItem("id", $('#id_customer').val());
    sessionStorage.setItem("username", $('#username_customer').val());
    sessionStorage.setItem("password", $('#password_customer').val());
    sessionStorage.setItem("email", $('#email_customer').val());
    sessionStorage.setItem("name", $('#name_customer').val());
    sessionStorage.setItem("phone", $('#phone_customer').val());
    sessionStorage.setItem("address", $('#address_customer').val());
    sessionStorage.setItem("gender", $('input[name=gender_customer]:checked').val());

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
    }
    else if (!(user.match(/^([a-z0-9])+$/i))) {
        alert("กรอกได้เฉพาะตัวเลขและตัวอักษรภาษาอังกฤษเท่านั้น");
        document.getElementById('username_customer').value = "";
    } else {
        $.each(ary, (item, value) => {
            if ((user == ary[item]['username']) && (password == ary[item]['password'])) {
                location.href = 'menu.php';
                return false
            }

            esle if ((user == sessionStorage.getItem("username") && (password == sessionStorage.getItem("password")))) {
                location.href = 'menu.php';
                return false
            }
            else {
                alert('* Username and password ไม่ถูกต้อง')
                return false
            }
        })
    }
}




checkKeyword = () => {
    var keyword = $('#keyword_search').val()
    if (!(keyword).match(/^[A-Za-z0-9กขฃคฅฆงจฉชซฌญฎฏฐฑฒณดตถทธนบปผฝพฟภมยรฤลฦวศษสหฬอฮฯะัาำิีึืฺุูเแโใไๅๆ็่้๊๋์\s]+$/) && (keyword.length > 0)) {
        alert('ข้อมูลที่กรอกไม่ถูกต้อง')
        $('#search_btn').prop('disabled', true)
        $('#ok_btn').prop('disabled', true)
    } else {
        $('#search_btn').prop('disabled', false)
        $('#ok_btn').prop('disabled', false)
    }
}

borrowRecord = () => {
    var date = $('#borrowed_date_dd').val()
    if(date.length!=0){
        var idCustomer = $('#id_customer').val()
        var idBook = $('#id_book').val()
        if (idCustomer != sessionStorage.getItem('id')) {
            alert('รหัสสมาชิก(ID) ไม่ถูกต้อง')
            $('.id-customer-borrow').attr('class', 'form-control id-customer-borrow border-danger')
        } else {
            $('.id-customer-borrow').attr('class', 'form-control id-customer-borrow border-success')
        }
        if (!(idBook.match(/^[A-Za-z0-9]+$/))) {
            alert('รหัสหนังสือไม่ถูกต้อง')
            $('.id-book-borrow').attr('class', 'form-control id-book-borrow border-danger')
        } else {
            $.each(data_book, (item, value) => {
                var result = data_book[item]["id"].includes(idBook)
                if (result) {
                    $('.id-book-borrow').attr('class', 'form-control id-book-borrow border-success')
                    $('#id_book_value').val(data_book[item]["id"])
                    $('#name_book').val(data_book[item]["title"])
                    $('#type_book').val(data_book[item]["type"])
                    $('#pub_book').val(data_book[item]["publisher"])
                    $('#book_author').val(data_book[item]["author"])
                    $('#pub_year').val(data_book[item]["pub_year"])
                    $('#time_of_pub_book').val(data_book[item]["time_of_pub"])
                    
                    var obj_save = {
                        "id": $('#id_book_value').val(),
                        "name": $('#name_book').val(),
                        "dateBorrow": date,
                        "status":"กำลังยืม"
                    }
                    ary_save.push(obj_save)
                }
            })
            var line = ""
            line += "<tr>"
            line += "<td>" + $('#id_book_value').val() + "</td>"
            line += "<td>" + $('#name_book').val() + "</td>"
            line += "</tr>"
            $('#tbody-book').append(line)
        }
    }else{
        alert('กรุณาเลือกวันที่ก่อน')
    }
}


ok_btn_borrow = () => {
    var date = $('#borrowed_date_dd').val()
    var idCustomer = $('#id_customer').val()
    var idBook = $('#id_book').val()

    if (date.length == 0 || idCustomer.length == 0 || idBook.length == 0) {
        alert('โปรดกรอกข้อมูลให้ครบ')
    } else {
        $.each(ary_save, (item, value) => {
            sessionStorage.setItem('idBook' + (item + 1), ary_save[item]["id"])
            sessionStorage.setItem('nameBook' + (item + 1), ary_save[item]["name"])
            sessionStorage.setItem('dateBorrow' + (item + 1), ary_save[item]["dateBorrow"])
            sessionStorage.setItem('status' + (item + 1), ary_save[item]["status"])
        })
        window.location.href = 'borrow-confirm.php'
    }

}

clear_borrow = () => {
    for (var a = 0; a <= 50; a++) {
        if ((sessionStorage.getItem('idBook' + a) !== null) && (sessionStorage.getItem('nameBook' + a) !== null)) {

            sessionStorage.removeItem('idBook' + a)
            sessionStorage.removeItem('nameBook' + a)
            sessionStorage.removeItem('dateBorrow' + a)
            sessionStorage.removeItem('status' + a)
        }
        window.location.href = 'borrow.php'
    }
}
