//通知列關閉
// function closebar() {
//     var spanObj = document.getElementById("emotion");
//     spanObj.style.display = "none"
// }
$(document).ready(function () {
    $(".closebar").click(function(){
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
    if (temp > 1) {
        if ((i - temp) > 3) {
            if ((i - tempd) > 0) {
                console.log("信箱對");
                document.getElementById("emailHelp").innerHTML = "看起來不錯 !! ";
                document.getElementById("emailHelp").style.color = "green";
                return 1;
            }
        }
    }
    console.log("信箱不對");
    document.getElementById("emailHelp").innerHTML = "信箱錯誤!! 請填寫正確的信箱，以利帳號認證";
    document.getElementById("emailHelp").style.color = "red";
    return 0;
}
//密碼資料判段
var Check = 0 ;
function PasswordChecing() {
    var Obj = document.getElementById("exampleInputPassword1");
    var pwd = Obj.value;
    var i = pwd.length;
    if (pwd.match(/\d/) && pwd.match(/[a-z]/i) && i > 7 && i < 20 && !pwd.match(/[^a-z0-9]/)) {
        console.log("yes");
        document.getElementById("passwordHelp").innerHTML = "密碼可以使用!!";
        document.getElementById("passwordHelp").style.color = "green";
    } else {
        console.log("no");
        document.getElementById("passwordHelp").innerHTML = "請輸入八個字以上的英文數字組合，麻煩再次確認 ";
        document.getElementById("passwordHelp").style.color = "red";
    }
}
function RePassword() {
    var Obj1 = document.getElementById("exampleInputPassword1");
    var pwd1 = Obj1.value;
    var Obj2 = document.getElementById("exampleInputPassword2");
    var pwd2 = Obj2.value;
        if (pwd1 == pwd2){
        console.log("密碼驗證正確!");
    }
    else{
        console.log("密碼驗證錯誤!");
    }

}