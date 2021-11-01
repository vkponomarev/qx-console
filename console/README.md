<html>
<p>

<h1 align="center">Консольное приложение для работы с внешними API получения курсов валют</h1>
<br>
</p>

<h3>migrate</h3>
Для работы приложения необходимы таблицы. Необходимо использовать команду yii migrate
чтобы создать необходимые таблицы в базе данных.

<h3>Пример вызова конскольных команд</h3>

Вызывать пользователем на которого настроены доступы на папку с сайтами:<br>
php -d memory_limit=512M yii rates/rates-currencies-latest-api-erh-update<br>

<h3>Работа с API Erh https://api.exchangerate.host/</h3>

<h5>RatesOrganizationsApiErhInsertController</h5>
    Изначальное заполнение таблицы организаций из данного API. Заполнение таблицы rates_organizations организациями из API.<br>
    
<h5>RatesCurrenciesLatestApiErhUpdateController</h5>
    Обновление курсов валют на последнюю доступную дату. Обновление таблицы rates_currencies_latest<br>
    
<h5>RatesCurrenciesOverallApiErhInsertController</h5>
    Запись в всех доступных данных курсов валют за доступный период времен
    в таблицу rates_currencies_overall<br>
    
<h5>RatesCryptoLatestApiErhUpdateController</h5>
    <br>В разработке<br><br>
    Обновление самых последних данных курсов криптовалют. Обновление даннымими таблицы rates_crypto_latest<br>
</html>

```
   
console
    components/rates     Содержит компоненты для работы c API в виде классов    
    controllers/rates    Содержит контроллеры (команды для управления API)
    models/rates         Содержит модели таблиц приложения

