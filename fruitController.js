// import data
const fruits = require('./data');

//menampilkan semua data
const index = () =>{
    for (const fruit of fruits) {
        console.log(fruit);
    }
}


//menambahkan data
const store = (name) => {
    fruits.push(name)
    index();
}

//mengupdate data
const update = (array, name) => {
    fruits[array] = name;
    index();
};


//menghapus data
const destroy = (array) => {
    fruits.splice(array, 1);
    index();
};


//export
module.exports = {index, store,update,destroy};