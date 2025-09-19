# ANALISIS BIOGRAFI
1. Bagian awal html
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portofolio Saya</title>

Bagian ini adalah struktur dasar HTML. Tag <html lang="id"> menunjukkan bahasa utama halaman adalah Bahasa Indonesia. Pada <head> terdapat pengaturan viewport agar halaman responsif, title untuk memberi judul tab browser, serta link ke Font Awesome agar bisa menggunakan ikon media sosial seperti Instagram, TikTok, dan GitHub.

2. Bagian Css
```html
<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:Arial,sans-serif}
body,html{height:100%;overflow:hidden;background:#f0f8ff}
.slide{width:100%;height:100vh;position:absolute;top:0;left:100%;transition:0.8s}
.show{left:0}
</style>
```

Kode di atas mengatur gaya dasar halaman: semua elemen diberi margin dan padding nol, font bawaan Arial, dan box-sizing: border-box agar perhitungan lebar lebih konsisten. Latar belakang halaman berwarna biru muda (#f0f8ff) dengan tinggi penuh 100%.

```html
.slide{width:100%;height:100vh;position:absolute;top:0;left:100%;transition:0.8s}
.show{left:0}
```

Bagian ini mengatur animasi slide antar halaman. Default setiap slide berada di luar layar (left:100%), dan akan muncul ke layar jika diberi class .show.

```html
.cover,.content{display:flex;flex-direction:column;align-items:center;justify-content:center;height:100%}
.cover{background:#6aaef7;color:#fff;text-align:center}
```

.cover digunakan untuk slide pertama (halaman pembuka). Tampilannya biru dengan teks putih, konten diposisikan di tengah secara vertikal dan horizontal.

```html
.cover img{
width:180px;height:180px;object-fit:cover;
border-radius:50%;border:5px solid #fff;
animation:float 3s ease-in-out infinite;
}
```

Foto profil berbentuk lingkaran (border-radius:50%) dengan ukuran tetap 180×180 piksel, diberi border putih, dan animasi float membuat gambar naik-turun perlahan sehingga lebih hidup.

```html
.btn{margin-top:20px;padding:10px 25px;border:none;border-radius:20px;
background:#fff;color:#69aef8;font-weight:bold;cursor:pointer;transition:.3s}
.btn:hover{background:#e0e0e0}
```

Tombol didesain dengan warna dasar putih, teks biru, bentuk oval, dan saat diarahkan kursor berubah warna menjadi abu-abu muda.

```html
.content{
background:#fff;color:#333;padding:20px;
display:flex;flex-direction:column;align-items:stretch;
height:100%;overflow:hidden
}
```
Slide kedua menggunakan class .content. Latar belakang putih, teks abu-abu gelap, kontennya ditata fleksibel ke arah kolom dengan padding agar lebih rapi.

```html
h1{text-align:center;color:#1e90ff;margin-bottom:10px;font-size:20px}
h2{background:#1e90ff;color:#fff;padding:6px 12px;border-radius:8px;margin-bottom:8px;font-size:16px}
```
Judul utama diberi warna biru (#1e90ff) dan rata tengah, sedangkan subjudul memiliki latar biru dengan teks putih dan sudut melengkung.

```html
.grid{
flex:1;
display:grid;
grid-template-columns:1fr 1fr;
grid-template-rows:1fr 1fr;
gap:15px;
}
```
Bagian isi slide kedua ditata dengan grid 2 kolom × 2 baris, sehingga ada empat kotak: Biodata, Pengalaman Organisasi, Pendidikan, dan Media Sosial.

```html
.section{background:#e6f2ff;padding:12px;border-radius:10px;overflow:auto}
.section p{margin:4px 0;line-height:1.4;font-size:14px}
.biodata p b{display:inline-block;width:120px}
```
Kotak bagian isi (.section) berwarna biru muda dengan sudut melengkung, teks kecil agar ringkas, dan pada biodata bagian label (NAMA, ASAL, dll.) ditata agar rata sejajar.

```html
.social-links{display:flex;flex-direction:column;gap:10px}
.social-links a{
text-decoration:none;
color:#1e90ff;
font-weight:bold;
font-size:14px;
display:flex;
align-items:center;
gap:8px;
transition:.3s;
}
.social-links a:hover{color:#00509e}
.bottom-btn{margin-top:10px;text-align:center}
```
Bagian media sosial menampilkan link Instagram, TikTok, dan GitHub dengan ikon. Link berwarna biru dan berubah jadi biru tua saat diarahkan. Tombol kembali (bottom-btn) ditaruh di bagian bawah.

```html
3. Slide Pertama
<div id="slide1" class="slide show">
<div class="cover">
<img src="foto.jpg.jpeg" alt="Foto Ainil">
<h1>AINIL MAGSURAH</h1>
<button class="btn" onclick="nextSlide()">NEXT KUY ➝</button>
</div>
</div>
```
Slide pertama menampilkan foto profil Ainil Magsurah, nama lengkap, dan sebuah tombol untuk menuju ke slide berikutnya.

```html
4. Slide Kedua
<div id="slide2" class="slide">
<div class="content">
<h1>TENTANG SAYA</h1>
<p style="text-align:center;font-size:14px;margin-bottom:10px;">
Halo, nama saya Ainil Magsurah, biasa dipanggil Ainil/Aiy. Saya seorang mahasiswi Universitas Negeri Makassar.<br>
Saya memiliki pengalaman organisasi, salah satunya Palang Merah Remaja.<br>
Hobi saya memasak, traveling, dan mengeksplor tempat-tempat baru seperti cafe dan tempat wisata alam.
</p>
```
Awal slide kedua menjelaskan tentang diri Ainil Magsurah, mencakup nama, status sebagai mahasiswi, pengalaman organisasi, dan hobi.

```html
<div class="grid">
<div class="section biodata">
<h2>BIODATA SAYA</h2>
<p><b>NAMA:</b> AINIL MAGSURAH</p>
<p><b>ASAL:</b> BONE, SULAWESI SELATAN</p>
<p><b>TANGGAL LAHIR:</b> 25 SEPTEMBER 2006</p>
<p><b>JENIS KELAMIN:</b> PEREMPUAN</p>
<p><b>STATUS:</b> MAHASISWI</p>
</div>
```
Kotak pertama berisi Biodata, seperti nama, asal daerah, tanggal lahir, jenis kelamin, dan status.

```html
<div class="section">
<h2>PENGALAMAN BERORGANISASI</h2>
<p>1.<b>ANGGOTA OSIS</b> (SMPN 1 KOTA SORONG) (2018-2019)</p>
<p>2.<b>ANGGOTA PADUAN SUARA</b> (SMPN1 KOTA SORONG) (2018-2019)</p>
<p>3.<b>ANGGOTA INTI PRAMUKA</b> (SMPN 1 KOTA SORONG) (2018-2019)</p>
<p>4.<b>KETUA BIDANG DIKLAT-PIM OSIM</b> (MA ANNUR NUSA) (2023-2024)</p>
<p>5.<b>SEKRETARIS PMR</b> (MA ANNUR NUSA) (2023-2024)</p>
<p>6.<b>ANGGOTA BIDANG HUMAS FORPIS</b> (2023-2024)</p>
</div>
```
Kotak kedua berisi daftar pengalaman organisasi, mulai dari SMP hingga MA, termasuk OSIS, Paduan Suara, Pramuka, PMR, hingga FORPIS.

```html
<div class="section">
<h2>PENDIDIKAN</h2>
<p>1.SD 103 HBM KOTA SORONG</p>
<p>2.MTS ANNUR NUSA</p>
<p>3.MA ANNUR NUSA</p>
<p>4.UNIVERSITAS NEGERI MAKASSAR</p>
</div>
```
Kotak ketiga menampilkan riwayat pendidikan dari SD hingga Universitas Negeri Makassar.

```html
<div class="section">
<h2>MEDIA SOSIAL</h2>
<div class="social-links">
<a href="https://instagram.com/ainilmgh__" onclick="openLink(event,this.href)" target="_blank">
<i class="fab fa-instagram"></i> Instagram
</a>
<a href="https://tiktok.com/@_aiiiii2" onclick="openLink(event,this.href)" target="_blank">
<i class="fab fa-tiktok"></i> TikTok
</a>
<a href="https://github.com/Aiiyy25" onclick="openLink(event,this.href)" target="_blank">
<i class="fab fa-github"></i> GitHub
</a>
</div>
</div>
```
Kotak keempat berisi media sosial berupa Instagram, TikTok, dan GitHub yang dapat diklik.

```html
<div class="bottom-btn">
<button class="btn" onclick="prevSlide()">⟵ KEMBALI EYY</button>
</div>
```
Tombol di bagian bawah digunakan untuk kembali ke slide pertama.

```html
<script>
function nextSlide(){
document.getElementById("slide1").classList.remove("show");
document.getElementById("slide2").classList.add("show");
}
function prevSlide(){
document.getElementById("slide2").classList.remove("show");
document.getElementById("slide1").classList.add("show");
}

function openLink(event, url){
event.preventDefault();
window.open(url, "_blank");
document.getElementById("slide1").classList.remove("show");
document.getElementById("slide2").classList.add("show");
}
</script>
```
Bagian ini adalah kode JavaScript. Fungsi nextSlide() digunakan untuk pindah dari slide 1 ke slide 2, sedangkan prevSlide() sebaliknya. Fungsi openLink() dipakai agar saat klik media sosial, link terbuka di tab baru tetapi tampilan tetap berada di slide biodata.
