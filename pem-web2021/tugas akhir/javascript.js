ratedollar = 14500;
barang1 = 60;
barang2 = 200;
barang3 = 50;
barang4 = 40;
barang5 = 50;
rp1 = ratedollar * barang1;
rp2 = ratedollar * barang2;
rp3 = ratedollar * barang3;
rp4 = ratedollar * barang4;
rp5 = ratedollar * barang5;
function rupiah(){
    document.getElementById("dollar1").innerHTML = "Rp " + rp1;
    document.getElementById("dollar2").innerHTML = "Rp " + rp2;
    document.getElementById("dollar3").innerHTML = "Rp " + rp3;
    document.getElementById("dollar4").innerHTML = "Rp " + rp4;
    document.getElementById("dollar5").innerHTML = "Rp " + rp5;
}
function usd(){
    document.getElementById("dollar1").innerHTML = "$" + barang1;
    document.getElementById("dollar2").innerHTML = "$" + barang2;
    document.getElementById("dollar3").innerHTML = "$" + barang3;
    document.getElementById("dollar4").innerHTML = "$" + barang4;
    document.getElementById("dollar5").innerHTML = "$" + barang5;
}