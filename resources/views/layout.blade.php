<!DOCTYPE html> <html> <head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>Student Management System</title>
<style>
  body {
     font-family: Arial, sans-serif;
     justify-content: center;
     align-items: center;
     height: 100vh;
     background-image:url('img.jpg');
    }
    .container {
        width:100%;
        padding: 0;
        margin: 0;
      }
      .row{
        margin:0 auto;
        width:100vw;
        margin:10 auto;
}
.navbar {
  background-color: #3498db; 
  color: white;
  position: relative; /* Fix the navbar at the top */  
}
.navbar-brand {
  margin-left:20px;
  text-align:center;
  font-size: 24px; 
  font-weight: bold;
}

  .sidebar {
    margin: 3px auto;
    padding: 0;
    width: 300px;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
    border: 10px
  }

  /* Sidebar links */
  .sidebar a {
    display: block;
    color: black;
    padding: 16px;
    text-decoration: none;
  }

  /* Active/current link */
  .sidebar a.active {
    background-color: #04AA6D;
    color: white;
  }

  /* Links on mouse-over */
  .sidebar a:hover:not(.active) {
    background-color: #555;
    color: white;
  }

  /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
  div.content {
    margin:3px auto;
    padding: 1px 1px;
    height: 900px;
  }

  /* On screens that are less than 700px wide, make the sidebar into a topbar */
  @media screen and (max-width: 700px) {
    .sidebar {
      width: 100%;
      height: auto;
      position: relative;
    }

    .sidebar a {
      float: left;
    }

    div.content {
      margin-left: 0;
    }
  }

  /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
  @media screen and (max-width: 400px) {
    .sidebar a {
      text-align: center;
      float: none;
    }
  }
</style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-blue">
          <a class="navbar-brand" href="#">
            <h2>Student Project Management</h2>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <!-- The sidebar -->
        <div class="sidebar">
          <a class="active" href="#home">Home</a>
          <a href="{{ url('/students') }}">Student</a>
          <a href="{{ url('/teachers') }}">Teacher</a>
          <a href="{{ url('/courses') }}">Courses</a>
          <a href="{{ url('/batches') }}">Batches</a>
          <a href="{{ url('/enrollments') }}">Enrollment</a>
          <a href="{{ url('/payments') }}">Payment</a>
        </div>
      </div>

      <div class="col-md-9">

        @yield('content')
      </div>
    </div>
  </div>
</body>

</html>