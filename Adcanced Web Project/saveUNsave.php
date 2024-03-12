<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $connection = mysqli_connect('localhost', 'root', '','attendance system');
    if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
        $userId=8;
        $postId=20;
        $isSave;
        $result = mysqli_query($connection,"SELECT * FROM saves");
        while($row = mysqli_fetch_array($result)){
        if($row[2]==$postId && $row[1]==$userId){
            echo $row[2].", ".$postId ." - ";
            // echo "Save";
            $isSave="Unsave";
        }else{
            echo $row[2].", ".$postId ." - ";
            // echo "Unsave";
        $isSave="Save";
        }
    }
    $result2 = mysqli_query($connection,"SELECT * FROM saves");
        if(isset($_POST['save-post-btn']) ){
            // $postId = $_POST['save-post-btn'];
            // $userId = $_SESSION['id'];
            // $result = mysqli_query($connection,"SELECT * FROM saves");
            // $numOfPostsSaved = mysqli_query($connection, "SELECT * FROM saves");
                                    $numOfPostsSaved = mysqli_num_rows($result);
                                    if($numOfPostsSaved==0){
                                        $query_save_post = "INSERT INTO saves (user_id, post_id) ";
            $query_save_post .= "VALUES( '$userId', '$postId' )";
            $result_save_post = mysqli_query($connection, $query_save_post);
            // $isSave="Unsave";
            exit();
                                    }else{
            while($row2 = mysqli_fetch_array($result2)){
                // echo "NABIIIIII";
            if($row2[2]==$postId && $row[1]=$userId){
                // echo "POST EXISTS";
                // echo "POST_ID: ". $postId ."USER_ID: ". $userId;
                // echo "POST_ID: ". $row[2] ."USER_ID: ". $row[1];
                // ---------------------------------------------------------
                $query_delete_post = "DELETE FROM saves WHERE post_id='$postId';";
                // $query_save_post .= "VALUES( '$userId', '$postId' )";
                $result_delete_post = mysqli_query($connection, $query_delete_post);
                // $isSave="Save";
                exit();
            }else{
                // echo "POST ADDED!";
                // echo "POST_ID: ". $postId ."USER_ID: ". $userId;
                // echo "POST_ID: ". $row[2] ."USER_ID: ". $row[1];
                // ---------------------------------------------------------
                $query_save_post = "INSERT INTO saves (user_id, post_id) ";
            $query_save_post .= "VALUES( '$userId', '$postId' )";
            $result_save_post = mysqli_query($connection, $query_save_post);
            // $isSave="Unsave";
            exit();
            }
        }
    }
            // $query_save_post = "INSERT INTO saves (user_id, post_id) ";
            // $query_save_post .= "VALUES( '$userId', '$postId' )";
            // $result_save_post = mysqli_query($connection, $query_save_post);
            
            // echo "POST_ID: ". $postId ."USER_ID: ". $userId;
    
        }
        mysqli_close($connection);
    ?>
    <section>
        <div>
            <form action="<?PHP echo $_SERVER["PHP_SELF"];?>" method="POST">
                <button name="save-post-btn"><?php echo $isSave;?></button>
            </form>
        </div>
    </section>
</body>
</html>
<!-- if(isset($_POST['save-post-btn']) ){
        $postId = $_POST['save-post-btn'];
        $userId = $_SESSION['id'];

        $query_save_post = "INSERT INTO saves (user_id, post_id) ";
        $query_save_post .= "VALUES( '$userId', '$postId' )";
        $result_save_post = mysqli_query($connection, $query_save_post);

    } -->

    <?php
         $userId=8;
         $postId=20;
         $isSave;
         $result = mysqli_query($connection,"SELECT * FROM saves");
         while($row = mysqli_fetch_array($result)){
         if($row[2]==$postId && $row[1]==$userId){
             $isSave="Unsave";
         }else{
         $isSave="Save";
         }
     }
     $result2 = mysqli_query($connection,"SELECT * FROM saves");
         if(isset($_POST['save-post-btn']) ){
            $numOfPostsSaved = mysqli_num_rows($result);
                if($numOfPostsSaved==0){
                    $query_save_post = "INSERT INTO saves (user_id, post_id) ";
                    $query_save_post .= "VALUES( '$userId', '$postId' )";
                    $result_save_post = mysqli_query($connection, $query_save_post);
                    exit();
                }else{
                    while($row2 = mysqli_fetch_array($result2)){
                        if($row2[2]==$postId && $row[1]=$userId){
                            $query_delete_post = "DELETE FROM saves WHERE post_id='$postId';";
                            $result_delete_post = mysqli_query($connection, $query_delete_post);
                            exit();
                        }else{
                            $query_save_post = "INSERT INTO saves (user_id, post_id) ";
                            $query_save_post .= "VALUES( '$userId', '$postId' )";
                            $result_save_post = mysqli_query($connection, $query_save_post);
                            exit();
                        }
                    }
                }
            }
    ?>