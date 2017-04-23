<!DOCTYPE html>
<html lang="en">
    <head>
        <title>My Blog</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Load Bootstrap CSS -->
        <link href="<?= asset('css/bootstrap.min.css') ?>" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
        
    </head>
    <body>
        <div class="container">
            <div class="form-inline">
                <h2>My Blog</h2>
                <a class="btn btn-default" href="/" role="button">Home</a> 
            </div>
            <hr>
            <div id="list">
                    <h3> {{ $blog->title }}</h3>
                    <hr>
                    <div id="content"> </div>
                    
                    <hr>
                    <span>created at {{$blog->created_at}}</span>
            </div>
        </div>
        
    

        <!-- Load Javascript Libraries -->
        <script src="<?= asset('js/jquery.min.js') ?>"></script>
        <script src="<?= asset('js/bootstrap.min.js') ?>"></script>
        <script src="https://cdn.rawgit.com/showdownjs/showdown/1.6.4/dist/showdown.min.js"></script>
        <script>
            var converter = new showdown.Converter(),
            text = `{{ $blog->content }}`,
            html = converter.makeHtml(text);
            console.log(html);
            $("#content").html(
                  html
            );
        </script>
    </body>
</html>