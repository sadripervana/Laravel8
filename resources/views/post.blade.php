<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="app.css">
</head>
<body style="
    width: 600px;
    margin: auto">
    <article>
        <h1><?= $post->title;?></h1>
        <div>
            <?= $post->body;?>
        </div>
    </article>

    <a href="/">Go Back</a>
    
</body>
</html>