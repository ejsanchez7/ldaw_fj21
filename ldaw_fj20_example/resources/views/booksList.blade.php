<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Catálogo de Libros</title>
    </head>
    <body>

        <nav>
            <ul>
                <li><a href="<?php echo url("/laravel-landing"); ?>">Laravel Landing Page</a></li>
                {{-- <li><a href="<?php //echo url("/books/new"); ?>">Registrar libro</a></li> --}}
                <li><a href="<?php echo route("new-book"); ?>">Registrar libro</a></li>
            </ul>
        </nav>

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
