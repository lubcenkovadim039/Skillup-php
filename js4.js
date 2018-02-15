var arr = ["Яблоко", "Апельсин", "Груша", "Лимон"];
var rand =  Math.floor(Math.random() * (arr.length ));
var rP1 = document.getElementById('task4');
rP1.innerHTML = 'Cлучайное знчение с масива = ' + arr[rand];