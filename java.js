function task1_1() {

var c = 15, d = 2, result = 0;
result = c + d;
alert('Сумма c+d= '+result);
}
function task1_2() {
    var a = 10, b = 5, c = 2, result;
    result = a+b+c;
    alert('сумма a+b+c= '+ result)
}
function task1_3() {
    var a = 17, b = 10, c ;
    c = a-b;
    alert('значение  c'+'='+ c);
    var d = 7;
    alert ('значение  d'+'='+d);

}
function task1_4() {
    var c = +prompt("Введите первое значение",'' );
    var d = +prompt("Введите второе значение", '');
    var result = 0;
    result = c + d ;
    alert('Сумма введенных значений ='+ result);
}
function task1_5() {
    var str = 'Привет, Мир!' ;
    alert(str)

}
function task1_6() {
    var str1 = 'Привет,';
    var str2 = 'Мир!',result ;
    result = str1 + str2;
    alert (result);
}
function task1_7() {
    var name = prompt('Введите, имя','')
    alert ('Привет,'+ name + '!');
}
function task1_8() {
    var age = prompt('Укажите возвраст', '');
    alert ('Мне '+ age +' лет!');
}
function task2_1() {
    var str = '1';
    for (var i= 2;i < 10;i++){
        str += i;
    }
    alert(str);
}
function task2_2() {
    var str = '9';
    for (var i= 8;i > 0;i--){
        str += i;}
    alert(str);
}
function task2_3() {
    var str = '-';
    for (var i= 1;i < 10;i++){
        str += i + '-';
    }
    alert(str); 
}
function task2_4() {
    var str = ' ';
    for (var i= 1;i < 21;i++){
        str += 'x' ;
        document.write(str + '<br>');}
}
function task2_5() {
    for (var j = 1;j < 10;j++){
        for (var i = 1;i <= j;i++){
            document.write(j) ;}
        document.write('<br>');}
}
function task2_6() {
    var str = ' ';
    for (var i= 1;i < 6;i++){
        str += 'xx';
        document.write(str);
        document.write('<br>')
    }
}