function taks5() {
    var mas = [];
while (true){
    var number = prompt('Введите целое число',0);
    if (number === '' || number === null || isNaN(number)) break;
    mas.push(+number);
}
var summa = 0;
for (var i = 0;i < mas.length;i++){
    summa += mas[i];
}
var result5 = document.getElementById('task5_1');
result5.innerHTML = 'Сумма всеx елементов масива = ' + summa + '<br>';
}

