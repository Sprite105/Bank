Clone the project:
```
#!bash

git clone https://github.com/Sprite105/Bank.git
```


Go to project directory

Install dependencies:
```
#!bash

composer install
```


In `.env` file replace the data to connect to the database
```
#!bash

DATABASE_URL=mysql://USERNAME:PASSWORD@HOST:PORT/DB_NAME
```

Create a database:
```
#!bash

php bin/console doctrine:database:create
```

Generate database migrations:
```
#!bash

php bin/console doctrine:migrations:generate
php bin/console doctrine:migrations:diff
```

Migrate the database:
```
#!bash

php bin/console doctrine:migrations:migrate
```

Load dummy data:
```
#!bash

php bin/console doctrine:fixtures:load
```

Start a server:
```
#!bash

php bin/console server:start
```

Go to http://127.0.0.1:8000

Now you can login into site. Username: admin, Password: 123.
Then you can create a customer `/api/customers/create` and after that create a transaction `/api/transactions/create`
*For authorization you must pass `X-AUTH-TOKEN` header. Admin token: `9t603WmQcOtOGRFw162u95YfINfrcjj_Z4SvZMeXNaI`*

For see the available queries use command:
```
#!bash

php bin/console debug:router
```


For use filters you must to use query `/api/transactions` with such available GET parameters list:
```
#!bash

customerId,
amount,
offset,
limit,
date
```


Filters query example:
```
#!bash

site.com/api/transactions?customerId=1&amount=100&offset=0&limit=1&date=18.07.2018
```

Command to calculate the sum of all transactions from previous day (it stores the sum to summary table):

```
#!bash

php bin/console app:summary
```


Create the cron command:
```
#!bash
crontab -e
47 23 /2 * php /path-to-your-project/bin/console app:summary > /dev/null
```