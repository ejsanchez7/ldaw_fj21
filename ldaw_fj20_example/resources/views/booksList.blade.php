<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Catálogo de Libros</title>
    </head>
    <body>

        <h1>Catálogo de Libros</h1>

        <ul>
            <?php foreach($booksList as $book){ ?>

                <li>
                    <strong><?php echo $book["title"]; ?></strong> -
                    <?php echo $book["author"]; ?>
                </li>

            <?php } ?>

        </ul>

    </body>
</html>
