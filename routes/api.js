const express = require('express');
const StudentController = require('../controllers/StudentController');
const router = express.Router();

router.get("/", (req, res) => {
    res.send('hello express');
});

router.get("/students", StudentController.index);
router.post("/students", StudentController.store);
router.put("/students/:id", StudentController.update);
router.delete("/students/:id", StudentController.delete);


module.exports = router;