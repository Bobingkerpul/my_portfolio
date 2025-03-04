<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Portfolio" />
    <meta name="author" content="Cj Abarca" />
    <link rel="stylesheet" href="../public/css/reset.css" />
    <link rel="stylesheet" href="../public/css/fonts.css" />
    <link rel="stylesheet" href="../public/css/index.css" />
    <link rel="icon" type="image/x-icon" href="../public/uploads/favicon.svg" />
    <link rel="stylesheet" href="../public/css/cursor.css" />
    <link rel="stylesheet" href="../public/css/gsap.css" />
    <link rel="stylesheet" href="../public/css/progress.css" />
    <link rel="stylesheet" href="../public/css/textAnimation.css" />
    <link rel="stylesheet" href="./style/header.css" />
    <link rel="stylesheet" href="./style/aside.css" />
    <link rel="stylesheet" href="./style/main.css" />
    <link rel="stylesheet" href="./style/ui-ux.css" />
    <script src="../public/js/gsap.min.js"></script>
    <title>Bobing Portfolio</title>
    <!-- Google tag (gtag.js) -->
    <script
        async
        src="https://www.googletagmanager.com/gtag/js?id=G-M1D7MCSGV6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-M1D7MCSGV6");
    </script>
</head>

<body>
    <?php include('theme/header.php'); ?>

    <div class="dashboard">
        <?php include('theme/sidebar.php'); ?>
        <main class="main">
            <section>
                <h1>Upload UI/UX info</h1>

                <div class="upload-design">
                    <div class="upload-form col2">
                        <form action="uploaduiux.php" method="POST" enctype="multipart/form-data">
                            <div class="contact-section__column">
                                <div class="contact-section__form-inputfield">
                                    <span>Upload Image</span>
                                    <input
                                        type="file"
                                        name="image"
                                        id="image"
                                        class=""
                                        required />
                                </div>

                                <div class="contact-section__form-inputfield">
                                    <input
                                        type="text"
                                        name="name"
                                        id="name"
                                        class="input"
                                        required />
                                    <label for="name">Heading / Title of the Design</label>
                                </div>
                                <div class="contact-section__form-inputfield">
                                    <input
                                        type="text"
                                        name="link"
                                        id="link"
                                        class="input"
                                        required />
                                    <label for="link">Link of Figma or Live Site</label>
                                </div>
                            </div>
                            <div class="contact-section__form-button">
                                <button type="submit" name="upload" style="color: var(--accent);">Upload</button>
                            </div>
                        </form>
                    </div>
                    <div class="upload-image-holder col2">
                        <img src="../public/uploads/image-holder.jpg" id="imageholder">
                    </div>
                </div>
            </section>
        </main>
    </div>

    <script src="./js/image.js"></script>
</body>

</html>