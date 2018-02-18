function task8() {
    var arr = [];
    var p = 2;
    for (var i = 2; i < 100; i++) {
        arr[i] = true;
        }
    var p = 2;
    do {
        for (i = 2 * p; i < 100; i += p) {
            arr[i] = false;
        }
        for (i = p + 1; i < 100; i++) {
            if (arr[i]) break;
        }
        p = i;
    } while (p * p < 100);

   var summa = 0;
    for (i = 0; i < arr.length; i++) {
        if (arr[i]) {
            summa += i;
        }
    }

    var result8 = document.getElementById('task8');
    result8.innerHTML = 'Сумма равна ' + summa + '<br>';
}