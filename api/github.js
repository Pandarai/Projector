


function getRepos(name, projectRepo) {
    'use strict';
    var response;
    $.ajax({
        url: "https://api.github.com/repos/" + name + "/" + projectRepo,
        method: "GET",
        async: false,
        success: function (result) {
            response = result;
        }
    });

    return response;

}

function getMilestones(name, projectRepo) {
    'use strict';
    var response;
    $.ajax({
        url: "https://api.github.com/repos/" + name + "/" + projectRepo + "/milestones",
        method: "GET",
        async: false,
        success: function (result) {
            response = result;
        }
    });

    return response;

}

function gitHandler(githubJson) {
    'use strict';
    var response;

    $.ajax({
        url: "api/jsonToGitInfo.php",
        type: "POST",
        data: {'gitJson': githubJson},
        async: false,
        success: function (result) {
            response = result;
        }
    });

    return response;
}

function parseMilestones(githubJson){
    'use strict';

    $.ajax({
        url: "api/jsonToMilestones.php",
        type: "POST",
        data: {'milestonesJson': githubJson},
        success: function(result) {
            $('#milestones').html(result);
        }
    });

}



window.addEventListener('load', function () {
    'use strict';
    var github, gitName, githubJson, gitInfo, gitProjectRepo;
    gitName = $('#github').attr('name');
    gitProjectRepo = $('#Repo').attr('name');

    githubJson = getRepos(gitName, gitProjectRepo);
    gitInfo = gitHandler(githubJson);

    githubJson = getMilestones(gitName, gitProjectRepo);
    parseMilestones(githubJson);

    $('#github').html(gitInfo);

});
