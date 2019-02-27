//引用事件 index.php
$(document).ready(function () {
    $("#exampleInputPassword1,#exampleInputPassword2,#exampleInputEmail1").blur(function () {
        PasswordChecing();
        RePassword();
        openbtn();
    });
});
//上層提示表
$(document).ready(function () {
    $(".closebar").click(function () {
        $(".alert").slideUp(1000);
    });
});
//註冊資料判斷
function EmailChecking() {
    var Obj = document.getElementById("exampleInputEmail1");
    var email = Obj.value;
    var i = email.length;
    var temp = email.indexOf('@');
    var tempd = email.indexOf('.');
    //若沒有值
    if (i == 0) {
        $(document).ready(function () {
            $('.form-group2').removeClass('was-validated');
            $("#emailHelp").text("");
        });
    }
    //信箱正確
    else if (temp > 1) {
        if ((i - temp) > 3) {
            if ((i - tempd) > 0) {
                document.getElementById("emailHelp").innerHTML = "看起來不錯 !! ";
                document.getElementById("emailHelp").style.color = "green";
                $(document).ready(function () {
                    $('.form-group1').addClass('was-validated');
                });
                return 1;
            }
        }
    }
    //信箱不對
    else {
        document.getElementById("emailHelp").innerHTML = "信箱錯誤!! 請填寫正確的信箱，以利帳號認證";
        document.getElementById("emailHelp").style.color = "red";
        $(document).ready(function () {
            $('.form-group1').removeClass('was-validated');
        });
        return 0;
    }
}

//密碼資料判段
var Check = 0;
function PasswordChecing() {
    var Obj = document.getElementById("exampleInputPassword1");
    var pwd = Obj.value;
    var i = pwd.length;
    //若沒有值
    if (i == 0) {
        document.getElementById("passwordHelp").innerHTML = "";
        $(document).ready(function () {
            $('.form-group2').removeClass('was-validated');
        });
    }
    //密碼格式正確
    else if (pwd.match(/\d/) && pwd.match(/[a-z]/i) && i > 7 && i < 20 && !pwd.match(/[^a-z0-9]/)) {
        document.getElementById("passwordHelp").innerHTML = "密碼可以使用!!";
        document.getElementById("passwordHelp").style.color = "green";
        $(document).ready(function () {
            $('.form-group2').addClass('was-validated');
        });
        return 1;
    }
    //密碼格式不正確
    else {
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
    var i = pwd2.length;
    //若沒有值
    if (i == 0) {
        $(document).ready(function () {
            $("#repasswordHelp").text("");
            // $('#register').Attr('disabled');
        });
    }
    else if (pwd1 == pwd2) {
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
            // $('#register').Attr('disabled');
        });
        console.log("密碼驗證錯誤!");
        return 0;
    }
}
//打開按鈕
function openbtn() {
    //如果有任何錯誤
    if (EmailChecking() == 0 || PasswordChecing() == 0 || RePassword() == 0) {
        $(document).ready(function () {
            console.log("else if here!!!!!!!!")
            $('#register').attr('disabled', 'disabled');
        });
    }
    //如果密碼跟信箱通過認證
    else if (EmailChecking() == 1 && PasswordChecing() == 1) {
        $(document).ready(function () {
            console.log("if here")
            $('#register').removeAttr('disabled');
        });
    }
}
//提交前檢查一次
function submitCheck() {
    if (EmailChecking() == 1 && PasswordChecing() == 1 && RePassword() == 1){
        console.log("提交")
        $("#registerform").submit()
    }
    else {
        alert("系統錯誤，請再試一次");
        window.location.reload(); 
    }
}