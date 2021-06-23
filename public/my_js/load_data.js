function loadMoreData() {
    $.ajax({
        url: "",
        type: "get",
        datatype: "html",
        success: function(data) {
            $("#tampil").html(data);
        }
    }).fail(function(jqXHR, ajaxOptions, thrownError) {
        alert("Server tidak merespon...");
    });
}
loadMoreData();
