<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOKIO インカラミ公式サイト</title>
    <?php wp_head(); ?>
    <!-- css -->
    <!-- <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="assets/css/normalize.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css -->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/starter-template/">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<script>
    $(window).scroll(function() {
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 500);
    });
</script>
<script>
    $(document).scroll(function() {
        var y = $(this).scrollTop();
        if (y > 800) {
            $('.left-pane-social-media .links').fadeIn();
        } else {
            $('.left-pane-social-media .links').fadeOut();
        }
    });
</script>
<script>

</script>

<body <?php body_class(); ?>>

    <div class="wrapper">

        <nav class="navbar navbar-dark bg-kmax fixed-top navbar-expand-md" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/'));?>">
                <img src="<?php echo get_theme_file_uri('/images/vertical-logo.png'); ?>" alt="..." height="40"?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarExample-expand-lg" aria-controls="offcanvasNavbarExample-expand-lg">
                    <span class="navbar-toggler-icon" data-bs-target="#offcanvasNavbarExample-expand-lg"></span>
                </button>
                <div class="offcanvas offcanvas-end" data-bs-hideresize="true" tabindex="-1" id="offcanvasNavbarExample-expand-lg" aria-labelledby="offcanvasNavbarExample-expand-lg">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasLabel"><img src="assets/images/tokio-inkarami-vertical-black.svg" alt="" height="30"></h5>
                        <button type="button" class="btn-close btn-close-dark text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <a class="nav-link active" aria-current="page" href="#">ホーム</a>
                            <a class="nav-link" href="#">サロンシステム</a>
                            <a class="nav-link" href="single.html">IEホームケア</a>
                            <a class="nav-link" href="#">メカニズム</a>
                            <a class="nav-link" href="#">TOKIO STARS</a>
                        </ul>

                    </div>
                </div>
            </div>
        </nav>