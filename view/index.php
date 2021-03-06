<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles/index.css">
    <?php
    // include database and object files
    include_once '../config/database.php';
    // get database connection
    $database = new Database();
    $db = $database->getConnection();
    ?>

    <title>Home Page</title>
  </head>
  <body>
     <div class="navbar">
       <img src="../public/images/logo.jpg" alt="">
       <ul>
        <li><a href="">NSU</a></li>
        <li><a href="">Academic</a></li>
        <li><a href="">Faculty</a></li>
        <li><a href="">Offices</a></li>
        <li><a href="">Admission</a></li>
        <li><a href="">Library</a></li>
        <li><a href="">Archive</a></li>
        <li><a href="">Contact US</a></li>
        <li><a href="teacher/register.php">Register</a></li>
       </ul>

    </div>
    <div class="clearfix">
      <div class="imageSliding">
        <img src="../public/images/school.jpg" alt="">
      </div>
      <div class="noticeBar">
        <h1>Notices</h1>
        <ul>
        <li><a href="#">Ramadan Schedule: Undergraduate (online) Classes</a></li>
        <li><a href="#">NSU Campus Closure</a></li>
        <li><a href="#">Graduate Admission Summer 2021</a></li>
        <li><a href="#">23rd Convocation is going to be held on April 08, 2021</a></li>
        <li><a href="#">Exit Assessment (Spring 2021): Important Instructions for BUS 498 Students</a></li>
        <li><a href="#">View All Notices</a></li>
        </ul>
      </div>
    </div>

    <div class="row">
      <h1>News</h1>
      <div class="column">
        <img src="../public/images/news1.jpg" alt=""><br>
        <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a><br>
      </div>
      <div class="column">
        <img src="../public/images/news2.jpg" alt=""><br>
        <a href="#">Morbi mollis nisl posuere est fermentum tincidunt.</a><br>
      </div>
      <div class="column">
        <img src="../public/images/news4.jpg" alt=""><br>
        <a href="#">Proin egestas orci at ipsum dapibus porta.</a><br>
      </div>
      <div class="column">
        <img src="../public/images/news3.jpg" alt=""><br>
        <a href="#">Proin egestas orci at ipsum dapibus porta.</a><br>
      </div>
    </div>

    <div class="author">

          <div class="authorImage">
            <img src="../public/images/author.jpg" alt="">
          </div>
          <div class="authorContent">
            <h1>Message From Vice Chancellor</h1>
            <p>Ut sit amet felis vitae magna sagittis scelerisque. Mauris finibus risus in ligula faucibus, id feugiat mi pharetra. Nullam vitae eros pharetra, ultricies mauris vitae, aliquet tellus. In hac habitasse platea dictumst. Aliquam luctus aliquet facilisis. Praesent rutrum convallis ante, non consectetur purus rutrum eu. Aliquam et luctus risus, euismod auctor ligula. Aliquam sapien magna, eleifend ut est eu, bibendum luctus sem.</p>
          </div>

    </div>
    <div class="footer">
        <div class="column">
          <h1>About</h1>
          <ul>
            <li><a href="#">Mission</a></li>
            <li><a href="#">Leadership and Management</a></li>
            <li><a href="#">Affiliations</a></li>
            <li><a href="#">HR and Administrative Policies</a></li>
            <li><a href="#">Stakeholder Policy</a></li>
          </ul>

        </div>
        <div class="column">
          <h1>Academics</h1>
          <ul>
            <li><a href="#">Institutes and Schools</a></li>
            <li><a href="#">Departments</a></li>
            <li><a href="#">Centres and Initiatives</a></li>
            <li><a href="#">Office of the Registrar</a></li>
            <li><a href="#">Fees and Payment</a></li>
          </ul>
        </div>
        <div class="column">
          <h1>Resources</h1>
          <ul>
            <li><a href="#">Ayesha Abed Library</a></li>
            <li><a href="#">Courseware Moodle</a></li>
            <li><a href="#">Fabrication Laboratory</a></li>
            <li><a href="#">GDLN Centre</a></li>
            <li><a href="#">MSDN Academic Alliance</a></li>
          </ul>
        </div>
        <div class="column">
          <h1>Campus Life</h1>
          <ul>
            <li><a href="#">Cafeteria</a></li>
            <li><a href="#">Code of Conduct on Sexual Harassment</a></li>
            <li><a href="#">Counseling Unit</a></li>
            <li><a href="#">Dress Code</a></li>
            <li><a href="#">Medical Services</a></li>
          </ul>
        </div>
        <div class="column">
          <h1>Important Links</h1>
          <ul>
            <li><a href="#">UGC, Bangladesh</a></li>
            <li><a href="#">Ministry of Education, Bangladesh</a></li>
            <li><a href="#">BRAC</a></li>
            <li><a href="#">BRAC BANK</a></li>
            <li><a href="#">BRAC ENTERPRISES</a></li>
          </ul>
        </div>
    </div>
  </body>
</html>
