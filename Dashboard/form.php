<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entry Form</title>
    <link rel="stylesheet" href="assets/form.css">
</head>

<body>
    <div class="form">
    <form action="index.php" method="POST">
        <div class="title">Welcome</div>
        <div class="subtitle">Enter your details!</div>

        <!-- Input for Details -->
        <div class="input-container ic1">
            <textarea id="details" class="input" placeholder=" " name="details"></textarea>
            <label for="details" class="placeholder">Details</label>
        </div>

        <!-- Input for Skills -->
        <div class="input-container ic2">
        <textarea id="details" class="input" placeholder=" " name="skills"></textarea>
            <label for="skills" class="placeholder">Skills</label>
        </div>

        <!-- Input for tasks -->
        <div class="input-container ic2">
            <input id="extra" class="input" type="text" placeholder="" name="task1" />
            <label for="extra" class="placeholder">Task 1</label>
        </div>

        <div class="input-container ic2">
            <input id="extra" class="input" type="text" placeholder="" name="task2" />
            <label for="extra" class="placeholder">Task 2</label>
        </div>

        <div class="input-container ic2">
            <input id="extra" class="input" type="text" placeholder="" name="task3" />
            <label for="extra" class="placeholder">Task 3</label>
        </div>

        <div class="input-container ic2">
            <input id="extra" class="input" type="text" placeholder="" name="task4" />
            <label for="extra" class="placeholder">Task 4</label>
        </div>

        <div class="input-container ic2">
            <input id="extra" class="input" type="text" placeholder="" name="task5" />
            <label for="extra" class="placeholder">Task 5</label>
        </div>

        <div class="input-container ic2">
            <input id="extra" class="input" type="text" placeholder="" name="mpm" />
            <label for="extra" class="placeholder">Minor Project Module</label>
        </div>

        <div class="input-container ic2">
            <input id="extra" class="input" type="text" placeholder="" name="dm" />
            <label for="extra" class="placeholder">Database Module</label>
        </div>

        <!-- Input for Projects -->
        <div class="input-container ic2">
        <textarea id="details" class="input" placeholder=" " name="skills"></textarea>
            <label for="projects" class="placeholder">Projects</label>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="submit">Submit</button>
    </form>
</div>

</body>

</html>