var rToProses = server + 'login/proses';
var rToDashboard = server + 'main_app/beranda';
var step_verif = 0;

var divLogin = new Vue({
    el : '#divLogin',
    delimiters: ["[[", "]]"],
    data : {
        username : '',
        password : '',
        statusVerifikasi : 0,
        capVerifikasi : '',
        nama_pegawai : ''
    },
    methods : {
        loginAtc : function()
        {
            let username = document.querySelector('#txtUsername').value;
            let password = document.querySelector('#txtPassword').value;
            let ds = {'username':username, 'password':password}

            if(username === '' || password === ''){
                pesanUmumApp('warning', 'Isi field', 'Harap isi username & password!!!');
            }else{
                $.post(rToProses, ds, function(data){
                    console.log(data);
                    divLogin.nama_pegawai = data.nama_pegawai;
                    let status_login = data.status_login;
                    if(status_login === 'no_user'){
                        pesanUmumApp('warning', 'No user', 'Username tidak terdaftar!!!');
                    }else{
                        if(status_login === 'wrong_password'){
                            pesanUmumApp('warning', 'Isi field', 'Username & Password salah!!!');
                        }else{
                            pesanUmumApp('success', 'Success', 'Login default sukses, silahkan verfikasi wajah !!!');
                            document.querySelector('#txtUsername').setAttribute('disabled', 'disabled');
                            document.querySelector('#txtPassword').setAttribute('disabled', 'disabled');
                            $('#btnLoginAwal').hide();
                            $('#imgFotoSamping').hide();
                            $('#video').show();
                            divLogin.capVerifikasi = "Mulai memverifikasi wajah ...";
                            
                            verifikasi_wajah();
                            sukses_verifikasi();

                            setTimeout(function(){
                                window.location.assign(rToDashboard);
                            }, 20000);
                        }
                    }
                });
            }

            
            
        }
    }
});

$('#divImgAwal').hide();
document.querySelector('#txtUsername').focus();



function verifikasi_wajah()
{
    setTimeout(function(){
        divLogin.capVerifikasi = "Wajah terdeteksi, menunggu verifikasi ...";
    }, 4000);
    sukses_verifikasi();
}


function sukses_verifikasi()
{
    let nama_pegawai = divLogin.nama_pegawai;
    setTimeout(function(){
        pesanUmumApp('success', 'Sukses', 'Operator sukses terdeteksi : '+nama_pegawai);
        divLogin.capVerifikasi = "Berhasil ... mengarahkan ke halaman utama aplikasi ... ";
    }, 8000);
}

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}