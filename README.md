# &pizza Make Time Library

A Node and PHP library to calculate the make time of an &pizza order.

## npm installation

```
npm install --save git+ssh://git@github.com/vector/andpizza-make-time.git
```

## Composer installation

```
composer config repositories.vector/andpizza-make-time vcs git@github.com:vector/andpizza-make-time.git
composer require vector/andpizza-make-time
```

## Node usage

```
var MakeTime = require('make-time');
var makeTime = new MakeTime();

var order = {
    "orderDetails": {
        "totalPies": 5
    }
};

var timeInSeconds = makeTime.calculate(order); // -> 1200
```


## PHP usage

```
use AndPizza\MakeTime\MakeTime;

$makeTime = new MakeTime();

$order = [
    'orderDetails' => [
        'totalPies' => 5
    ]
];

$timeInSeconds = $makeTime.calculate($order); // -> 1200
```
