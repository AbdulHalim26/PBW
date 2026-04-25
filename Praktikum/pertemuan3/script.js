function hitungMutu() {
    // 1. Mengambil nilai yang diketik user di kotak input
    let nimUser = document.getElementById("nim").value;
    let nilaiUser = document.getElementById("nilai").value;
    
    // Mengubah nilai teks menjadi angka (karena inputan defaultnya berupa teks)
    let angka = parseInt(nilaiUser);

    // 2. Tempat kita akan mencetak tulisan hasil
    let hasil = document.getElementById("tempatHasil");

    // 3. Logika IF-ELSE sesuai soal
    
    // Pertama, kita cek dulu apakah nilainya tidak valid (di atas 100 atau di bawah 0)
    if (angka < 0 || angka > 100) {
        hasil.innerHTML = "Nilai tidak valid!";
        hasil.style.color = "red"; // Opsional: Bikin teksnya jadi merah kalau error
    } 
    // Jika valid, lanjut cek rentang A (80 - 100)
    else if (angka >= 80) {
        hasil.innerHTML = "NIM: " + nimUser + " <br> Huruf Mutu: A";
        hasil.style.color = "black";
    } 
    // Cek rentang B (70 - 79)
    else if (angka >= 70) {
        hasil.innerHTML = "NIM: " + nimUser + " <br> Huruf Mutu: B";
        hasil.style.color = "black";
    } 
    // Cek rentang C (60 - 69)
    else if (angka >= 60) {
        hasil.innerHTML = "NIM: " + nimUser + " <br> Huruf Mutu: C";
        hasil.style.color = "black";
    } 
    // Cek rentang D (50 - 59)
    else if (angka >= 50) {
        hasil.innerHTML = "NIM: " + nimUser + " <br> Huruf Mutu: D";
        hasil.style.color = "black";
    } 
    // Jika nilainya bukan A, B, C, atau D, berarti sisa rentang 0 - 49 (E)
    else {
        hasil.innerHTML = "NIM: " + nimUser + " <br> Huruf Mutu: E";
        hasil.style.color = "black";
    }
}