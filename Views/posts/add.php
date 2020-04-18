
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Post</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <?php 
            if(isset($_COOKIE['error'])){
                ?>
                <span class="error"><?=$_COOKIE['error'] ?></span>

        <?php }
         ?>

        
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Add New Post</h3>
    <hr>
        <form action="index.php?mod=post&act=add-process" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control"  name="description">
            </div>

             <div class="form-group">
                <label for="">Noi dung</label>
                <textarea class="form-control" name="content"></textarea>
            </div>

            <div class="form-group">
                <label for="">Danh muc</label>
                <select class="form-control" name ="category_id">
                    <?php foreach ($categories as $category) { ?>
                        <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label>User</label>
                <select class="form-control" name="user_id">
                <?php foreach ($users as $user) {?>
                        <option value="<?php echo $user['id']; ?>"><?php echo $user['name']; ?></option>
                <?php } ?>
                    
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Add Post</button>
        </form>
    </div>
</body>
</html>