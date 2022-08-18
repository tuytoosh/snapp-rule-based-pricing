### این پروژه در فریمورک laravel mvc طراحی شده است و یک قیمت با یکسری کاندیشن را دریافت میکند و رول هایی که مطابق با ان کاندیشن ها بودند را اعمال میکند تا قیمت تغییر کند
# دیتابیس
#### جدول شرط هارا در دیتابیس بصورت زیر طراحی کردیم برای داشتن فلکسیبیلیتی به ازای هر کاندیشن از طریق 1 فایل کانفیگ که به کد اضافه کردیم ان کاندیشن را به جدول  کاندیشن دیتابیس اضافه میکند , به ازای هر ماندیشن جدید یک کالمن یه جدول ماندیشن ها اضافه میشود
<p align="center">

<img width="400" alt="Screen Shot 2022-08-18 at 13 08 37" src="https://user-images.githubusercontent.com/97462859/185374936-ee86ac22-5894-4c29-8a71-d54451ea271e.png">
</p>

# مستندات api

برای تست API از Postman استفاده شد که خروجی داکیومنت آن در فایل پی دی اف زیر قابل مشاهده است:
[Documentation.pdf](https://github.com/tuytoosh/snapp-rule-based-pricing/blob/master/Docs.pdf)


## How to use

make sail container:
```
./vendor/bin/sail up -d
```

Install dependencies:
```
./vendor/bin/sail composer install
```
Run migrations:
```
./vendor/bin/sail php artisan migrate --seed
```
Access to the website in the following url
```
http://localhost:8000
```
