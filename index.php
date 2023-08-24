<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>To Do Application</title>
</head>
<body>
     <h1 class="text-center py-4 my-4">To-Do List </h1>

    <div class="w-50 m-auto">
    <form action="data.php" method="post" autocomplete="off">
        <div class="form-group">
            <label for="task">Task</label>
            <input class="form-control" type="text" name="task" id="task" placeholder="Add Your Task Here" Required>

        </div><br>
        <button class="btn btn-success">Add</button>

    </form>

    </div><br>

    <hr class="bg-dark w-50 m-auto">
    <div class="lists w-50 m-auto my-4">
        <h1>Your Lists</h1>
        <div id="lists">
        <table class="table table-hover" >
  <thead>
    <tr>
      <th scope="col" name="id">S.no</th>
      <th scope="col">ToDo List</th>
    <th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
        include 'database.php';
        $sql="SELECT * FROM todos";
        $result=mysqli_query($conn, $sql);

        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $task=$row['task'];
               


                ?>
                <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $task  ?></td>
                    <td>
                    <a class="btn btn-success btn-sm" href="edit.php?id=<?php echo $id ?>" role="button">Edit</a>
                    <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $id ?>" role="button"><i class="fa-solid fa-trash"></i></a>
 
                    </td>
                      
                </tr>

                <?php

                
            }
        }
    ?>
    
   
  </tbody>
</table>
        </div>
    </div>

   
  </body>
</html>
   </div>
  </div>
</body>
</html>