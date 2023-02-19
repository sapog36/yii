# Задание №2. Выполнение CRUD операций

## Настройка Open Server

Установим следующие параметры сервера:

 <image src="/img/1.png">
 
 В модулях подключим нужные версии PHP MySQL и Apache
 
 <image src="/img/2.png">
 
 Добавил в наш сайт во вкладке домены:
 
<image src="/img/3.png">

## Заходим в PhpMyAdmin

<image src="/img/4.png">

Диаграмма базы данных

<image src="/img/5.png">

## Создаем наш проект

Открываем папку Domains

<image src="/img/6.png">

Создаем в ней свою папку 

<image src="/img/7.png">

Заходим в консоль 

В консоле пишем код для установки yii

*composer create-project --prefer-dist yiisoft/yii2-app-basic basic*

<image src="/img/8.png">

После установки yii мы заходим в файл **db.php**

<image src="/img/9.png">

В этом файле мы подключаем связь к нашей Базе данных

<image src="/img/10.png">

## Создание моделей и контролеров

Перейдите по ссылке в генератор кода

<image src="/img/11.png">

Заходим в Model Generator

<image src="/img/12.png">

Выбираем название нашей таблицы

<image src="/img/13.png">

Заполняем поля, после чего нажимаем на кнопку Preview

<image src="/img/14.png">

После чего нажимаем на кнопку Generate

<image src="/img/15.png">

Проделываем этот пункт для всех таблиц

<image src="/img/16.png">

После чего создаем контроллеры 

<image src="/img/17.png">

<image src="/img/18.png">

## Оформление нашего сайта

Создаем еще несколько ссылок на страницы 

<image src="/img/19.png">

И переводим модели

<image src="/img/20.png">

Вот так выглядит наш сайт 

<image src="/img/21.png">
