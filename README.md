# KizolditjukAFoldet
Amikre figyelj:
Létrehozni a mappát, benne két mappa: backend és frontend
Segítő extension: PHP Intelephense

Backend:
- ide clone-olni az alap laravelt
- átnevezni az env. fájlt
- php artisan serve --host=0.0.0.0 --port=8000
- Migration: php artisan make:model TablaNeveNagyBetuvelEkezetNelkulEgyesSzambanPeldaulTask -m
- Models-ben fillable
- - php artisan migrate / php artisan migrate:fresh
- Controller: php artisan make:controller TaskController -m
- Routes: routes/web.php
- app/Http/Middleware/VerifyCsrfToken.php !

Frontend:
- npx create-react-app appneve
-  cd appneve
-  npm run start&
-  npm i axios
-  UserService.js
-  public/index.html-be bootstrap

Gitre feltöltéskor a frontend mappában lévő git.-et törölni!
