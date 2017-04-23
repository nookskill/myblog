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
            <h2>My Blog</h2>
            <hr>
            <div id="list">
                @foreach ($blogs as $blog)
                    <h5><a href="/contents/{{$blog->id}}"> {{ $blog->title }}</a> <span>created at {{$blog->created_at}}</span> </h5>
                    <hr>
                @endforeach          
            </div>
            <hr>
            <form class="form-horizontal" action="/write" method="post">
                {{ csrf_field() }}
                <div class="form-group form-group-lg">
                    <label class="col-sm-2 control-label" for="title">Title</label>
                    <div class="col-sm-8">
                    <input class="form-control" type="text" id="title" name="title" placeholder="Title">
                    </div>
                </div>
                <textarea id="MDText" name="content"></textarea>
                <input class="btn btn-default" id="btn-submit" type="submit" value="Submit">  
            </form>
        </div>
        
    

        <!-- Load Javascript Libraries -->
        <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
        <script src="<?= asset('js/jquery.min.js') ?>"></script>
        <script src="<?= asset('js/bootstrap.min.js') ?>"></script>
      <script>
            var simplemde = new SimpleMDE({
                element: document.getElementById("MDText"),
                spellChecker: false,
            });
            /*
            $.get("/api/blogs", function(data, status){
                $("#list").text(
                    
                );
               // alert("Data: " + data + "\nStatus: " + status);
            });
            
            $("#btn-submit").click(function(){
                $.post("/api/test",
                {
                    title: $('#title').val(),
                    content: simplemde.value(),
                },
                function(data, status){
                    //console.log(simplemde.value());
                    $("#list").text($('#title').val());
                });
            });
            */
        </script>
    </body>
</html>