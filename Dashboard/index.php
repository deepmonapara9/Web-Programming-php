<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Professional Dashboard</title>
    <!-- Add Bootstrap CSS Link -->
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/styles.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-2">
                <h2>Sidebar</h2>
                <ul class="list-group">
                    <li class="list-group-item"><a href="#">Menu 1</a></li>
                    <li class="list-group-item"><a href="#">Menu 2</a></li>
                    <li class="list-group-item"><a href="#">Menu 3</a></li>
                </ul>
                <h2>My Social Profiles</h2>
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="https://www.google.com" target="_blank">Google Site</a>
                    </li>
                    <li class="list-group-item">
                        <a href="https://www.linkedin.com" target="_blank">LinkedIn</a>
                    </li>
                    <!-- <li class="list-group-item">
                        <a href="https://www.blog.com" target="_blank">Blog</a>
                    </li> -->
                    <li class="list-group-item">
                        <a href="https://github.com/deepmonapara9" target="_blank">GitHub</a>
                    </li>
                </ul>
            </nav>
            <!-- Main content -->
            <main class="col-md-10">
                <div id="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>Title</h1>
                            </div>
                            <div class="col-md-6">
                                <img
                                    src="logo.png"
                                    alt="Logo"
                                    width="100"
                                    class="float-right" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="dashboard-item">
                        <div id="about-me" class="section-title">
                            <h2>About Me</h2>
                        </div>
                        <p>This is a sample content about yourself.</p>
                    </div>
                    <div class="dashboard-item">
                        <div id="my-skillset" class="section-title">
                            <h2>My Skillset</h2>
                        </div>
                        <p>These are your skills and expertise.</p>
                    </div>
                    <div class="dashboard-item">
                        <div id="assignments" class="section-title">
                            <h2>Assignments</h2>
                        </div>
                        <div class="btn-group">
                            <button class="ocean-blue-button gradient-button">
                                Task 1
                            </button>
                            <button class="sunset-orange-button gradient-button">
                                Task 2
                            </button>
                            <button class="spring-green-button gradient-button">
                                Task 3
                            </button>
                            <button class="royal-purple-button gradient-button">
                                Task 4
                            </button>
                            <button class="ruby-red-button gradient-button">Task 5</button>
                            <button class="goldenrod-yellow-button gradient-button">
                                Minor Project Module</button><br />

                            <button class="spring-green-button gradient-button">
                                Database Module
                            </button>
                        </div>
                    </div>
                    <div class="dashboard-item">
                        <div id="project-details" class="section-title">
                            <h2>My Project Details</h2>
                        </div>
                        <p>Details about your projects go here.</p>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <div id="footer">
        <h3>Footer Title</h3>
        <img src="footer-logo.png" alt="Footer Logo" width="100" />
    </div>

    <!-- Add Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>