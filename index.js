var jsonLogic = require('json-logic-js');
var logic = require('./logic.json');

function MakeTime() {
    this.logic = require('./logic.json');
    this.jsonLogic = require('json-logic-js');
}

MakeTime.prototype.calculate = function(order) {
    if (typeof order.orderDetails === 'undefined' || typeof order.orderDetails.totalPies === 'undefined') {
        throw new Error('Missing order.orderDetails.totalPies');
    }

    return this.jsonLogic.apply(this.logic, order);
};

module.exports = MakeTime;
