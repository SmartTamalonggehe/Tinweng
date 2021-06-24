// Halam Kriteria
if (route === "kriteria") {
    function dataForm(data) {
        $("#id").val(data.id);
        $("#nm_kriteria").val(data.nm_kriteria);
        $("#jenis").val(data.jenis);
        $(".tampilModal").modal("show");
        $("#judul").html("Silahkan Merubah Data");
        $("#tombolForm").html("Ubah Data");
    }
}

if (route === "nilaiKriteria") {
    function dataForm(data) {
        $("#id").val(data.id);
        $("#kriteria_id").val(data.kriteria_id);
        $("#bobot_kriteria").val(data.bobot_kriteria);
        $("#himpunan_id").val(data.himpunan_id);
        $("#metode").val(data.metode);
        $("#operator").val(data.operator);
        $(".tampilModal").modal("show");
        $("#judul").html("Silahkan Merubah Data");
        $("#tombolForm").html("Ubah Data");
    }
}
if (route === "pemakai") {
    function dataForm(data) {
        $("#id").val(data.id);
        $("#nm_pemakai").val(data.nm_pemakai);
        $("#umur").val(data.umur);
        $("#jenkel").val(data.jenkel);
        $("#alamat").val(data.alamat);
        $(".tampilModal").modal("show");
        $("#judul").html("Silahkan Merubah Data");
        $("#tombolForm").html("Ubah Data");
    }
}

$(".btnUbah").on("click", function(e) {
    e.preventDefault();
    href = $(this).data("id");
    save_method = "Ubah";
    $.ajax({
        url: `${route}/${href}/edit`,
        type: "GET",
        dataType: "JSON",
        beforeSend: function() {
            // lakukan sesuatu sebelum data dikirim
        },
        success: function(data) {
            dataForm(data);
        }
    });
});
