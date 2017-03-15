<?php

namespace AndPizza\MakeTime;

use JWadhams\JsonLogic;
use Exception;

class MakeTime
{
    /**
     * Expects an order array as it's found in Firebase
     *
     * The only properties that matter:
     * {
     *   "orderDetails": {
     *     "totalPies": 5
     *   }
     * }
     *
     * @param  array $order
     * @return int number of seconds
     */
    public function calculate($order)
    {
        if (!isset($order['orderDetails']) || !isset($order['orderDetails']['totalPies'])) {
            throw new Exception('Missing order.orderDetails.totalPies');
        }

        $logic = json_decode(file_get_contents(__DIR__.'/../logic.json'));

        return JsonLogic::apply($logic, $order);
    }
}
