# 1. Contoh Sederhana #
```html
<HTML>
```
Fungsi: menandai awal dokumen HTML.
Catatan: idealnya awali file dengan `<!DOCTYPE html>` supaya browser masuk ke mode standar. Penulisan huruf besar/ kecil tidak masalah di HTML5, tetapi konvensi sekarang pakai huruf kecil (`<html`>).

```html
<HEAD><TITLE> contoh sederhana JavaScript</TITLE></HEAD>
```
Fungsi: `<head>` menyimpan meta-data; `<title>` menampilkan teks di tab/ title bar browser.

```html
<script language="JavaScript">
```
Fungsi: mulai blok JavaScript. Kode JS dituliskan di dalamnya.

```html
document.write("Selamat Belajar Angkatan 2024","<br>");
document.write("JavaScript Pemrograman WEB Teknik Komputer");
```

Fungsi: document.write() menulis langsung ke dokumen HTML pada saat parsing. Baris pertama menulis teks dan "`<br>`" untuk baris baru, baris kedua menulis teks berikutnya.

```html
Selamat Belajar Angkatan 2024
JavaScript Pemrograman WEB Teknik Komputer
```

```html
</script>
```
Fungsi: menutup blok script. Benar.

```html
</BODY>
```
Fungsi: menutup elemen `<body>`. Jika Anda memperbaiki baris 3 menjadi `<BODY>` maka baris 8 adalah penutup yang benar.

```html
</HTML>
```
Fungsi: menutup dokumen HTML. Benar.

# 2. Event Tertentu #
```html
<body>
 <h1>Mengenal Event Pada Javascript</h1>
 <h2> Perograman WEB Event one click</h2>
```

`<body>` → bagian utama dari halaman yang ditampilkan ke user.
`<h1>` → judul utama (besar).
`<h2>` → subjudul.

```html
 <button onclick="tampilkan_nama()">klik disini </button>
```
Komentar HTML → penjelasan "memberikan event pada element tombol".
`<button>` → membuat tombol di halaman.
onclick="tampilkan_nama()" → event handler, artinya ketika tombol diklik, fungsi JavaScript tampilkan_nama() akan dijalankan.
Teks pada tombol: "klik disini".

```html
 <div id="hasil"></div>
```
Komentar HTML → catatan bahwa elemen ini digunakan untuk menampilkan hasil.
`<div id="hasil">` → wadah kosong dengan id="hasil".
Digunakan JavaScript untuk mengisi konten teks di dalamnya ketika tombol ditekan.

``` html
<script>
 function tampilkan_nama(){
   document.getElementById("hasil").innerHTML =
   "<h3>Nama Saya Adalah Ainil Cantik</h3>";
 }
 </script>
 ```

 `<script>` → blok tempat menulis kode JavaScript.
function tampilkan_nama(){...} → mendefinisikan fungsi bernama tampilkan_nama.
document.getElementById("hasil") → mencari elemen HTML dengan id="hasil".
.innerHTML = ... → mengganti isi elemen dengan teks/HTML baru.
Hasil yang ditampilkan: `<h3>`Nama Saya Adalah Ainil Cantik`</h3>` (judul kecil).

# 3. Global dan Lokal
```html
var a = 12;
```
Deklarasi variabel global a dan memberi nilai awal 12.

```html
var b = 4;
```
Deklarasi variabel global b dan memberi nilai awal 4.

```html
function Perkalian_Dengan2(b) {
```
Definisi fungsi bernama Perkalian_Dengan2 yang menerima satu parameter bernama b.

```html
a = b * 2;
```
Menghitung b * 2 (menggunakan nilai parameter b) dan menyimpan hasilnya ke variabel a global (karena a tidak dideklarasi ulang di dalam fungsi). Jadi fungsi ini mengubah nilai global a.

```html
document.write( "Dua kali dari" ,b, "adalah" ,Perkalian_Dengan2(b));
```
Memanggil document.write() dengan beberapa argumen. Urutannya: string "Dua kali dari", lalu nilai b (nilai global b = 4), lalu string "adalah", lalu hasil Perkalian_Dengan2(b) (fungsi dipanggil di sini).

Saat fungsi dipanggil: parameter b = 4 → a di-set ke 8 → fungsi mengembalikan 8. Karena tidak ada spasi di akhir/awal string literal, teks yang ditulis akan melekat (mis. "Dua kali dari4adalah8").

document.write menulis langsung ke dokumen saat halaman sedang diparse. (Catatan: penggunaan document.write setelah halaman selesai dimuat akan menimpa seluruh dokumen — biasanya tidak disarankan di aplikasi nyata.)

```html
document.write( "Nilai dari a adalah" ,a);
```
Menulis lagi ke dokumen: string "Nilai dari a adalah" dan nilai a. Karena sebelumnya fungsi sudah mengubah a menjadi 8, yang tertulis adalah "Nilai dari a adalah8". (Lagi-lagi tidak ada spasi otomatis.)

# 4.Java Script #
```html
<script language="JavaScript">
document.write("Program JavaSript Aku di kepala");
</script>
```
`<script language="JavaScript">` → memulai blok JavaScript. (Atribut language ini gaya lama, sekarang cukup `<script>`.)

document.write("Program JavaSript Aku di kepala"); → instruksi JavaScript untuk menuliskan teks langsung ke dokumen. Karena script ini berada di dalam `<head>`, teks akan ditulis pada posisi parsing saat browser membaca bagian `<head>`.

`</script>` → menutup blok script.

```html
<script language="JavaScript">
document.write("Program JavaSript Aku di body");
</script>
```
Script kedua, kali ini diletakkan di dalam `<body>`.

Saat dijalankan, document.write("Program JavaSript Aku di body"); menuliskan teks langsung ke halaman pada lokasi di mana script ditempatkan, yaitu di dalam body.

Jadi, teks “Program JavaSript Aku di body” muncul setelah teks sebelumnya.

# 5. Jendela Peringatan Dan Konfirmasi #
```html
<HEAD>
<TITLE>Alert Box</TITLE>
<TITLE>Konfirmasi</TITLE>
</HEAD>
```
`<HEAD>` → bagian kepala dokumen.

`<TITLE>`Alert Box`</TITLE>` → seharusnya menentukan teks yang muncul di tab browser.

Masalah: Ada dua `<TITLE>` di sini, itu tidak valid. Browser biasanya hanya mengambil yang pertama, yaitu "Alert Box".

`</HEAD>` → menutup bagian head.

```html
<!--
window.alert("Apakah anda ingin meninggalkan laman ini?");
//-->
```
`<!--` → komentar HTML lama yang dulu digunakan untuk menyembunyikan JS dari browser kuno (sudah tidak diperlukan).

window.alert("Apakah anda ingin meninggalkan laman ini?"); → menampilkan jendela alert box dengan pesan "Apakah anda ingin meninggalkan laman ini?". User hanya bisa menekan OK.

//--> → bagian ini jadi komentar JS untuk menutup `<!-- tadi`.

```html
 var jawaban = window.confirm(
 "Apakah anda sudah yakin ?");
 document.write("Jawaban Anda: " + jawaban);
```
A. var jawaban = window.confirm("Apakah anda sudah yakin ?");
1. Menampilkan confirm box dengan teks "Apakah anda sudah yakin ?" dan 2 tombol (OK atau Cancel).
2. Jika user klik OK → nilai jawaban = true.
3. Jika Cancel → nilai jawaban = false.

B. document.write("Jawaban Anda: " + jawaban);
1. Menulis hasil ke halaman.
2. Output yang muncul:
3. Jika user klik OK → Jawaban Anda: true
4. Jika user klik Cancel → Jawaban Anda: false

# 6. Konversi Tipe Data #
```html
 var a = parseInt( "27" );
 document.write( "1." + a + "<BR>");
```
parseInt("27") → konversi string "27" menjadi bilangan bulat 27.

Disimpan ke variabel a.

Ditulis ke dokumen: 1.27 + baris baru.

```html
 a = parseInt( "27.5" );
 document.write( "2." + a + "<BR>");
 ```
 parseInt("27.5") → hanya membaca angka bulat di depan → hasil 27.

Ditulis ke dokumen: 2.27.

```html
 var a = parseInt( "27A" );
 document.write( "3." + a + "<BR>");
```
parseInt("27A") → membaca angka di awal string (27), lalu berhenti ketika ketemu huruf.

Hasil 27.

Output: 3.27.

```html
16–18
 a = parseInt( "A27.5" );
 document.write( "4." + a + "<BR>");
```

parseInt("A27.5") → string diawali huruf, jadi tidak bisa dikonversi.

Hasil = NaN (Not a Number).

Output: 4.NaN.

```html
 var b = parseFloat( "27" );
 document.write( "5." + b + "<BR>");
```

parseFloat("27") → mengubah string "27" jadi angka pecahan 27.

Output: 5.27.

```html
 b = parseFloat( "27.5" );
 document.write( "6." + b + "<BR>");
```

parseFloat("27.5") → hasil 27.5.

Output: 6.27.5.

```html
 var b = parseFloat( "27A" );
 document.write( "7." + b + "<BR>" );
```

parseFloat("27A") → membaca angka di awal string (27), berhenti ketika ada huruf.

Hasil = 27.

Output: 7.27.

```html
 b = parseFloat( "A27.5" ); 
 document.write( "8." + b + "<BR>" )
```

parseFloat("A27.5") → string diawali huruf → tidak bisa dikonversi.

Hasil = NaN.

Output: 8.NaN.

# 7. Memasukkan Data #
```html
 var nama = prompt("Siapa nama Anda?");
```
Menampilkan prompt box kepada pengguna dengan pesan "Siapa nama Anda?".

User bisa mengetik sesuatu lalu klik OK atau klik Cancel.

Nilai yang dimasukkan user disimpan ke variabel nama.

Jika user isi → variabel berisi teks input.

Jika klik Cancel → variabel berisi null.

```html
 document.write("Hai, " + nama);
```
Menulis ke dokumen teks "Hai, " ditambah isi variabel nama.

Jika user mengetik "Ainil", maka output di halaman:

```html
Hai, Ainil
```
# 8. Mendeklarasikan Variabel #
```html
var VariabelKu;
```
Mendeklarasikan variabel bernama VariabelKu tanpa memberi nilai.

Secara default nilainya undefined.

```html
var VariabelKu2 = 3;
```
Mendeklarasikan variabel VariabelKu2 dan langsung diberi nilai 3.

```html
VariabelKu = 1234;
```
Memberikan nilai 1234 ke variabel VariabelKu.

Jadi sekarang: VariabelKu = 1234, VariabelKu2 = 3.

```html
document.write(VariabelKu*VariabelKu2);
```
Mengalikan isi variabel VariabelKu (1234) dengan VariabelKu2 (3).

Hasil: 3702.

document.write menuliskan hasil tersebut langsung ke halaman web.