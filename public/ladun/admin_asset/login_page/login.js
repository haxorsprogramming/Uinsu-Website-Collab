// route 
const rToLogin = server + 'manage/login/proses';

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
                console.log(res.data);
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