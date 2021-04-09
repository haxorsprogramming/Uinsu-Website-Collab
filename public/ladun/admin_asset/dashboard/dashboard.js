NProgress.configure({ showSpinner: false });

var divNavbarMenu = new Vue({
    el: "#divNavbarMenu",
    data: {},
    methods: {
        fakultasAtc: function () {
            renderPage("manage/fakultas/list");
        },
    },
});

renderPage("manage/beranda/page");

function renderPage(halaman) {
    progStart();
    $("#divUtama").html("Memuat form ..");
    $("#divUtama").load(server + halaman);
    progStop();
}

function progStart() {
    NProgress.start();
}

function progStop() {
    NProgress.done();
}
