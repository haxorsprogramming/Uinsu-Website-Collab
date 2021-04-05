// vue object 
var divLogin = new Vue({
    el : '#divLogin',
    data : {

    },
    methods : {
        loginAtc : function()
        {
            console.log("Halo");
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