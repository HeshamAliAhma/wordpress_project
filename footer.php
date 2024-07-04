        <footer class="footer">
            <div class="container">
                <div class="row footer-info">
                    <div class="footer-logo">
                        <img src="<?php echo get_template_directory_uri() . "/images/logo.png"?>" alt="">
                        <div class="footer-text">
                            <?php bloginfo( "description" )?>
                        </div>
                    </div>
                    <div class="footer-category">
                        <h4>Games Categories</h4>
                        <ul class="footer-category-list">
                            <li>
                                <a href="#">
                                    RPG
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Hack & Slash
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Puzzle
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Adventure
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-links">
                        <h4>Important Links</h4>
                        <ul class="footer-Important-links">
                            <li>
                                <a href="#">
                                    Sample Page
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Testimonials
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    The Team
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer-content">
                    <div class="copyRight">
                        © 2024. <?php bloginfo("name")?>
                    </div>
                    <ul class="social-media">
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>

        <?php wp_footer();?>
        </body>

        </html>