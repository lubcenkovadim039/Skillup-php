var results = document.getElementById('results');
var products = {
    '12345': {
        name: 'товар1',
        price: 2000,
        weight: 3,
        image: 'http://placehold.it/350x300',
        isAvailabe: true,
    },
    '12346': {
        name: 'товар2',
        price: 2000,
        weight: 3,
        image: 'http://placehold.it/300x300',
        isAvailabe: true,
    },
    '12347': {
        name: 'товар3',
        price: 2000,
        weight: 3,
        image: 'http://placehold.it/500x300',
        isAvailabe: true,
    },
    '12348': {
        name: 'товар4',
        price: 2000,
        weight: 3,
        image: 'http://placehold.it/100x300',
        isAvailabe: true,
    },
};
console.log(products);
for ( art in products){
results.innerHTML += "name" + products[art].name + '<br>';
results.innerHTML += "price" + products[art].price + '<br>';
results.innerHTML += "weight" + products[art].weight + '<br>';
results.innerHTML += 'image:<img src="' + products[art].image + '"><br>';
results.innerHTML += "Есть в наличии" + products[art].isAvailabe? 'да':'нет' + '<br>';
results.innerHTML += '<hr>';
}