const MakeTime = require('../');

const assert = require('assert');

let makeTime = new MakeTime();

describe('MakeTime', function() {
  describe('#calculate()', function() {
    it('should equal 10 minutes when 0 pies are ordered', function() {
      assert.equal(600, (new MakeTime()).calculate({orderDetails:{totalPies:0}}));
    });
    it('should equal 10 minutes when 1 pie is ordered', function() {
      assert.equal(600, (new MakeTime()).calculate({orderDetails:{totalPies:1}}));
    });
    it('should equal 20 minutes when 5 pies are ordered', function() {
      assert.equal(1200, (new MakeTime()).calculate({orderDetails:{totalPies:5}}));
    });
    it('should equal 27.5 minutes when 8 pies are ordered', function() {
      assert.equal(1650, (new MakeTime()).calculate({orderDetails:{totalPies:8}}));
    });
  });
});