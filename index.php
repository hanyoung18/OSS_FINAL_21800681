<?php
	include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="css/styles.css" rel="stylesheet" />
        <h1>My diary</h1>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
            </div>
        </nav>
        <div align="right">
        <form name = "mod" method="POST" action="./add.php">

            <!-- <button class="btn btn-outline-dark flex-shrink-0" type="button" onclick="location.href='add.php';"  > -->
            <button class="btn btn-outline-dark flex-shrink-0" type="submit">                    
            today's Diary
            </button>
        </form>
        </div>

        <?php
        include 'connection.php';
        $query = "SELECT * FROM member_table ORDER BY seq DESC";
        $run = $con -> query($query);
        
        while ($row = $run->fetch_array()) :
        ?>

        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <!-- <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg" alt="..." /></div> -->
                    <div class="col-md-6">
                        <div class="small mb-1">
                        <?php echo $row['usr_name'];?>
                        </div>
                        <h1 class="display-5 fw-bolder">
                            <?php echo $row['title'];?> </span>
                        </h1>
                        <div class="fs-5 mb-5">
                        <?php echo $row['weather'];
                        echo"   ";
                        echo $row['date']?>
                        </span>
                        </div>
                        <p class="lead">
                            <?php echo $row['diary'];?>
                        </p>

                        <div class="d-flex">
                        <form name = "del" method="GET" action="./delete.php">
                            <input type="hidden" name="seq" value= <?php echo $row['seq'];?>>
                            <button class="btn btn-outline-dark flex-shrink-0" type="submit">
                                Delete
                            </button>
                        </form>
                        <form name = "modi" method="GET" action="./modify.php">
                            <input type="hidden" name="seq" value= <?php echo $row['seq'];?>>
                            <input type="hidden" name="diary" value= <?php echo $row['diary'];?>>
                            <input type="hidden" name="weather" value= <?php echo $row['weather'];?>>
                            <input type="hidden" name="title" value= <?php echo $row['title'];?>>
                            <input type="hidden" name="usr_name" value= <?php echo $row['usr_name'];?>>
                            <button class="btn btn-outline-dark flex-shrink-0" type="submit">
                                    Modify
                            </button>
                
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>
        <?php endwhile; ?>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; hanyoung's Website 2022</p></div>
        </footer>
        </body>
</html>
