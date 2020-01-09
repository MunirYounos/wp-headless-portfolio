<footer>
    <div class="container">
        <div class="decor">
        <div class="decoration-item"></div>
        </div>
        <div class="footer-flex">
        <a href="<?php echo site_url(); ?>" class="footer-link">
            <?php include "assets/images/logo.php"; ?>
        </a>
        <h2 class="footer-title">Contact me</h2>
        <h3 class="footer-name">Munir Younosi</h3>
        <a href="tel:+4560526066" class="footer-phone">+45 60 52 60 66</a>
        <a href="mailto:eaaamy@gmail.com" class="footer-email">eaaamy@gmail.com</a>
        <div class="footer-icons">
                <ul class="footer-icons-ul">
                    <li class="footer-icons-item l"><a href="#" class="footer-icons-link"><i class="fab fa-linkedin"></i></a></li>
                    <li class="footer-icons-item g"><a href="#" class="footer-icons-link"><i class="fab fa-github"></i></a></li>
                    <li class="footer-icons-item b"><a href="#" class="footer-icons-link"><i class="fab fa-behance"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copy">
      <p class="copy-text"><span>&copy;</span> All Rights reserved <?php echo date('Y'); ?>.</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>