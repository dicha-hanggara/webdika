<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dicha Hanggara</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Atugatran/FontAwesome6Pro@main/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.5/css/perfect-scrollbar.min.css">
    <style>
    body {
        background-color: #004A98;
        color: white;
        text-align: center;
    }
    </style>
    <!-- PWA Requirements -->
    <link rel="manifest" href="manifest.json">
    <meta name="theme-color" content="#004A98">
    <script>
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('sw.js')
                .then(reg => console.log('Service Worker registered!', reg))
                .catch(err => console.log('Service Worker registration failed:', err));
        }
    </script>
</head>
<body>
    <?php
        $page= $_GET['page']??'';
        if($page =='home' || $page ==''){
            include "./views/home.php";
        }else{
            
            include "./views/menu.php";
            include "./views/$page.php";
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>
