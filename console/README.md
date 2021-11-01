<p align="center">

    <h1 align="center">Конскольное приложение для работы с внешкним API получения курсов валют</h1>
    <br>
</p>

Приложение для работы с API https://exchangerate.host/

Вызов 
php -d memory_limit=512M yii rates/rates-currencies-latest-api-erh-update

console\controllers\rates


Работа с API ERH https://api.exchangerate.host/
    RatesOrganizationsApiErhInsertController
    Изначальное заполнение таблицы rates_organizations организациями из API.
    
    RatesCurrenciesLatestApiErhUpdateController
    Обновление таблицы rates_currencies_latest курсов валют на последнее доступное обновление данных из API
    
    RatesCurrenciesOverallApiErhInsertController
    Запись в всех доступных данных курсов валют за доступный период времен
    в таблицу rates_currencies_overall
    

```
   
console
    components/rates     Содержит компоненты для работы c API в виде классов    
    controllers/rates    Содержит контроллеры (команды для управления API)
    models/rates         Содержит модели таблиц приложения

