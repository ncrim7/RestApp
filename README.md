# RestApp

RestApp, restoran yönetimi ve yemek siparişlerini yönetmek için oluşturulmuş bir web uygulamasıdır. Bu uygulama, Laravel framework'ü kullanılarak geliştirilmiştir.

## Özellikler

- Kategori yönetimi
- Ürün yönetimi
- Şifreli giriş ve oturum
- 
- Admin paneli

## Gereksinimler

- PHP >= 8.0
- MySQL
- Composer
- Node.js ve NPM
- Laravel >= 8.x

## Kurulum

### 1. Projeyi Klonlayın
```bash
git clone https://github.com/bomb1338/RestApp.git
cd RestApp
```


### 2. Gerekli Bağımlılıkları Yükleyin
```bash
composer install
npm install

```

### 3. .env Dosyasını Yapılandırın
Proje dizininde .env.example dosyasını .env olarak kopyalayın ve gerekli yapılandırmaları yapın.
```bash
cp .env.example .env
```
### 4. Uygulama Anahtarını Oluşturun
```bash
php artisan key:generate
```
### 5. Veritabanını Migrasyon ve Seed ile Kurun
```bash
php artisan migrate --seed
```
### 6. Uygulamayı Çalıştırın
```bash
php artisan serve
```
Tarayıcınızda http://localhost:8000 adresine giderek uygulamayı görüntüleyebilirsiniz.
### 7. Admin Paneline Erişim
Admin paneline erişmek için tarayıcınızda http://localhost:8000/admin/login adresine gidin.

Varsayılan Admin Giriş Bilgileri
Email: admin@gmail.com
Parola: admin

### Katkıda Bulunma
Katkıda bulunmak istiyorsanız, lütfen bir pull request gönderin. Her türlü katkı memnuniyetle karşılanır.
