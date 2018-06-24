### Informations :
I'm using project : https://github.com/DannyBen/php-quandl

Thanks to him

### Setup :

Adding your apikey in your parameters.yml or your config.yml (depends of yours choice)
```
parameters:
    quandl_api_key: 'Your API s Key'
```
You can create one at : https://www.quandl.com/account/api

Edit compsoer.json for adding repo :
```
    "repositories": [
        {
            "type": "git",
            "url": "git@github.com:didungar/QuandlBundle.git"
        }
    ],
```
And require bundle :
```
composer require "DidUngar/QuandlBundle"
```

