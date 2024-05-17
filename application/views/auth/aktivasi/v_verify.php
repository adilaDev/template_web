<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <?= (isset($title)) ? "<title>" . $title . "</title>" : "<title>Email Verification | Rokesuma Alternative Web</title>" ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/LOGO_ARI/logo_ari_green.svg">

    <!-- owl.carousel css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/libs/owl.carousel/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/libs/owl.carousel/assets/owl.theme.default.min.css">

    <!-- Bootstrap Css -->
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url() ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url() ?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body class="auth-body-bg">

    <div>
        <div class="container-fluid p-0">
            <div class="row g-0">

                <div class="col-xl-9">
                    <div class="auth-full-bg pt-lg-5 p-4">
                        <div class="w-100">
                            <div class="bg-overlay"></div>
                            <div class="d-flex h-100 flex-column">

                                <div class="p-4 mt-auto">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7">
                                            <div class="text-center">

                                                <h4 class="mb-3">
                                                    <span class="text-primary h3"><?= NAMA_WEB ?></span>
                                                </h4>

                                                <div dir="ltr">
                                                    <img src="<?= base_url() ?>assets/images/verification-img.png" alt="login" width="100%" height="460px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-3">
                    <div class="auth-full-page-content p-md-5 p-4">
                        <div class="w-100">

                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5">
                                    <a href="javascript:void(0);" class="d-block auth-logo">
                                        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 277 140" width="90" height="40">
                                            <title>Logo PT ARI Green</title>
                                            <defs>
                                                <image width="263" height="128" id="img1" href="data:image/png;base64,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" />
                                            </defs>
                                            <style>
                                            </style>
                                            <use id="Background" href="#img1" x="5" y="6" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="my-auto">

                                    <div class="text-center">

                                        <div class="avatar-md mx-auto">
                                            <div class="avatar-title rounded-circle bg-light">
                                                <i class="bx bxs-envelope h1 mb-0 text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="p-2 mt-4">
                                            <h4>Verify your email</h4>
                                            <p>We have sent you verification email <span class="fw-semibold">example@abc.com</span>, Please check it
                                            </p>
                                            <div class="mt-4">
                                                <a href="index.html" class="btn btn-success w-md">Verify email</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Footer -->
                                <div class="mt-4 mt-md-5 text-center">
                                    <p class="mb-0">©
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script>
                                        <b class="text-primary">
                                            ROKESUMA ALTERNATIVE WEB.
                                        </b>
                                        <!-- Crafted with <i class="mdi mdi-heart text-danger"></i>  -->
                                        Developed by
                                        <img src="<?= base_url() ?>assets/images/LOGO_ARI/logo_ari_green.svg" alt="" height="12">
                                    </p>
                                </div>
                                <!-- End Footer -->
                            </div>


                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>

    <!-- JAVASCRIPT -->
    <script src="<?= base_url() ?>assets/libs/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/simplebar/simplebar.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/node-waves/waves.min.js"></script>

    <!-- owl.carousel js -->
    <script src="<?= base_url() ?>assets/libs/owl.carousel/owl.carousel.min.js"></script>

    <!-- auth-2-carousel init -->
    <script src="<?= base_url() ?>assets/js/pages/auth-2-carousel.init.js"></script>

    <!-- App js -->
    <script src="<?= base_url() ?>assets/js/app.js"></script>

</body>

</html>