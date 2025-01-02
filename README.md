# Тестовое задание

# Как делал

Работу выполнял на своем компьютере PhpStorm + Xampp

1) Выполнил все пункты что описаны ниже
2) Сделал форму обратной связи


    Форму обратной связи выполнил по разному. На странице index.php просто
    форма которая пост запросом ведет на файл с логиком где я либо через
    phpmailer отправляю, либо через метод битрикса CEvent::Send. В обоих
    случаях идет сохранение почты в админку (в ИБ).

    Либо через компонент main.feedback. В этом случаее сохраненине ведется
    через такую же запись в файле component.php, а так же через событие в 
    файле init.php.

    Комментариями я обозначил как и где я что использовал, должно быть понятно.

# Задание

1. Установить Битрикс на виртуальный хостинг/локальную машину (редакция - Стандарт).
2. Натянуть верстку из репозитория.
3. Сделать бэкап и отправить конечный результат

# ТЗ по разделам и страницам
#### Общая структура и описание
На выходе должна получиться физическая структура:

    Главная
       |
       |--- Раздел с исполнителями
                       |
                       |---Детальная страница


- логотип, текст в копирайте, все меню, ссылки и тд - все должно меняться без правки кода шаблона;
- хлебные крошки должны строиться автоматически;
- метатеги, заголовки h1 строятся из свойств страницы;
- компоненты должны использовать ЧПУ, адреса страниц пишем переводом на английский (например раздел с артистами будет /artists/).

#### Шапка, футер и главная страница

1. Использовать верстку из файла index.html.
2. На первом экране заголовок (который в h1) должен задаваться через свойство страницы, текст и иллюстрация через админку. Предусмотреть возможность редактирования кнопки explore (ссылка), а так же возможность ее скрытия.
3. (желательно, но не обязательно) Форма обратной связи (sign up for our newsletter) - запрограммировать и реализовать отправку через PHPMailer или другую библиотеку. При этом должен использоваться почтовый шаблон и корректное событие. Можно использовать веб-форму либо компонент feedback. При этом данные с формы должны сохраняться в админке.

#### Раздел с исполнителями

1. Использовать верстку из файла artists-list.html
2. Блок на первом экране (внутри div.records__row) должен редактироваться через включаемые области (кроме заголовка h1).
3. Для блока с артистами использовать комплексный компонент news.

#### Детальная страница исполнителя

1. Использовать верстку из файла artist.html
2. Ссылки на соцсети должны зависеть от исполнителя

# Сдача задания
Если разработка велась на локальной машине: сделать резервное копирование через админку, залить полученный бэкап в облако и отправить на почту ссылку с админскими доступами.

Если разработка велась на хостинге, прислать ссылку на сайт и доступ в админку.