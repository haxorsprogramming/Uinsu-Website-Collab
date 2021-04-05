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
            axios.post(rToLogin).then(function(res){
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