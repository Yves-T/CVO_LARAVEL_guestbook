
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel and Angular Guestbook</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <style>
        body { padding-top: 30px; }
        form { padding-bottom: 20px; }
        .comment { padding-bottom: 20px; }
    </style>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>

    <script src="js/app.js"></script>
</head>
<body class="container" ng-app="commentApp" ng-controller="mainController">
<div class="col-md-8 col-md-offset-2">

    <div class="page-header">
        <h2>Angular Guestbook</h2>
        <h4>What do you think?</h4>
    </div>

    <form ng-submit="submitComment()">
        <div class="form-group">
            <input ng-model="commentData.author" type="text" class="form-control input-sm" name="author" placeholder="Name">
        </div>
        <div class="form-group">
            <input ng-model="commentData.text" type="text" class="form-control input-lg" name="comment"
                   placeholder="Say what you have to say">
        </div>
        <div class="form-group text-right">
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>
    </form>

    <p class="text-center" ng-show="loading"><span class="fa fa-spinner fa-2x fa-spin"></span></p>

    <div class="comment" ng-repeat="comment in comments">
        <h3>Comment #{{ comment.id }}
            <small>by {{ comment.author }}
        </h3>
        <p>{{ comment.text }}</p>

        <p><a ng-click="deleteComment($index)" href="#" class="text-muted">Delete</a></p>
    </div>
</div>
</body>
</html>