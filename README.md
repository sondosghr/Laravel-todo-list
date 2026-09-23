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
 composer install

3. Setup environment file:
 cp .env.example .env
php artisan key:generate


4.Run migrations:
php artisan migrate

5.Start local server:
php artisan serve
