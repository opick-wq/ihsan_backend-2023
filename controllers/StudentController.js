const student = require("../data/student.js"); // Importing students data

class StudentController{
    index(req, res){
        const data = {
            message: "Menampilkan semua data",
            data: student,
        };
        res.json(data);
    }

    store(req, res){
        const {nama} = req.body;
        student.push(nama);
        const data = {
            message: `Menambahkan data student nama : ${nama}`,
            data: student,
        };
        res.json(data);
    }

    update(req, res){
        const {id} = req.params;
        const {nama} = req.body;
        student[id] = nama;
        const data = {
            message: `Mengedit data students id : ${id}, nama : ${nama}`,
            data: student,
        };
        res.json(data);
    }

    delete(req, res){
        const {id} = req.params;
        student.splice(id, 1);
        const data = {
            message: `Menghapus data students id : ${id}`,
            data: student,
        };
        res.json(data);
    }
}

const object = new StudentController();
module.exports = object;