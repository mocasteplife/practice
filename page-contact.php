<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
    <?php get_header(); ?>
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
        <?php get_template_part('inc/header'); ?>
            <!-- Page content-->
            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Get in touch</h1>
                            <p class="lead fw-normal text-muted mb-0">We'd love to hear from you</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <form>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputName" type="text" placeholder="Enter your name..." />
                                        <label for="inputName">Full name</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                        <label for="inputEmail">Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputPhone" type="tel" placeholder="(123) 456-7890" />
                                        <label for="inputPhone">Phone number</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="inputMessage" type="text" placeholder="Enter your message here..." style="height: 10rem"></textarea>
                                        <label for="inputMessage">Message</label>
                                    </div>
                                </form>
                                <a class="btn btn-primary btn-lg btn-send" href="#scroll-target">送信</a>
                            </div>
                        </div>
                    </div>
                    <!-- Contact cards-->
                    <div class="row gx-5 row-cols-2 row-cols-lg-4 py-5">
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-chat-dots"></i></div>
                            <div class="h5 mb-2">Chat with us</div>
                            <p class="text-muted mb-0">Chat live with one of our support specialists.</p>
                        </div>
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people"></i></div>
                            <div class="h5">Ask the community</div>
                            <p class="text-muted mb-0">Explore our community forums and communicate with other users.</p>
                        </div>
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-question-circle"></i></div>
                            <div class="h5">Support center</div>
                            <p class="text-muted mb-0">Browse FAQ's and support articles to find solutions.</p>
                        </div>
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-telephone"></i></div>
                            <div class="h5">Call us</div>
                            <p class="text-muted mb-0">Call us during normal business hours at (555) 892-9403.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php get_template_part('inc/footer'); ?>

<?php get_footer(); ?>     
    </body>
</html>
