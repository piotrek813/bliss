<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $seo['title']['value']; ?></title>
    <meta name="description" content="<?= $seo['description']['value']; ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <link href="/assets/css/main.css" rel="stylesheet">
</head>
<body>
    <main>
        <?php foreach ($content as $item) {
            extract($item);
            include "blocks/".$name.".php";
        } ?>
    </main>

    <footer class="border-t border-grey-100">
        <div class="max-w-screen-xl mx-auto flex flex-col items-center gap-4 py-4 text-center">
            <p class="text-lg">&copy; 2024 Gadacz</p>
        </div>
    </footer>
</body>
</html>
