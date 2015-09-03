<?php

$gitArr = $_POST['milestonesJson'];
//echo "<h5>Milestones</h5>";
foreach ($gitArr as $key => $value) {
    echo "<a href='".$gitArr[$key]['html_url']."'><section class='mile ".$gitArr[$key]['state']."'><p>" . $gitArr[$key]['title']."</p>";
    $allIssues = $gitArr[$key]['closed_issues'] + $gitArr[$key]['open_issues'];
    $issuesClosed = $gitArr[$key]['closed_issues'];
    if($allIssues!=0){
        $percentageComplete = (100/$allIssues)*$issuesClosed;
    } else {
        $percentageComplete = 0;
    }
    echo "<div class='progress'>
                <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='".$issuesClosed."' aria-valuemin='0' aria-valuemax='".$allIssues."' style='width:".$percentageComplete."%;'><span class='sr-only'></span>
                </div>
            </div>
        </section>";
}


?>
