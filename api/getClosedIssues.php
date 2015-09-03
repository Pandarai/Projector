<?php

$milestones = $_POST['miles'];

$closedIssues = 0;
$openIssues = 0;
$allIssues = 0;


foreach ($milestones as $key => $value) {
    $closedIssues += $milestones[$key]['closed_issues'];
    $openIssues += $milestones[$key]['open_issues'];
}

$allIssues = $openIssues + $closedIssues;

$return = array(
        "all_issues" => $allIssues,
        "closed_issues" => $closedIssues,
        "open_issues" => $openIssues

);

echo json_encode($return);

?>
