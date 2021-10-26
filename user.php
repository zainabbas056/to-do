<?php
    include 'conn.php';
    
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Area</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

  <body>

        
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Welcome to dashboard</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" id="task" style="cursor: pointer;">Add Task</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" id="task-list" style="cursor: pointer;" >Task List</a>
                    
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                               <button type="button" class="btn btn-danger"> <li class="nav-item active"><a class="nav-link" href="#">Sign-Out</a></li></button>
                               
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                

                <div class="row">
                     <div class="table" id="todo-table" style="display: none;">  
                         <div class="col-md-12" >
                            <table class="table" style="margin: 25px;">
                                  <thead>
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Title</th>
                                      <th scope="col">Details</th>
                                      <th scope="col">Added on</th>
                                      <th scope="col">Deadline</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">1</th>
                                      <td>Mark</td>
                                      <td>Otto</td>
                                      <td>@mdo</td>
                                      <td>@mdo</td>
                                      

                                    </tr>
                                    <tr>
                                      <th scope="row">2</th>
                                    
                                    </tr>
                                    <tr>
                                      <th scope="row">3</th>
                                        
                                  </tbody>
                                </table>
                        </div>
                    </div>


                    <div class="container-fluid">
                    <div class="row">
                        
                        <div class="col-md-12" style="margin-top: 50px;">
                            <button type="button" class="btn btn-success" id="task-button" style="margin-left:46%;">Add Task</button><br><br><br>

                        </div>
                    </div>
                </div> 
                </div>

                <div class="row">

                    <div class="col-md-8 form">
                        <div class="task-form " id="todo-form" style="margin-left: 12%; display: none;">
                            <form id="form" action="functions.php" method="post">
                                  <div class="form-group">
                                    <label for="exampleInputTitle">Task Title</label>
                                    <input type="text" class="form-control" id="title"  placeholder="Enter Task Title" name="task-title">
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Task Details</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="task-details"></textarea>
                                    </div>
                                    <input type="date" id="task-date" name="task-date"><br><br>
                                  <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>    
            </div>
        </div>


        <div class="footer" style="background: grey; height: 50px;">
            
        </div>
<!-- Bootstrap core JS-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script type="text/javascript">


         $("#task").on("click",function(){

         $("#todo-form").css("display","block")

         $("#todo-table").css("display","none")
         $("#task-button").css("display","none")
       

        });

        $("#task-list").on("click",function(){

        $("#todo-table").css("display","block")
        $("#todo-form").css("display","none")

         $("#task-button").css("display","block")

        });

        $( "#task-button" ).click(function() {
        $( "#task" ).click();
});

</script>


</body>
</html>