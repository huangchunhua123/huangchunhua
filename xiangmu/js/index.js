function checkpost(){
    if(form.user.value==""){
        alert("请输入用户名");
        form.user.focus();
        return false;
    }
    if(form.password.value.length<5){
        alert("请输入密码");
        form.password.focus();
        return false;
    }
    var eilmaflag=/^\w{2,15}@\w{2,6}.com$/;
    var eilmainfo=form.eilma.value;
    if(!eilmaflag.test(eilmainfo)){
        alert("邮箱格式不正确");
        form.eilma.focus();
        return false;
    }
    var phoneflag= /^(13[1,5,6,7,8]\d{8})|(15[1,2,5,7,8,9]\d{8})$/;
    var phoneinfo=form.phonenumber.value;
    if(!phoneflag.test(phoneinfo)){
        alert("手机号码格式不正确");
        form.phonenumber.focus();
        return false;
    }
}
