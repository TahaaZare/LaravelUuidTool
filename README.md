
# Laravel UUID Tool | ابزار تولید UUID برای لاراول

🎯 یک پکیج ساده و کاربردی برای تولید UUID به صورت عددی یا رشته‌ای در پروژه‌های Laravel.

---

## 📦 نصب (Installation)

### 🔹 روش ۱: نصب از Packagist

```bash
composer require tahazare/laravel-uuidtool
```

### 🔹 روش ۲: استفاده از نسخه لوکال (برای توسعه)

اگر می‌خواهید پکیج را از طریق مسیر محلی نصب کنید:

1. مسیر پکیج را در فایل `composer.json` پروژه لاراولی خود اضافه کنید:

```json
"repositories": [
  {
    "type": "path",
    "url": "../laravel-uuidtool"
  }
]
```

2. سپس دستور زیر را اجرا کنید:

```bash
composer require tahazare/laravel-uuidtool
```

---

## ⚙️ Usage | نحوه استفاده

### ✅ Basic Usage | استفاده پایه

```php
$uuidTool = app('uuidtool');

$uuidString = $uuidTool->generate('string'); // خروجی رشته‌ای
$uuidInt = $uuidTool->generate('int');       // خروجی عددی

echo $uuidString;
// مثال: 3c9c8827-2c4d-4986-a6ba-8590b7d5c1e0

echo $uuidInt;
// مثال: 808234782387283472837473287
```

---

### ✅ Route Example | مثال در روت

```php
Route::get('/uuid', function () {
    $uuidTool = app('uuidtool');

    return [
        'uuid_string' => $uuidTool->generate('string'),
        'uuid_int' => $uuidTool->generate('int'),
    ];
});
```

---

## 🧩 Laravel Auto Discovery

این پکیج از Auto-Discovery لاراول پشتیبانی می‌کند و نیازی به افزودن دستی provider نیست.

---

## 🔧 Optional: Add Facade | افزودن facade (اختیاری)

اگر دوست دارید راحت‌تر استفاده کنید:

```php
'aliases' => [
    'UuidTool' => Tahazare\LaravelUuidTool\Facades\UuidTool::class,
],
```

و سپس:

```php
UuidTool::generate('string');
```

---

## ✅ Types | انواع خروجی‌ها

| نوع | مقدار | توضیح |
|-----|--------|-------|
| string | `'string'` | UUID نسخه ۴ استاندارد (مثال: `3c9c-...`) |
| int | `'int'` | UUID به عدد ۳۶ رقمی تبدیل می‌شود |

---

## 🔒 License | لایسنس

[MIT license](https://opensource.org/licenses/MIT) © TahaaZare
