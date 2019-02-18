//通知列關閉
function closebar() {
    var spanObj = document.getElementById("emotion");
    spanObj.style.display = "none"
}
//model 啟用
$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
})
//註冊資料判斷
function RegisteredChecking() {
    var Obj = document.getElementById("exampleInputEmail1");
    var email = Obj.value;
    var i = email.length;
    var temp = email.indexOf('@');
    var tempd = email.indexOf('.');
    if (temp > 1) {
        if ((i - temp) > 3) {
            if ((i - tempd) > 0) {
                console.log("信箱對");
                return 1;
            }
        }
    }
    console.log("信箱不對");
    return 0;
}
//密碼資料判段
function PasswordChecing() {
    var Obj = document.getElementById("exampleInputPassword1");
    var pwd = Obj.value;
    var i = pwd.length;
    if(pwd.match(/\d/) && pwd.match(/[a-z]/i) && i>8 && i<20 && !pwd.match(/[^a-z0-9]/)){ 
        alert('ok'); 
        }else{ 
        alert('fail'); 
        } 
}
//密碼資料再次確認
function RePassword() {
    var Obj1 = document.getElementById("exampleInputPassword1");
    var pwd1 = Obj1.value;
    var Obj2 = document.getElementById("exampleInputPassword2");
    var pwd2 = Obj2.value;
    if (condition) {
        if(pwd1 = pwd2)
    }
    
}
