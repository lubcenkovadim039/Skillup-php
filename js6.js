function find(array, value) {
    if (array.indexOf)  return array.indexOf(value);
    for (var i = 0; i < array.length; i++){
        if (array[i] === value) return i;
        else return -1;
    }
}
function task6() {
    var arr = ["test", 2, 1.5, false];
    var result6 = document.getElementById('task6');
    result6.innerHTML += ' find(arr, "test");// ' + find(arr, "test") + '<br>';
    result6.innerHTML += 'find(arr, 2);//' + find(arr, 2) + '<br>';
    result6.innerHTML += 'find(arr, 1.5);//' + find(arr, 1.5) + '<br>';
    result6.innerHTML += 'find(arr, 0);// ' +  find(arr, 0) + '<br>';

}
