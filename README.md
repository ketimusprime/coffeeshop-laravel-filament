<p align="center">
  <img src="KetimusPrime.png" width="180" alt="Project Logo">
</p>

<h1 align="center">Portofolio Laravel + Filament</h1>

<p align="center">
  A modern portfolio website built using <b>Laravel 11</b> and <b>FilamentPHP</b>.
  <br>Manage projects, skills, experiences, blogs, and more using a beautiful admin panel.
</p>

---

## 🚀 Features

- Modern & Easy Shop website
- Scan the QR code on your table. 
- Powerful Filament Admin Dashboard  
- CRUD Product
- CRUD Category
- CRUD Generated Table
- Monitoring Payment
- Payment Options
- Integrated Payment Gateway

---

## 🖼 Demo Preview

### Website Preview
![Website Screenshot](pay.png)


---

## ⚙️ Installation (Local)

```bash
git clone https://github.com/username/coffeeshop-laravel-filament.git
cd portofolio-laravel-filament

composer install
npm install && npm run build

cp .env.example .env
php artisan key:generate

php artisan migrate --seed

php artisan serve
