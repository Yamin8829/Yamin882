
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $judul;?></h1>
 <?php
          $conn = mysqli_connect("localhost", "root", "","school");
      ?>
      
      <?php
        
         if(isset($_POST["submit"]) ){


        $email = $_POST["email"];
        $name = $_POST["name"];
        $image = $_POST["image"];
        $password = $_POST["password"];
        $role_id = $_POST["role_id"];
        $is_active = $_POST["is_active"];
    
        $query = " INSERT INTO user VALUES ('', '$email', '$name', '$image','$password', '$role_id', '$is_active', '') ";

        mysqli_query($conn, $query);
      
    }

?>
<form action="" method="post" enctype="">
  <ul> 
    <li> <label for="email">Email</label>
<input type="text"name="email" id="email">
</li>

    <li> <label for="name">Name</label>
<input type="text"name="name" id="name">
</li>
 
    <li> <label for="image">Image</label>
<input type="file"name="image" id="image">
</li>

    <li> <label for="password">Password</label>
<input type="text"name="password" id="password">
</li>


    <li> <label for="role_id">Role ID</label>
<input type="text"name="role_id" id="role_id">
</li>

 
    <li> <label for="is_active">Is Active</label>
<input type="text"name="is_active" id="is_active">
</li>
<li>
<button href="" name="submit" type="submit" class="btn btn-primary mb-3" data-toggle="modal" data-target="formModal">Add New User</button> </li> </ul>
</form>
        
        <div class="row">
        <div class="col-lg-6">
        
        
        <table class="table table-hover table-dark">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Email</th>
              <th scope="col">Name</th>
              <th scope="col">Image</th>
              <th scope="col">Password</th>
              <th scope="col">role_id</th>
              <th scope="col">is_active</th>
             
            </tr>
          </thead>
          <tbody>

       <?php
          $conn =mysqli_connect("localhost", "root", "","school");
        $result = mysqli_query($conn, "SELECT * FROM user"); 
        ?>
          <?php $i = 1; ?>
          <?php foreach ($result as $u) :   ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $u["email"]; ?></td>
              <td><?= $u["name"]; ?></td>
              <td><?= $u["image"]; ?></td>
              <td><?= $u["password"]; ?></td>
              <td><?= $u["role_id"]; ?></td>
              <td><?= $u["is_active"]; ?></td>
              
        <td>
            <a href="" class="badge badge-success badge-pills">Edit</a> </td>
           <td> <a href=""  class="badge badge-danger badge-pills">Delete</a> 
            </td>
            </tr>
            <?php $i++;?>
          <?php endforeach; ?>
          </tbody>
        </table>
        
        
        
        
        </div>
        </div>
        
        
        
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
