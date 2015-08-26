<?php
    include 'iniParser.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"></meta>
        <link rel="stylesheet" href="res/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="res/bootstrap/css/bootstrap-theme.css">
        <link rel="stylesheet" href="res/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <title><?php echo $config['title']; ?></title>
    </head>
    <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
            <p class='navbar-text navbar-right'><?php echo $config['title'] . " - Version " . $config['version']; ?></p>
        </div>
        </nav>

        <section class="container">
            <div class="row">
                <section class="info col-md-8">
                    <section class="post">
                        <div class="page-header">
                            <h1>Hello World <small>Project Manager first post</small></h1>
                        </div>
                        <p>
                            <?php
                                echo $config['post'];
                            ?>
                        </p>
                        <section class="post-footer">
                            <i class="glyphicon glyphicon-user"></i><?php echo " " . $config['author']; ?>
                        </section>
                    </section>
                </section>
                <section class="col-md-3 side">
                    <section id="github" class="side-content github" name="<?php echo $config['githubUser']; ?>">
                        <p id="Repo" name="<?php echo $config['githubRepo']; ?>">Github</p>
                    </section>
                    <section class="side-content" id="milestones">
                    </section>
                </section>
            </div>
        </section>

        <script src="api/github.js"></script>
    </body>
</html>
