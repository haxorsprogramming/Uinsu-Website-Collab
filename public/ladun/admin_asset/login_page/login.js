// route 
const rToLogin = server + 'manage/login/proses';
const rToDashboard = server + 'manage/dashboard';

// vue object 
var divLogin = new Vue({
    el : '#divLogin',
    data : {

    },
    methods : {
        loginAtc : function()
        {
            let username = document.querySelector('#txtUsername').value;
            let password = document.querySelector('#txtPassword').value;
            let ds = {'username':username, 'password':password}
            axios.post(rToLogin, ds).then(function(res){
               let dr = res.data;
               if(dr.status === 'no_user'){
                pesanUmumApp('warning', 'Gagal', 'Username tidak terdaftar !!!');
               }else if(dr.status === 'wrong_password'){
                pesanUmumApp('warning', 'Gagal', 'Autentifikasi gagal, periksa username / password !!!');
               }else{
                window.location.assign(rToDashboard);
               }
            });
        }
    }
});

// inisialisasi
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

document.querySelector('#txtUsername').focus();

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}