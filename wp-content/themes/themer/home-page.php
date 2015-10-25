<?php
/* Template Name: Home Page Template */
get_header(); ?>

<!-- Page preloader -->
<div id="loading">
    <div id="preloader">
        <span></span>
        <span></span>
    </div>
</div>

<!-- Overlay -->
<div class="global-overlay">
    <div class="overlay skew-part"></div>
</div>

<!-- START - Home/Left Part -->
<section id="left-side" class="minimal-phone">

    <!-- Your logo -->
    <img src="img/logo.png" alt="" class="brand-logo" />

    <div class="content">

        <h1 class="text-intro opacity-0">Hey Guys!<br>
            We're Coming Soon...</h1>

        <h2 class="text-intro opacity-0">Perfect and awesome template to present your future product or service.<br>
            Hooking audience attention is all in the opener.</h2>

        <nav>
            <ul>
                <li>
                    <a data-dialog="somedialog" class="action-btn trigger text-intro opacity-0">Notify Me!</a>
                </li>
            </ul>
        </nav>

    </div>

    <!-- Social icons -->
    <div class="social-icons">

        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-google-plus"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>

    </div>

</section>
<!-- END - Home/Left Part -->

<!-- START - Newsletter Popup -->
<div id="somedialog" class="dialog">

    <div class="dialog__overlay"></div>

    <div class="dialog__content">

        <div class="dialog-inner">

            <h4>You like taking the lead of line?</h4>

            <p>Being the first to know always feels great... Signing up to our newsletter gives you <strong>exclusive access to our Grand Opening!</strong></p>

            <!-- Newsletter Form -->
            <div id="subscribe">

                <form id="notifyMe" method="POST">

                    <div class="form-group">

                        <div class="controls">

                            <!-- Field  -->
                            <input type="text" id="mail-sub" name="email" placeholder="Click here to write your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Click here to write your email'" class="form-control email srequiredField" />

                            <!-- Spinner top left during the submission -->
                            <i class="fa fa-spinner opacity-0"></i>

                            <!-- Button -->
                            <button class="btn btn-lg submit">Get notified</button>

                            <div class="clear"></div>

                        </div>

                    </div>

                </form>

                <!-- Answer for the newsletter form is displayed in the next div, do not remove it. -->
                <div class="block-message">

                    <div class="message">

                        <p class="notify-valid"></p>

                    </div>

                </div>

            </div>
            <!-- /. Newsletter Form -->

        </div>
        <!-- /. dialog-inner -->

        <!-- Button Cross to close the Newsletter Popup -->
        <button class="close-newsletter" data-dialog-close><i class="icon ion-close-round"></i></button>

    </div>
    <!-- /. dialog__content -->

</div>
<!-- END - Newsletter Popup -->

<?php get_footer(); ?>
