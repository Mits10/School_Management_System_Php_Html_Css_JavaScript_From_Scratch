<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="courseList">
      <input type="text" name="course" value="search course">
      <button type="button" name="button">Search</button>
      <h1>My courses</h1>
      <ul>
        <li><span><h2>Course1</h2></span><span><button type="button" name="button">delete Course</button></span></li>
      </ul>
      <a href="#">Create Course</a>
      <div class="form">
        <form class="" action="../../controler/course.php" method="post">
          <label for="">Course ID : </label>
          <input type="text" name="courseID" value="courseID">
          <label for="">Course Name : </label>
          <input type="text" name="courseName" value="courseName">
          <input type="submit" name="submit" value="create">
        </form>
      </div>

    </div>
  </body>
</html>
