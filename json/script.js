// let mahasiswa = {
//     nama: "Moch Rafi",
//     nim: "1101154125",
//     email: "mochrafinuroktafian@gmail.com"
// }

// console.log(JSON.stringify(mahasiswa));

// pakai ajax
// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//         let mahasiswa = JSON.parse(this.responseText);
//         console.log(mahasiswa);
//     }
// }
// xhr.open('GET', 'coba.json', true);
// xhr.send();

// pakai Jquery
$.getJSON('coba.json', function (data) {
    console.log(data);
})