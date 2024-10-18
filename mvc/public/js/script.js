$(".tampilModalUbah").on("click", function () {
  $("#formModalLabel").html("Ubah Data Mahasiswa");
  $(".modal-footer button[type=submit]").html("Ubah Data");
  $(".modal-body form").attr(
    "action",
    "http://localhost/prakweb2024_a_223040086_pw/mvc/public/mahasiswa/ubah"
  );

  const id = $(this).data("id");

  // Ajax untuk mendapatkan data yang akan diubah
  $.ajax({
    url: "http://localhost/prakweb2024_a_223040086_pw/mvc/public/mahasiswa/getUbah",
    data: { id: id },
    method: "post",
    dataType: "json",
    success: function (data) {
      $("#nama").val(data.nama);
      $("#nrp").val(data.nrp);
      $("#email").val(data.email);
      $("#jurusan").val(data.jurusan);
      $("#id").val(data.id);
    },
  });
});
