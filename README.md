
# Laravel UUID Tool | ابزار تولید UUID برای لاراول

🎯 یک پکیج ساده و کاربردی برای تولید UUID به صورت عددی یا رشته‌ای در پروژه‌های Laravel.

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
```

## 🔒 License | لایسنس

MIT © TahaaZare