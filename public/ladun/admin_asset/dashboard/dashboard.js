const rBeranda = "manage/beranda/page";
const rFakultasList = "manage/fakultas/list";

NProgress.configure({ showSpinner: false });

var divNavbarMenu = new Vue({
    el: "#divNavbarMenu",
    data: {},
    methods: {
        berandaAtc : function()
        {
            renderPage(rBeranda);
            
        },
        fakultasAtc: function () {
            renderPage(rFakultasList);
            
            // $('.with-sub').toggle();
        },
    },
});

renderPage(rBeranda);

function renderPage(halaman) {
    progStart();
    $("#divUtama").html("Memuat form ..");
    $("#divUtama").load(server + halaman);
    progStop();
    document.querySelector('.with-sub').classList.remove('show');
}

function progStart() {
    NProgress.start();
}

function progStop() {
    NProgress.done();
}
