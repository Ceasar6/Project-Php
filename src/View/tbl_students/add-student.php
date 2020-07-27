<br><br><br>
<div id="container-book" class="container">
    <h3 id="book-h3">Add Student</h3>
    <form method="post" enctype="multipart/form-data" class="was-validated">
        <div class="form-group">
            <label for="uname">Student Name:</label>
            <input type="text" class="form-control" id="uname" placeholder="Enter student name" name="student_name" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Age:</label>
            <input type="text" class="form-control" id="uname" placeholder="Enter age" name="age" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Gender:</label>
            <input type="text" class="form-control" id="uname" placeholder="Enter gender" name="gender" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Address:</label>
            <input type="text" class="form-control" id="uname" placeholder="Enter address" name="address" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="uname">Email:</label>
            <input type="text" class="form-control" id="uname" placeholder="Enter email" name="email" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input name="image-file" type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-group">
            <label for="sel1">Grade list:</label>
            <select name="grade_id" class="form-control" id="sel1">
                <?php foreach ($grades as $grade) : ?>
                    <option value="<?php echo $grade->getId(); ?>"><?php echo $grade->getGradeName(); ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button id="add-all" type="submit" class="btn btn-primary">Add Student</button>
        <button id="back-add" class="btn btn-secondary" onclick="window.history.go(-1); return false;">Back</button>
    </form>
</div>