// Hapus Data
var route = $("#route").text();
var href;
var csrf_token = $('meta[name="csrf_token"]').attr("content");

$(".btnHapus").on("click", function(e) {
    e.preventDefault();
    href = $(this).data("id");
    Swal.fire({
        title: "Yakin?",
        text: "Data yang telah dihapus tidak dapat dikembalikan!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#34c38f",
        cancelButtonColor: "#f46a6a",
        confirmButtonText: "Yakin",
        cancelButtonText: "Batal"
    }).then(function(result) {
        if (result.value) {
            $.ajax({
                url: `${route}/${href}`,
                type: "POST",
                data: { _method: "DELETE", _token: csrf_token },
                beforeSend: function() {
                    // lakukan sesuatu sebelum data dikirim
                },
                success: function(data) {
                    // lakukan sesuatu jika data sudah terkirim
                    Swal.fire(
                        "Deleted!",
                        "Your file has been deleted.",
                        "success"
                    );
                    loadMoreData();
                }
            });
        }
    });
});
