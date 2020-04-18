<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POSTS</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- POSTS ---</h3>
        <a href="index.php?mod=post&act=add" class="btn btn-primary">Add New POSTS</a>
        <?php 
            if(isset($_COOKIE['success'])){
                ?>
                <span class="success"><?=$_COOKIE['success'] ?></span>

        <?php }
         ?>

         <?php 
            if(isset($_COOKIE['fail'])){
                ?>
                <span class="error"><?=$_COOKIE['fail'] ?></span>

        <?php }
         ?>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Content</th>
                <th>Action</th>
            </thead>
            <?php 
            	foreach ($posts as $post) {?>
            	<tr>
            		<td><?php echo $post['id']; ?></td>
            		<td><?php echo $post['title']; ?></td>
            		<td><?php echo $post['description'] ?></td>
                    <td><?php echo $post['content'] ?></td>
                	<td>
	                    <a href="index.php?mod=post&act=detail&id=<?=$post['id']?>" class="btn btn-primary">Detail</a>
	                    <a href="index.php?mod=post&act=edit&id=<?=$post['id']?>" class="btn btn-success">Edit</a>
	                    <a href="index.php?mod=post&act=delete&id=<?=$post['id']?>" class="btn btn-danger">Delete</a>
               		 </td>
                </tr>
       <?php } ?>
   </table>
            
    </div>
</body>
</html>
