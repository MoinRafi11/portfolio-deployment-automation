<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Moin | Portfolio</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
scroll-behavior:smooth;
}

body{
background:#0f172a;
color:white;
}

header{
background:#111827;
padding:20px 8%;
display:flex;
justify-content:space-between;
align-items:center;
position:sticky;
top:0;
}

.logo{
font-size:28px;
font-weight:bold;
color:#38bdf8;
}
nav a{
color:white;
text-decoration:none;
margin-left:25px;
transition:.3s;
}

nav a:hover{
color:#38bdf8;
}

section{
padding:80px 8%;
}

.hero{
display:flex;
justify-content:space-between;
align-items:center;
flex-wrap:wrap;
min-height:90vh;
}

.hero-text{
max-width:600px;
}

.hero h1{
font-size:55px;
margin-bottom:15px;
}

.hero span{
color:#38bdf8;
}

.hero p{
margin:20px 0;
line-height:1.8;
color:#d1d5db;
}

.btn{
display:inline-block;
padding:12px 28px;
background:#38bdf8;
color:black;
text-decoration:none;
border-radius:8px;
font-weight:bold;
}

.image img{
width:320px;
border-radius:50%;
border:5px solid #38bdf8;
}

.title{
text-align:center;
font-size:35px;
margin-bottom:40px;
color:#38bdf8;
}

.about p{
line-height:1.8;
color:#d1d5db;
text-align:center;
}

.skills{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(150px,1fr));
gap:20px;
}

.skill{
background:#1e293b;
padding:20px;
text-align:center;
border-radius:10px;
transition:.3s;
}

.skill:hover{
background:#38bdf8;
color:black;
}

.projects{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
gap:25px;
}

.card{
background:#1e293b;
padding:25px;
border-radius:10px;
}

.card h3{
margin-bottom:10px;
color:#38bdf8;
}

.card p{
color:#d1d5db;
line-height:1.6;
}

.contact{
text-align:center;
}

.contact p{
margin:10px;
}
.table-container{
overflow-x:auto;
margin-top:30px;
}

table{
width:100%;
border-collapse:collapse;
margin-top:20px;
}

th{
background:#38bdf8;
color:black;
padding:15px;
}

td{
padding:15px;
text-align:center;
background:#1e293b;
border-bottom:1px solid #374151;
}

tr:hover td{
background:#334155;
}

footer{
background:#111827;
text-align:center;
padding:20px;
margin-top:50px;
color:#aaa;
}

@media(max-width:768px){

.hero{
text-align:center;
justify-content:center;
}

.image{
margin-top:40px;
}

.hero h1{
font-size:40px;
}

}

</style>

</head>
<body>

<header>

<div class="logo">Moin.</div>

<nav>

<a href="#">Home</a>
<a href="#about">About</a>
<a href="#skills">Skills</a>
<a href="#projects">Projects</a>
<a href="#table">Database</a>
<a href="#contact">Contact</a>

</nav>

</header>

<section class="hero">

<div class="hero-text">
  <h1>Hi, I'm <span>Moin</span></h1>

<h2>Junior DevOps Engineer</h2>

<p>
Passionate about Linux, VMware ESXi, Cloud Computing, Web Development,
Networking, and Automation. Currently learning DevOps tools and building
real-world projects.
</p>

<a href="#" class="btn">Download Resume</a>

</div>

<div class="image">

<img src="https://via.placeholder.com/320" alt="Profile">

</div>

</section>

<section id="about">

<h2 class="title">About Me</h2>

<div class="about">

<p>
Write your introduction here. Describe yourself, your education, certifications,
internships, career goals, and achievements.
</p>

</div>

</section>

<section id="skills">
  <h2 class="title">Skills</h2>

<div class="skills">

<div class="skill">HTML</div>
<div class="skill">CSS</div>
<div class="skill">JavaScript</div>
<div class="skill">React</div>
<div class="skill">Linux</div>
<div class="skill">Git</div>
<div class="skill">Docker</div>
<div class="skill">VMware ESXi</div>

</div>

</section>

<section id="projects">

<h2 class="title">Projects</h2>

<div class="projects">

<div class="card">

<h3>VMware ESXi Lab</h3>

<p>
Complete virtualization setup with Windows and Ubuntu virtual machines.
</p>

</div>

<div class="card">

<h3>Portfolio Website</h3>

<p>
Responsive portfolio created using HTML, CSS, and JavaScript.
  </p>

</div>

<div class="card">

<h3>Linux Server Setup</h3>

<p>
Apache hosting, SSH configuration, and Linux administration.
</p>

</div>

</div>

</section>


 <?php
// 1. Establish the database connection using Apache's environment variables
$host = getenv('PGHOST');
$db   = getenv('PGDATABASE');
$user = getenv('PGUSER');
$pass = getenv('PGPASSWORD');
$port = getenv('PGPORT') ?: "5432";

$stmt = null;
$db_error = null;

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$db";
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query the database
    $stmt = $pdo->query("SELECT id, project_name, technology, status FROM projects");

} catch (PDOException $e) {
    // Catch any connection errors so they don't crash the whole HTML page
     $db_error = $e->getMessage();
}
?>




<section id="table">

<h2 class="title">Database Section</h2>

<p style="text-align:center;color:#d1d5db;">
Replace the table body with data fetched from your database.
</p>

<div class="table-container">

</thead>

<tbody id="projectTable">



<?php if ($db_error): ?>
            <!-- Display database errors gracefully if they occur -->
            <p style="color: red; text-align: center;">Database error: <?php echo htmlspecialchars($db_error); ?></p>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Project</th>
                        <th>Technology</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // 3. Loop through each row in the database and generate a <tr>
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                     echo "<tr>";
                        echo "<td><strong>" . htmlspecialchars($row['id']) . "</strong></td>";
                        echo "<td>" . htmlspecialchars($row['project_name']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['technology']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['status']) . "</td>";
                        echo "</tr>\n";
                    }
                    ?>
                </tbody>
            </table>
        <?php endif; ?>


</tbody>

</table>

</div>

</section>


<section id="contact">

<h2 class="title">Contact</h2>

<div class="contact">

<p>Email : your@email.com</p>

<p>Phone : +91 ******829</p>

<p>GitHub : github.com/yourusername</p>
  <p>LinkedIn : linkedin.com/in/yourprofile</p>

</div>

</section>

<footer>

© 2026 Moin | All Rights Reserved

</footer>

</body>
</html>
                                    
                                       
