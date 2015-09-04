<?php
    include 'iniParser.php';
    $now = new DateTime();
    $start = new DateTime($config['start']);
    $sprint = $now->diff($start);
    $sprintCycle = ceil($sprint->days / $config['sprintLength']);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"></meta>
        <link rel="stylesheet" href="res/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="res/bootstrap/css/bootstrap-theme.css">
        <link rel="stylesheet" href="res/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
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
            <section class="row">
                <section class="col-md-8">
                    <section class="info">
                        <section class="post" id="newPost">
                            <div class="page-header">
                                <h1><input class="inputTitle" placeholder="Title"> </input><small><input class="inputSubtitle" placeholder="Subtitle"></input></small></h1>
                            </div>
                            <input class="inputBody" type="textarea" rows="50" cols="50"></input>
                            <section id="drop-area" class="drop-area">
                                drop things here
                            </section>
                            <section class="post-footer">
                                <i class="glyphicon glyphicon-user"></i><?php echo " " . $config['author']; ?>
                            </section>
                        </section>
                    </section>
                    <section class="info">
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
                    <section class="info">
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
                </section>
                <section class="col-md-3">
                    <section class="side">
                        <section id="github" class="side-content github" name="<?php echo $config['githubUser']; ?>">
                            <p id="Repo" name="<?php echo $config['githubRepo']; ?>">Github</p>
                        </section>
                        <section class="side-content" id="milestones">
                        </section>
                        <section class="side-content">
                            <a href="https://github.com"><img src="res/img/icons/githubtext.png" width="24%"></a>
                        </section>
                    </section>
                    <section class="side">
                        <section class="side-content">
                            <h5>Current Sprint: <?php echo $sprintCycle; ?></h5>
                        </section>
                        <section class="side-content" id="sprint_graph">
                            <canvas id="graph" width="190" height="190"></canvas>
                        </section>
                        <section class="side-content labels">
                            <section class="label label-default closedissues">Closed Issues</section>
                            <section class="label label-default openissues">Open Issues</section>
                        </section>
                    </section>
                </section>
            </section>
        </section>
        <script src="api/drag.js"></script>
        <script src="api/graph.js"></script>
        <script src="api/github.js"></script>
    </body>
</html>
