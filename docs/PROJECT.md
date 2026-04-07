# ЖК «Позитив» — PROJECT.md

## Stack

| Компонент | Версия / инструмент |
|-----------|---------------------|
| PHP | >=7.0 (`composer.json`), runtime **7.4-FPM** (`Dockerfile`) |
| Laravel | **5.2.\*** |
| Web-сервер | Nginx (Docker) |
| БД | MySQL 8 |
| Кэш / сессии | Redis 7 (`predis/predis`) |
| Фронт (основной) | Adobe Muse → Blade, Gulp + Laravel Elixir 5 |
| Фронт (калькулятор) | React 16 (CRA 3.4) в `react-calculator/` |
| Контейнеризация | Docker Compose |

### Ключевые пакеты

- `intervention/image` — обработка изображений (аватары, новости, галерея)
- `maatwebsite/excel` — импорт/экспорт Excel
- `orchestra/parser` — разбор XML (импорт квартир)
- `laracasts/utilities` — передача данных из PHP в JS (`JavaScript::put`)
- `nesbot/carbon` — даты

## Structure

```
├── app/
│   ├── Classes/Helper.php
│   ├── Console/Commands/          # Import, ResetCache
│   ├── Exceptions/
│   ├── Http/
│   │   ├── Controllers/           # Public, Flat, Mail, News, Home, Page, Gallery, Stage, FlatReserve, Auth/
│   │   ├── Kernel.php
│   │   ├── Middleware/
│   │   ├── Requests/
│   │   ├── ViewComposers/         # AdminComposer, GlobalComposer
│   │   └── routes.php             # единый файл маршрутов
│   ├── Models/                    # Pages, Variables, News, Flat, FlatReserve, Gallery, Stage, MediaStage, Settings
│   ├── Providers/
│   ├── User.php
│   ├── Jobs/ Events/              # заглушки
├── config/                        # app, database, settings (пути/шаблоны), mail, cache, …
├── database/
│   ├── migrations/                # 20 файлов
│   └── seeds/                     # DatabaseSeeder, UsersTableSeeder, FlatsTableSeeder (не подключён)
├── docker/                        # nginx/default.conf, php/entrypoint.sh, mysql/init/, scripts/
├── muse/                          # исходники Adobe Muse (манифест, sitemap)
├── public/                        # index.php, статика, phone/, tablet/, libs/, mortgage_calc/, js/
├── react-calculator/              # CRA: src/, public/, package.json
├── resources/
│   ├── views/
│   │   ├── muse/                  # ~30 Blade-обёрток Muse
│   │   ├── _flatpicker/           # фрагменты каталога квартир
│   │   ├── news/, gallery/, stage/, pages/, flat-reserve/
│   │   ├── layouts/, auth/, errors/, mail/
│   ├── lang/en/
│   └── assets/sass/
├── storage/                       # logs, cache, sessions, views (runtime)
├── tests/                         # ExampleTest.php (устаревший)
├── artisan, composer.json, Dockerfile, docker-compose.yml, Makefile
├── gulpfile.js, package.json      # Gulp + Elixir
```

## Entry points

| Тип | Файл / путь |
|-----|-------------|
| Web-маршруты | `app/Http/routes.php` — единый файл; группы `admin` (auth) и публичные |
| Artisan-команды | `app:import` (импорт квартир, schedule ежечасно), `app:resetCache` |
| Docker entry | `docker/php/entrypoint.sh` → composer install → link-muse-assets → php-fpm |
| HTTP (Nginx) | порт `HTTP_PORT` (8080) → document root `public/` |

### Ключевые маршруты

- **Публичные**: `/`, `{slug}.html` (Muse-страницы), новости, карточки квартир/секций, `flats/*`, `phone/*`, `POST /flat-reserve`, `GET /api/mortgage-terms`
- **Админка** (`/admin`): dashboard, профиль, CMS страниц, новости, галерея, этапы строительства, брони

## Models

| Модель | Таблица | Связи |
|--------|---------|-------|
| `Pages` | `pages` | hasMany → `Variables` |
| `Variables` | `variables` | — |
| `News` | `news` | hasOne → `User` (`authorobj`) |
| `Flat` | `flats` | accessors: link, price format, площадь |
| `FlatReserve` | `flat_reserves` | — |
| `Gallery` | `gallery` | — |
| `Stage` | `stages` | hasMany → `MediaStage`; hasOne → `User` |
| `MediaStage` | `media_stage` | — |
| `Settings` | `settings` | используется в `ComposerServiceProvider` |
| `User` | `users` | Authenticatable |

## Controllers

| Контроллер | Назначение |
|------------|------------|
| `PublicController` | Muse-страницы, новости, карточки квартир/секций, прокси ипотеки |
| `FlatController` | Каталог/фильтры квартир, импорт Excel/XML |
| `MailController` | Бронирование квартиры + отправка письма |
| `NewsPublicController` | Публичная лента новостей |
| `HomeController` | Админ-дашборд, профиль |
| `PageController` | Редактирование страниц/переменных |
| `NewsController` | CRUD новостей (админка) |
| `GalleryController` | CRUD галереи (админка) |
| `StageController` | Этапы строительства (админка) |
| `FlatReserveController` | Список/удаление заявок на бронь |

## External integrations

- **Импорт квартир**: XML с `pics.capitalgroup.ru` через `Orchestra\Parser` (команда `app:import`)
- **Ипотека**: cURL прокси к `api.capitalgroup.ru` (`MORTGAGE_API_URL` в `.env`)
- **Почта**: Laravel Mail (SMTP), шаблон `mail/reserve.blade.php`

## Conventions

- Namespace моделей: `App\Models\*`; `User` в корне `app/`
- Роутинг: единый `routes.php`, L5.2 синтаксис `['uses' => 'Controller@method']`
- Конфиг путей загрузок: `config('settings.pathes.*')`
- JS-данные в Blade: `JavaScript::put()`
- Muse-шаблоны: `{slug}.html` → `view('muse.'.$slug)`
- Админка: `middleware('auth')` в конструкторах контроллеров

## Limitations

- Тесты фактически **отсутствуют** (только шаблонный `ExampleTest`)
- `ComposerServiceProvider` зарегистрирован, но не подключён в `config/app.php`
- `GlobalComposer` удаляет скомпилированные views при каждом запросе — потенциальная проблема производительности
- `StageController` не имеет `middleware('auth')` в конструкторе (в отличие от других админ-контроллеров)
- Виды `flatpicker.*` ожидаются контроллером, но на диске каталог `_flatpicker/`
