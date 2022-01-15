function signup(){
    var username=$('#username').val();
    var email=$('#email').val();
    var password=$('#password').val();
    $.ajax({
        url:'controller/signup_controller.php',
        type:'POST',
        data:{
            email:email,
            username:username,
            password:password
        },
        success:function(data){
            // console.log(data);
            window.location.href="index.php";
        },
        error:function(err){
            console.log(err);
        }
    })
}