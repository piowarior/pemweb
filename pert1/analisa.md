
# Analisis

---

## Website 

### 1. **What (Apa itu Website?)**
Website adalah kumpulan halaman yang berisi informasi dalam bentuk teks, gambar, video, dan elemen interaktif lainnya yang dapat diakses melalui internet menggunakan browser.

### 2. **Who (Siapa yang Menggunakan Website?)**
Website digunakan oleh individu, perusahaan, organisasi, dan instansi pemerintah untuk berbagai keperluan seperti bisnis, edukasi, hiburan, dan komunikasi.

### 3. **When (Kapan Website Digunakan?)**
Website dapat digunakan kapan saja selama tersedia akses internet. Perusahaan menggunakan website untuk promosi, layanan pelanggan, dan transaksi bisnis secara online.

### 4. **Where (Di Mana Website Diakses?)**
Website dapat diakses dari mana saja menggunakan perangkat seperti komputer, laptop, tablet, atau smartphone melalui jaringan internet.

### 5. **Why (Mengapa Website Dibutuhkan?)**
Website diperlukan karena mempermudah akses informasi, memperluas jangkauan bisnis, meningkatkan komunikasi, serta memungkinkan layanan dan transaksi digital secara efisien.

### 6. **How (Bagaimana Website Bekerja?)**
Website bekerja dengan cara pengguna mengakses alamat domain (misalnya, `www.example.com`). Permintaan ini dikirim ke server web, yang kemudian mengirimkan kembali halaman web yang akan ditampilkan di browser pengguna.

# **Analisis SWOT Website**

## **1. Strength (Kekuatan)**
- Dapat diakses kapan saja dan dari mana saja dengan internet.
- Memudahkan penyebaran informasi secara global.
- Mendukung interaksi melalui formulir, komentar, atau fitur live chat.
- Meningkatkan kredibilitas bisnis atau individu.
- Dapat dioptimalkan untuk SEO agar lebih mudah ditemukan.

## **2. Weakness (Kelemahan)**
- Membutuhkan biaya untuk domain, hosting, dan pemeliharaan.
- Rentan terhadap serangan keamanan seperti hacking atau malware.
- Bergantung pada koneksi internet untuk aksesibilitas.
- Desain dan kecepatan loading yang buruk bisa mengurangi pengalaman pengguna.

## **3. Opportunity (Peluang)**
- Potensi untuk menjangkau audiens global tanpa batasan geografis.
- Dapat dimonetisasi melalui iklan, e-commerce, atau layanan berlangganan.
- Teknologi web terus berkembang, memungkinkan inovasi baru.
- Integrasi dengan media sosial untuk meningkatkan engagement.

## **4. Threat (Ancaman)**
- Persaingan tinggi dengan banyaknya website di internet.
- Perubahan algoritma mesin pencari bisa mempengaruhi visibilitas.
- Keamanan data pengguna harus dijaga untuk menghindari kebocoran.
- Perubahan tren teknologi dapat membuat website harus terus diperbarui.



## Pemrograman Web
Pemrograman web adalah proses pembuatan dan pengembangan aplikasi berbasis web yang dapat diakses melalui browser. 

Pemrograman web dapat dipelajari dan digunakan oleh pengembang web, perusahaan IT, startup, serta siapa saja yang ingin membuat website atau aplikasi berbasis web.

---


## **Docker**

### 1. **What (Apa itu Docker?)**
Docker adalah platform open-source yang digunakan untuk mengembangkan, mengemas, dan menjalankan aplikasi dalam container. Container adalah unit ringan yang berisi semua dependensi aplikasi, sehingga dapat dijalankan secara konsisten di berbagai lingkungan.

### 2. **Who (Siapa yang Menggunakan Docker?)**
Docker digunakan oleh:
- **Developer** untuk mengembangkan dan menguji aplikasi secara konsisten.
- **DevOps Engineer** untuk otomatisasi deployment dan manajemen infrastruktur.
- **Perusahaan IT** untuk meningkatkan efisiensi dan fleksibilitas pengelolaan aplikasi.
- **Startup** yang ingin skalabilitas tanpa overhead besar.

### 3. **When (Kapan Docker Digunakan?)**
Docker digunakan saat:
- Pengembangan aplikasi memerlukan lingkungan yang konsisten.
- Deployment aplikasi harus cepat dan efisien.
- Skalabilitas aplikasi dibutuhkan dengan cepat tanpa konfigurasi ulang yang kompleks.
- Tim pengembang bekerja di berbagai sistem operasi yang berbeda.

### 4. **Where (Di Mana Docker Dapat Digunakan?)**
Docker dapat digunakan di berbagai lingkungan:
- **Lokal** di komputer pengembang.
- **Server** untuk menjalankan aplikasi di cloud atau on-premises.
- **CI/CD Pipeline** untuk otomatisasi build, test, dan deployment aplikasi.
- **Cluster Kubernetes** untuk manajemen container dalam skala besar.

### 5. **Why (Mengapa Docker Diperlukan?)**
Docker diperlukan karena:
- **Konsistensi** – Menghilangkan masalah "works on my machine" dengan lingkungan yang terstandarisasi.
- **Portabilitas** – Container dapat berjalan di mana saja tanpa perlu instalasi ulang dependensi.
- **Efisiensi** – Menggunakan sumber daya lebih sedikit dibandingkan virtual machine.
- **Skalabilitas** – Mudah dikembangkan dari satu container menjadi banyak dengan load balancing.

### 6. **How (Bagaimana Docker Bekerja?)**
Docker bekerja dengan cara:
1. Developer membuat **Dockerfile** yang berisi instruksi untuk membangun image aplikasi.
2. **Docker Image** dibuat dari Dockerfile dan disimpan di registry (seperti Docker Hub).
3. **Container** dijalankan dari image yang sudah dibuat.
4. Container dapat dikelola dengan perintah seperti `docker run`, `docker stop`, dan `docker remove`.
5. Untuk skala besar, container dapat dikelola menggunakan **Docker Compose** atau **Kubernetes**.

---

## **Analisa SWOT Docker**

### **1. Strengths (Kekuatan Docker)**
✅ **Ringan dan Efisien** – Tidak memerlukan OS terpisah seperti VM, sehingga lebih cepat.
✅ **Konsistensi** – Aplikasi berjalan di lingkungan yang sama, mengurangi bug akibat perbedaan konfigurasi.
✅ **Portabilitas** – Dapat berjalan di berbagai platform (Windows, Mac, Linux, Cloud).
✅ **Scalability** – Mudah dikembangkan menjadi sistem yang lebih besar menggunakan Kubernetes atau Docker Swarm.
✅ **Ekosistem yang Kuat** – Didukung oleh komunitas besar dan berbagai layanan cloud seperti AWS, Azure, dan Google Cloud.

### **2. Weaknesses (Kelemahan Docker)**
❌ **Keamanan** – Karena berbagi kernel dengan host OS, ada risiko keamanan lebih tinggi dibandingkan VM.
❌ **Kompleksitas dalam Skala Besar** – Mengelola banyak container memerlukan orkestrasi tambahan seperti Kubernetes.
❌ **Performa untuk Aplikasi Berat** – Tidak cocok untuk aplikasi yang memerlukan sumber daya tinggi seperti database besar.

### **3. Opportunities (Peluang Docker)**
🚀 **Adopsi Cloud yang Meningkat** – Docker semakin populer dalam deployment berbasis cloud.
🚀 **Integrasi dengan DevOps** – Mendukung CI/CD pipeline untuk mempercepat pengembangan dan deployment aplikasi.
🚀 **Perkembangan Teknologi Container** – Ekosistem container berkembang pesat dengan berbagai inovasi seperti serverless dan edge computing.

### **4. Threats (Ancaman terhadap Docker)**
⚠️ **Persaingan dengan Teknologi Lain** – Podman, LXC, dan containerd mulai menjadi alternatif Docker.
⚠️ **Regulasi Keamanan** – Beberapa perusahaan dan organisasi memiliki aturan ketat tentang keamanan container.
⚠️ **Kurva Pembelajaran** – Pengguna baru memerlukan waktu untuk memahami konsep dan best practices dalam Docker.

---

## **Kesimpulan**
Docker adalah solusi yang efisien dan fleksibel untuk pengembangan serta deployment aplikasi. Dengan konsistensi, portabilitas, dan skalabilitas yang tinggi, Docker semakin menjadi standar dalam pengembangan modern. Namun, perlu diperhatikan tantangan keamanan, kompleksitas skala besar, dan kebutuhan akan orkestrasi tambahan. Dengan pemahaman yang tepat, Docker dapat menjadi alat yang sangat berguna dalam ekosistem IT saat ini.

---

# HTML

# **Analisis 5W 1H HTML**

## **1. What (Apa itu HTML?)**  
HTML (**HyperText Markup Language**) adalah bahasa markup yang digunakan untuk membuat dan menyusun struktur halaman web.

## **2. Who (Siapa yang Menggunakan HTML?)**  
HTML digunakan oleh web developer, desainer web, dan siapa saja yang ingin membuat atau mengelola halaman web.

## **3. When (Kapan HTML Digunakan?)**  
HTML digunakan saat membuat, mengedit, atau memperbarui struktur halaman web agar bisa ditampilkan di browser.

## **4. Where (Di Mana HTML Diterapkan?)**  
HTML diterapkan pada semua halaman web dan dapat digunakan di berbagai platform, seperti desktop, mobile, dan aplikasi berbasis web.

## **5. Why (Mengapa HTML Penting?)**  
HTML penting karena menjadi dasar dari semua halaman web, memungkinkan penyusunan teks, gambar, link, dan elemen lainnya dalam tampilan yang terstruktur.

## **6. How (Bagaimana HTML Bekerja?)**  
HTML bekerja dengan menggunakan tag dan elemen untuk mendefinisikan struktur halaman web, yang kemudian diterjemahkan oleh browser menjadi tampilan visual.


## SWOT dalam HTML

SWOT adalah analisis dalam pengembangan HTML yang mencakup:

1. **S**trengths (Kekuatan) - Keunggulan HTML seperti kemudahan penggunaan, kompatibilitas luas, dan fleksibilitas dalam pengembangan web.
2. **W**eaknesses (Kelemahan) - Keterbatasan HTML, seperti kurangnya fungsionalitas dinamis tanpa bantuan CSS atau JavaScript.
3. **O**pportunities (Peluang) - Tren baru dalam pengembangan web, seperti HTML5 yang mendukung elemen multimedia dan interaktivitas lebih baik.
4. **T**hreats (Ancaman) - Persaingan dengan teknologi baru seperti WebAssembly atau framework yang mengurangi kebutuhan untuk menulis HTML secara langsung.


---

# Coding

## **Struktur Folder Project**
```
pert1/
├── coding/
│   ├── nginx/
│   │   ├── nginx.conf
│   ├── src/
│   │   ├── div.html
│   │   ├── index.html
```

### **Penjelasan Tiap File**
1. **.env** – File ini digunakan untuk menyimpan variabel lingkungan (environment variables), agar konfigurasi proyek lebih fleksibel dan tidak perlu ditulis langsung di `docker-compose.yml`.
   - `COMPOSE_PROJECT_NAME=esgul` → Menentukan nama proyek Docker Compose.
   - `REPOSITORY_NAME=pemweb` → Nama repository untuk menyimpan image.
   - `IMAGE_TAG=latest` → Menentukan tag image Docker yang digunakan (dalam hal ini versi terbaru).

2. **nginx.conf** – File konfigurasi untuk server web Nginx.
```nginx
server {
    listen 80;
    server_name localhost;

    root /usr/share/nginx/html;
    index index.html;

    location / {
        try_files $uri $uri/ =404;
    }
}
```
**Penjelasan:**
- `listen 80;` → Server mendengarkan permintaan HTTP di port 80.
- `server_name localhost;` → Nama server yang digunakan (localhost dalam pengembangan lokal).
- `root /usr/share/nginx/html;` → Direktori root tempat file website disimpan.
- `index index.html;` → File utama yang akan dibuka pertama kali.
- `location / { try_files $uri $uri/ =404; }` → Jika halaman tidak ditemukan, akan mengembalikan error 404.

3. **docker-compose.yml** – File yang digunakan untuk mendefinisikan layanan (services) dalam Docker.
```yaml
version: '3'

services:
  web:
    image: nginx:latest
    ports:
      - 80:80
    volumes:
      - ./nginx/nginx.conf:/etc/nginx/conf.d/default.conf
      - ./src:/usr/share/nginx/html
```
**Penjelasan:**
- `version: '3'` → Versi Docker Compose yang digunakan.
- `services:` → Bagian ini mendefinisikan layanan yang berjalan dalam container.
- `web:` → Nama layanan (web server Nginx).
- `image: nginx:latest` → Menggunakan image Nginx versi terbaru.
- `ports:` → Menghubungkan port host ke container (`80:80` berarti host dan container menggunakan port 80).
- `volumes:` → Menghubungkan file di host ke dalam container:
  - `./nginx/nginx.conf:/etc/nginx/conf.d/default.conf` → Menggunakan konfigurasi Nginx kustom.
  - `./src:/usr/share/nginx/html` → Direktori tempat menyimpan file HTML untuk website.

---

## **Docker Volumes**
**Volumes** digunakan untuk menyimpan dan berbagi data antar container dalam Docker. Manfaatnya:
1. **Persistensi Data** – Data tetap ada meskipun container dihentikan atau dihapus.
2. **Berbagi Data Antar Container** – Memungkinkan beberapa container mengakses data yang sama.
3. **Efisiensi Penyimpanan** – Mengurangi duplikasi data di dalam container.

---

## **Kesimpulan**
- Website adalah alat penting dalam dunia digital yang dapat diakses kapan saja dan dari mana saja.
- Pemrograman web memungkinkan pembuatan aplikasi yang fleksibel dan tidak memerlukan instalasi.
- HTML adalah dasar dari struktur halaman web yang perlu dipahami sebelum mempelajari CSS dan JavaScript.
- Dalam proyek ini, Nginx digunakan sebagai web server dengan konfigurasi yang diatur melalui `nginx.conf`.
- Docker digunakan untuk menjalankan layanan secara terisolasi, dengan konfigurasi diatur dalam `docker-compose.yml`.
- **Volumes** dalam Docker digunakan untuk memastikan data tetap ada meskipun container dihentikan atau dihapus.

---

sumber
 https://chatgpt.com
 https://docs.docker.com/

**Catatan ini akan terus diperbarui sesuai perkembangan materi. terakhir di catat 07:00 - 12:00**



**TUGAS**

