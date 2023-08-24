<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
    <title>Update To-Do</title>
</head>

<body>
  <h1 class="text-center py-4 my-4">Update Your Task</h1>

  <?php
                include 'database.php';
                $id=$_GET['id'];
                $sql="SELECT * FROM todos WHERE id=".$id;

                $result = mysqli_query($conn, $sql);

                if($result){   
                    $row=mysqli_fetch_assoc($result);
                    $task=$row['task'];


                }


            ?>
  <div class="w-50 m-auto">
    <form action="actionedit.php" method="post" autocomplete="off">
      <div class="form-group">
        <label for="task">Task</label>
        <input class="form-control" type="text" name="task" id="task" value="<?php global $task; echo $task ?>" placeholder="Edit Here Your Task"
          Required>
          <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
      </div><br>
      <button class="btn btn-success">Update</button>
    </form>
  </div>
  
</body>

</html>