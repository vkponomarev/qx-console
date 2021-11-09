<html>
<p>

<h1 align="center">Консольное приложение для работы с внешними API получения курсов валют</h1>
<br>
</p>
<hr>
<h3>migrate</h3>
Для работы приложения необходимы таблицы. Необходимо использовать команду yii migrate
чтобы создать необходимые таблицы в базе данных.
<hr>
<h3>Пример вызова консольных команд</h3>

Вызывать пользователем на которого настроены доступы на папку с сайтами:<br>
php -d memory_limit=512M yii rates/rates-currencies-latest-api-erh-update<br>

<hr>
<h3>Работа с API Erh https://api.exchangerate.host/</h3>
<hr>
<h5>+RatesOrganizationsApiErhInsertController</h5>
Изначальное заполнение таблицы организаций из данного API. Заполнение таблицы rates_organizations организациями из API.<br>
<hr>
<h5>+RatesCurrenciesLatestApiErhUpdateController</h5>
Обновление курсов валют на последнюю доступную дату. Обновление таблицы rates_currencies_latest<br>
<hr>
<h5>+RatesCurrenciesOverallApiErhInsertController</h5>
Запись в всех доступных данных курсов валют за доступный период времен
в таблицу rates_currencies_overall<br>
<hr>
<h5>--Структура готова-- *RatesCurrenciesOverallApiErhUpdateController</h5>
Добавление в таблицу rates_currencies_overall недостающих курсов валют по дням<br>
<hr>
<h5>+RatesCryptoLatestApiErhUpdateController </h5>
Обновление самых последних данных курсов криптовалют. Обновление даннымими таблицы rates_crypto_latest<br>
<hr>
<h5>--Структура готова-- *RatesCryptoOverallApiErhInsertController</h5>
Изначальное заполнение таблицы rates_crypto_overall всеми доступными датами курсов<br>
<b>Структура готова/Отправить в работу</b><br>
<hr> 
<h5>--Структура готова-- *RatesCryptoOverallApiErhUpdateController</h5>
Обновление таблицы rates_crypto_overall 
курсами криптовалют на даты которые отсутствуют в таблице.
<br>
<b>Структура готова/Отправить в работу</b><br>
<hr> 
</html>

```
   
console
    components/rates     Содержит компоненты для работы c API в виде классов    
    controllers/rates    Содержит контроллеры (команды для управления API)
    models/rates         Содержит модели таблиц приложения

