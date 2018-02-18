'use strict';
var arr = {
mas: [5, 6, 34, 12, 45]
};
arr.sum = function () {
    var res = 0;
    this.mas.forEach(function (value) {
        res += value;
    });
    return res;
};
alert('sum:' + arr.sum());
