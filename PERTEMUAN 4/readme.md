#ANALISIS BIOGRAFI 2

```html
    <nav>
    <a href="#slide1">HOME</a>
    <a href="#slide2">PORTOFOLIO</a>
    <a href="#slide3">GALERI FOTO</a>
     </nav>
```
Tag nav digunakan untuk membuat navigasi utama pada halaman web. Di dalamnya terdapat tiga tautan a yang berfungsi sebagai tombol menu.
Tautan pertama menuju ke slide1 (HOME), tautan kedua ke slide2 (PORTOFOLIO), dan tautan ketiga ke slide3 (GALERI FOTO).
Setiap link menggunakan href="#id" untuk menampilkan slide tertentu sesuai dengan ID pada div slide yang ada di bawah.
Dengan kata lain, klik pada menu HOME akan menampilkan slide1, klik PORTOFOLIO akan menampilkan slide2, dan klik GALERI FOTO akan menampilkan slide3.

```html
    nav {
      background:#222;
      display:flex;
      justify-content:center;
      gap:30px;
      padding:12px;
      font-weight:bold;
      position:fixed;
      top:0;left:0;width:100%;
      z-index:1000;
    }
    nav a {
      color:white;
      text-decoration:none;
      font-size:16px;
      padding:6px 12px;
      transition:.3s;
    }
    nav a:hover {
      background:white;
      color:#222;
      border-radius:5px;
    }
```
Selector nav mengatur tampilan area navigasi.background:#222; memberi warna latar hitam keabu-abuan.
display:flex; justify-content:center; membuat isi navbar disusun rata tengah dengan flexbox.
gap:30px; memberi jarak 30 piksel antar menu. padding:12px; menambahkan ruang dalam navbar agar tidak terlalu rapat.font-weight:bold; membuat teks menu lebih tebal.
position:fixed; top:0; left:0; width:100%; membuat navbar menempel di atas layar dan lebarnya penuh, sehingga selalu terlihat meskipun halaman digulir.
z-index:1000; memastikan navbar tetap berada di atas elemen lain.
Selector nav a mengatur link di dalam navbar.
color:white; membuat teks berwarna putih.
text-decoration:none; menghilangkan garis bawah default pada link.
font-size:16px; mengatur ukuran teks.
padding:6px 12px; menambah ruang agar link lebih mudah diklik.
transition:.3s; menambahkan efek transisi halus saat ada perubahan gaya.
Selector nav a:hover memberi efek saat kursor diarahkan ke menu.
background:white; color:#222; membalik warna menjadi teks hitam dengan latar putih.
border-radius:5px; memberi sudut melengkung agar lebih modern.

```html
    <div id="slide2" class="slide">
    <div class="content">
    <h1>PORTOFOLIO SAYA</h1>
    <div class="grid">
    <div class="section biodata">
    <h2>BIODATA</h2>
    <p><b>Nama:</b> Ainil Magsurah</p>
    <p><b>Asal:</b> Bone, Sulawesi Selatan</p>
    <p><b>Status:</b> Mahasiswi</p>
    </div>
    </div>
    </div>
    </div>
```
Slide kedua berisi Portofolio. `<h1>` digunakan untuk judul utama. `<div class="grid">` membagi isi portofolio menjadi beberapa kolom: Biodata, Pendidikan, Organisasi, dan Media Sosial.
Bagian Biodata berisi nama, asal, dan status.Bagian Pendidikan menampilkan riwayat sekolah.
Bagian Organisasi mencatat organisasi yang diikuti.Bagian Media Sosial berisi link ke Instagram, TikTok, dan GitHub, lengkap dengan ikon Font Awesome.

```html
.grid{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:15px;
}
.section{background:#e6f2ff;padding:12px;border-radius:10px}
.section p{margin:4px 0;font-size:14px}
.biodata p b{display:inline-block;width:120px}
```
.grid mengatur tata letak isi portofolio menjadi dua kolom.
.section memberi latar biru muda, padding, dan sudut melengkung untuk setiap blok informasi.
.section p membuat paragraf lebih rapi dengan jarak kecil antar baris.
.biodata p b memberi lebar khusus pada label (seperti "Nama:" atau "Asal:") agar rata sejajar.

```html
.gallery {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 15px;
  padding: 20px;
}
.gallery img {
  width: 100%;
  height: 400px;  
  object-fit: cover; 
  border-radius: 12px;
  cursor: pointer;
  transition: transform .3s;
}
```

.gallery img:hover { transform: scale(1.03); }
.gallery mengatur tata letak galeri dalam dua kolom.
Gambar diset agar memenuhi kotak (width:100%) dengan tinggi tetap 400px.
object-fit:cover; menjaga proporsi gambar.
border-radius:12px; memberi sudut melengkung.
cursor:pointer; membuat kursor berubah saat diarahkan ke gambar.
:hover menambahkan efek zoom kecil ketika gambar disentuh.

```html
  <div id="foto1" class="modal">
    <a href="#slide3" class="close">&times;</a>
    <img class="modal-content" src="photo1.jpeg">
  </div>
```
Modal ini digunakan untuk menampilkan foto dalam ukuran besar.
`<div id="foto1" class="modal">` berfungsi sebagai layar overlay.
`<a href="#slide3" class="close">&times;</a>` adalah tombol tutup yang mengembalikan tampilan ke galeri.
`<img>` menampilkan foto dengan ukuran lebih besar.

```html
.modal {
  display:none;
  position:fixed;
  z-index:999;
  left:0;top:0;width:100%;height:100%;
  background:rgba(0,0,0,0.8);
}
.modal:target {display:block;}
.modal-content {
  margin:auto;
  display:block;
  max-width:80%;
  max-height:80%;
  border-radius:10px;
  position:relative;
  top:50%;
  transform:translateY(-50%);
}
.close {
  position:absolute;top:15px;right:25px;
  color:white;font-size:30px;font-weight:bold;text-decoration:none;
}
```
.modal membuat layar penuh gelap untuk menampilkan foto. Awalnya tersembunyi (display:none).
.modal:target membuat modal muncul ketika link foto diklik.
.modal-content menampilkan gambar di tengah layar dengan ukuran maksimal 80% dari layar.
.close adalah tombol X di pojok kanan atas untuk menutup modal.