// Memanggil Modals
save_method = "add";
$("#tambah").on("click", function() {
    $("#judul_form").html("From Tambah Data");
    $("#tombolForm").html("Simpan Data");
    $("#formKu").trigger("reset");
    $(".tampilModal").modal("show");
});
// Script Tambah & Ubah
$("#formKu").on("submit", function(e) {
    e.preventDefault();
    let id = $("#id").val();
    let dataKu = $("#formKu").serialize();
    if (save_method == "add") {
        url = `${route}`;
        method = "POST";
    } else {
        url = `${route}/:id`;
        url = url.replace(":id", id);
        method = "PUT";
    }
    $.ajax({
        url: url,
        type: method,
        data: dataKu,
        success: function(response) {
            console.log(response);

            if (save_method == "add") {
                toastr.success("Data Berhasil Ditambahkan", "Berhasil !!!");
            } else {
                toastr.warning("Data Berhasil Diubah", "Berhasil !!!");
                aksi = $(".tampilModal").modal("hide");
            }
            $("#formKu").trigger("reset");
            loadMoreData();
        }
    }).fail(function(jqXHR, ajaxOptions, thrownError) {
        alert("Error. Server tidak merespon");
    });
});
