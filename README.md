
# Laravel UUID Tool | ابزار تولید UUID برای لاراول

🎯 یک پکیج ساده و کاربردی برای تولید UUID به صورت عددی یا رشته‌ای در پروژه‌های Laravel.
####  تولید یک مقدار یکتا برای ستون مشخصی از یک مدل لاراول (مثلاً uuid)، که می‌تواند به صورت رشته‌ای (string) یا عددی (int) باشد.
---

## 📦 Install | نصب

```bash
composer require tahaazare/laravel-uuid-tool
```


## ⚙️ Usage | نحوه استفاده

### ✅ Basic Usage | استفاده پایه

```php
$uuidTool = app('uuidtool');

$uuidString = $uuidTool->generate('string'); // خروجی رشته‌ای
$uuidInt = $uuidTool->generate('int');       // خروجی عددی
$model->uuid = UuidGenerator::generateFor(Model::class,'uuid','int',4); // تولید یک مقدار یکتا برای ستون مشخصی از یک مدل لاراول (مثلاً uuid)، که می‌تواند به صورت رشته‌ای (string) یا عددی (int) باشد.

echo $uuidString;
// مثال: 3c9c8827-2c4d-4986-a6ba-8590b7d5c1e0

echo $uuidInt;
// مثال: 808234782387283472837473287
```

---

## 🧩 Laravel Auto Discovery

این پکیج از Auto-Discovery لاراول پشتیبانی می‌کند و نیازی به افزودن دستی provider نیست.


```php
UuidGenerator::generate('string');
UuidGenerator::generate('string',12);
UuidGenerator::generate('int',12);
UuidGenerator::generate('int',12);
UuidGenerator::generateFor(Model::class,'uuid','int',4);
UuidGenerator::generateFor(Model::class,'uuid','string',4);
```

## 🔒 License | لایسنس

MIT © TahaaZare
