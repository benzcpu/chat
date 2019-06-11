var server_url=window.location.origin;
var partloginPHP='/user/user/facebook_login';
function getUserData() {
    FB.api('/me?fields=name,email', function(response) {
        var tokenName = $('.BMcsrg_token').attr('name');
        var tokenValue = $('.BMcsrg_token').val();
        var newresponse= 'id'+'='+response.id+ '&' + 'name'+'='+response.name+ '&' +'email'+'='+response.email+ '&' + tokenName + '=' + tokenValue;
        $.ajax({
            url:server_url+partloginPHP,
            async: true,
            method: "POST",
            data: newresponse,
            success:function(data){
                console.log(data);
                data=JSON.parse(data);
                loginSuccess(data);
               window.location=document.URL;
            }
        });
    });
}
window.fbAsyncInit = function() {
    //SDK loaded, initialize it
    FB.init({
        appId      : '923467898045142',
        xfbml      : true,
        version    : 'v2.2'
    });
    //check user session and refresh it
    FB.getLoginStatus(function(response) {
        if (response.status === 'connected') {
            //user is authorized
            //document.getElementById('loginBtn').style.display = 'none';
            //getUserData();
        } else {
            //user is not authorized
        }
    });
};
//load the JavaScript SDK
(function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.com/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
//add event listener to login button


$(document).on('click','#loginBtn',function(){
    facebook_login();
});

function facebook_login(){
    try{
        FB.login(function(response) {
            if (response.authResponse) {

                getUserData();
            }
        }, {scope: 'email,public_profile', return_scopes: true});
    }
    catch(err) {


    }

}

// try{
// document.getElementById('loginBtn').addEventListener('click', function() {
//     //do the login
//     FB.login(function(response) {
//         if (response.authResponse) {
//
//             getUserData();
//         }
//     }, {scope: 'email,public_profile', return_scopes: true});
// }, false);
// }
// catch(err) {
// }

function facebookLogout(){
    FB.getLoginStatus(function(response) {
        if (response.status === 'connected') {
            FB.logout(function(response) {
                // this part just clears the $_SESSION var
                // replace with your own code
                document.getElementById('response').innerHTML ="Logout";
            });
        }
    });
}
