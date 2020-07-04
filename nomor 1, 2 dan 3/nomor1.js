var password = prompt("generate kode unique sepeda brompton anda: ");

if (password == "aziz") {
  var kode = "hjkl-w12g";
  document.write(
    "<h2>Berikut adalah kode unique untuk sepeda brompton anda </h2>" + kode
  );
} else {
  document.write(
    "<h2>kode yang anda masukkan tidak ada di sistem kami, silahkan coba lagi</h2>"
  );
}
