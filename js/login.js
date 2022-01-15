function login(){
    var username=$('#email_or_username').val();
    var password=$('#password').val();
    $.ajax({
        url:'controller/login_controller.php',
        type:'POST',
        data:{
            login_check:true,
            username:username,
            password:password
        },
        success:function(data){
            console.log(data);
            if(data=="Correct"){
                window.location.href="index.php";
            }
        },
        error:function(err){
            console.log(err);
        }
    });
}