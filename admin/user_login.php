 <?php 

 include("includes/db_conn.php");

 $ErrorLogin = array();


 if(isset($_POST['btn_login']))
 {
  $admin_name    = mysqli_real_escape_string($db, $_POST['admin_name']);
  $admin_pass    = mysqli_real_escape_string($db, $_POST['admin_pass']);

  if(empty($admin_name) || empty($admin_pass))
  {
    if($admin_name == "")
    {
      $ErrorLogin[] = "Username is required";
    }

    if($admin_pass == "")
    {
      $ErrorLogin[] = "Password is required";
    }

  }

  else
  {
    $query ="SELECT * FROM admin WHERE username = '$admin_name'";
    $Result = $db->query($query);

    if($Result->num_rows == 1)
    {
     
      $MainSql = "SELECT * FROM admin WHERE username ='$admin_name' AND password = '$admin_pass'";
      $MainResult = $db->query($MainSql);

      if($MainResult->num_rows == 1)
      {
        $value = $MainResult->fetch_assoc();

        $admin_name = $value['username'];
        
        // set session
        $_SESSION['admin_username'] = $admin_name;
        echo "<script>alert('Login successful. Welcome back!')</script>";
        echo "<script>document.location='dashboard.php'</script>";
        //header('location:dashboard.php');

      } 

      else
      {
        $ErrorLogin[] = "Incorrect username/password combination";
      }

    }

    else
    {
      $ErrorLogin[] = "username does not exists";
    }

    
  }

  }


?>