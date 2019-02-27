//引用
$("#exampleInputPassword1,#exampleInputPassword2,#exampleInputEmail1").blur(function () {
    PasswordChecing();
    RePassword();
    openbtn();
});
//上層提示表
$(document).ready(function () {
    $(".closebar").click(function () {
        $(".alert").slideUp(1000);
    });
//註冊資料判斷
function EmailChecking() {
    var Obj = document.getElementById("exampleInputEmail1");
    var email = Obj.value;
    var i = email.length;
    var temp = email.indexOf('@');
    var tempd = email.indexOf('.');
    if (temp > 1) {
        if ((i - temp) > 3) {
            if ((i - tempd) > 0) {
                console.log("信箱對");
                document.getElementById("emailHelp").innerHTML = "看起來不錯 !! ";
                document.getElementById("emailHelp").style.color = "green";
                $(document).ready(function () {
                    $('.form-group1').addClass('was-validated');
                });
                return 1;
            }
        }
    }
    console.log("信箱不對");
    document.getElementById("emailHelp").innerHTML = "信箱錯誤!! 請填寫正確的信箱，以利帳號認證";
    document.getElementById("emailHelp").style.color = "red";
    $(document).ready(function () {
        $('.form-group1').removeClass('was-validated');
    });
    return 0;
}
//密碼資料判段
var Check = 0;
function PasswordChecing() {
    var Obj = document.getElementById("exampleInputPassword1");
    var pwd = Obj.value;
    var i = pwd.length;
    if (pwd.match(/\d/) && pwd.match(/[a-z]/i) && i > 7 && i < 20 && !pwd.match(/[^a-z0-9]/)) {
        console.log("yes");
        document.getElementById("passwordHelp").innerHTML = "密碼可以使用!!";
        document.getElementById("passwordHelp").style.color = "green";
        $(document).ready(function () {
            $('.form-group2').addClass('was-validated');
        });
        return 1;
    } else {
        console.log("no");
        document.getElementById("passwordHelp").innerHTML = "請輸入八個字以上的英文數字組合，麻煩再次確認 ";
        document.getElementById("passwordHelp").style.color = "red";
        $(document).ready(function () {
            $('.form-group2').removeClass('was-validated');
        });
        return 0;
    }
}
//檢查密碼驗證
function RePassword() {
    var Obj1 = document.getElementById("exampleInputPassword1");
    var pwd1 = Obj1.value;
    var Obj2 = document.getElementById("exampleInputPassword2");
    var pwd2 = Obj2.value;
    if (pwd1 == pwd2) {
        console.log("密碼驗證正確!");
        $(document).ready(function () {
            $('#repasswordHelp').html('密碼驗證正確!').css('color', 'green');
            $('.form-group3').addClass('was-validated');
        });
        return 1;
    }
    else {
        $(document).ready(function () {
            $('#repasswordHelp').html('密碼驗證錯誤').css('color', 'red');
            $('.form-group3').removeClass('was-validated');
        });
        console.log("密碼驗證錯誤!");
        return 0;
    }
}
function openbtn() {
    if (EmailChecking() == 1 && PasswordChecing() == 1 && RePassword() == 1) {
        $("#openbtn").removeClass("disabled");
        console.log("openbtn ok");
    }
    else {
        console.log("openbtn no");
    }
}