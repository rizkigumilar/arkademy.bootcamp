<?php 
    include_once("connect.php");

    $query = mysqli_query($mysqli,"SELECT users.id, users.name, GROUP_CONCAT(skills.name) as skills FROM users LEFT JOIN skills on users.id= skills.user_id GROUP by users.name order by id ASC");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Aplikasi data progammer dan skill</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body>
		<h1 class="text-center" style="margin: 30px 0px;">Aplikasi data progammer dan skill</h1>
        <section>
            <div class="container col-lg-8 col-md-8 col-xs-8">
            <div class="col-lg-12 col-md-6 col-xs-6" style="padding: 0; margin : 15px 0px;border-radius: 3px;border:1px black solid;overflow: hidden;">
                    <div class="col-lg-6 col-md-6 col-xs-6" style="padding: 0; float: left;">
                    <form action="addUsers.php" method="post" name="form=add">
                        <input type="text" class="form-control col-md-20" name="name" placeholder="Tambah User" style="height: 50px; border-radius : 3px; border : 1px black solid; margin-left: 42%;">
                        <input type="submit" name="Submit" class="btn btn-primary btn-lg" value="TAMBAH" style="margin-left:  158%; margin-top: -30px; transform: translateX(-50%);">
                    </form>
                    </div>
        </section>
        <section>
            <div class="container col-lg-8 col-md-8 col-xs-8">
                <!-- -->
                <?php
                    while($values = mysqli_fetch_object($query)){
                        
                    // }
                ?>
				<div class="col-lg-12 col-md-12 col-xs-12" style="padding: 0; margin : 20px 0px;border-radius: 3px;border:1px black solid;overflow: hidden;">
					<div class="col-lg-6 col-md-6 col-xs-6" style="padding: 0; float: left;">
						<div class="nama card-header col-lg-12 col-md-12 col-xs-12" style="height: 49px;">nama programmer: <?php echo $values->name; ?></div>
						<div class="skill card-header col-lg-12 col-md-12 col-xs-12" style="height: 49px;">nama skills: <?php echo $values->skills; ?></div>
					</div>
					<div class="col-lg-6 col-md-6 col-xs-6" style="float: left;padding: 0; border-radius: 3px;border:1px black solid; height: 98px">
						<form action="addSkill.php" method="post" name="form=add">
							<input type="hidden" name="user_id" value="<?php echo $values->id; ?>" >                            
							<input type="text" class="form-control col-md-8" name="name" placeholder="Tambah Skill" value="<?php echo @$data['id']; ?>" style= "margin-left:  35%; margin-top: 30px; transform: translateX(-50%);">
							<input type="submit" name="submit" class="btn btn-primary btn-lg" value="TAMBAH" style="margin-left:  85%; margin-top: -50px; transform: translateX(-50%);">
						</form>
					</div>
                </div>
                    <?php } ?>
            </div>
        </section>
	</body>
</html>