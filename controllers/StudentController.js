// import Model Student
const Student = require("../models/Student");

class StudentController {
  // menambahkan keyword async
  async index(req, res) {
    // memanggil method static all dengan async await.
    const students = await Student.all(); 
    if (students.length > 0){
      const data = {
        message: "Menampilkkan semua students",
        data: students,
      };
      res.status(200).json(data);
    }else{
      const data = {
        message: "student is empty",
      };
      res.status(200).json(data);
    }
  }


   /**
     * TODO 2: memanggil method create.
     * Method create mengembalikan data yang baru diinsert.
     * Mengembalikan response dalam bentuk json.
   */
  async store(req, res) {
    const { nama, nim, email, jurusan} = req.body;
    if (!nama || !nim || !email || !jurusan){
     const data = {
      message : "semua data harus dikirim",
     };

     return res.status(422).json(data);
    }else{
    const students = await Student.create(req.body);
    const data = {
      message: "Menambahkan data student",
      data: students,
    };

    return res.status(201).json(data);
  }
  }
  //membuat fungsi untuk mengedit data by id dan nama
  async update(req, res) {
    const { id } = req.params;
    const students = await Student.find(id);

    if (students){
      const students = await Student.update(id, req.body);
      const data = {
        message: `Mengedit student id`,
        data: students,
      };
      
      res.status(200).json(data);
  }else{
    const data = {
      message: `Data student id  tidak ditemukan`,
    };
    
    res.status(404).json(data);
  }
  }

  
  //membuat fungsi untuk menghapus data by id
  async destroy(req, res) {
    const { id } = req.params;
    const student = await Student.find(id);

    if (student) {
      await Student.delete(id);
      const data = {
        message: `Menghapus student id ${id}`,
        data: student,
      };

      return res.status(200).json(data);
    } else {
      const data = {
        message: `Data student id ${id} tidak ditemukan`,
      };

      return res.status(404).json(data);
    }
  }

  async show(req, res) {
    const { id } = req.params;
    const student = await Student.find(id);

    if (student) {
      const data = {
        message: `Menampilkan student id ${id}`,
        data: student,
      };

      return res.status(200).json(data);
    } else {
      const data = {
        message: `Data student id ${id} tidak ditemukan`,
      };
      return res.status(404).json(data);
    }
  }
}

// Membuat object StudentController
const object = new StudentController();

// Export object StudentController
module.exports = object;
