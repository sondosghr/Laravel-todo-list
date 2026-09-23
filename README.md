# To-Do List Web Application (Laravel)

تطبيق ويب لإدارة المهام اليومية تم بناؤه باستخدام إطار العمل Laravel كجزء من التطبيق العملي للتعامل مع العمليات الأساسية في الباك إند وقواعد البيانات.

---

### المفاهيم والتقنيات المستخدمة في المشروع:
- Routers & Controllers: إدارة المسارات ومعالجة الطلبات البرمجية.
- Database & Migrations: إنشاء وتحديد هيكلة جدول المهام في قاعدة البيانات.
- Laravel Query Builder: تنفيذ استعلامات إضافة، تعديل، وتحديث حالة المهام.
- Blade Templating Engine: عرض الواجهات وتنسيق عناصر القائمة بشكل ديناميكي.

---

### مميزات التطبيق الأساسية:
- إضافة مهام جديدة إلى القائمة.
- عرض قائمة المهام الحالية وتحديد حالتها (مكتملة / غير مكتملة).
- إمكانية تعديل وتحديث بيانات المهام.
- حذف المهام من قاعدة البيانات.

---

### كيفية تشغيل المشروع محلياً (Local Setup):

1. Clone the repository:
   ```bash
   git clone [https://github.com/sondosghr/Laravel-todo-app.git](https://github.com/sondosghr/Laravel-todo-app.git)
2. Install dependencies:
  ```bash
 composer install
4. Setup environment file:
  ```bash
 cp .env.example .env
php artisan key:generate
ملاحظة: يجب إنشاء قاعدة البيانات محلياً وتعديل اسم قاعدة البيانات (DB_DATABASE) داخل ملف .env ليكون مطابقاً لها قبل تنفيذ الـ Migrations.

4.Run migrations:
  ```bash
php artisan migrate
5.Start local server:
  ```bash
php artisan serve
ملاحظة: بعد تشغيل السيرفر المحلي، افتح المسار المباشر لصفحة المهام في المتصفح:

http://127.0.0.1:8000/tasks
