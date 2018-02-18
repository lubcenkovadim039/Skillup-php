function filterRange(arr, a, b) {
    var arr2 = [];
for (var i = 0; i < arr.length; i++){
    if (arr[i] >= a && arr[i] <= b) arr2.push(arr[i]);
}
return arr2;
}
function task7() {
    var arr = [5, 4, 3, 8, 0];
    var filtered = filterRange(arr, 3, 5);
    var result7 = document.getElementById('task7');
    result7.innerHTML += 'Дан масив ' + arr + '<br>';
    result7.innerHTML += 'filterRange(arr, 3, 5)' + filterRange(arr, 3, 5);
}