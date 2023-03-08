        <footer>
            <section class="footer-widgets container">
                <div class="widgets-rodape">                
                    <?php if ( is_active_sidebar( 'area-footer' ) ) : ?>
                    <?php dynamic_sidebar( 'area-footer' ); ?>
                    <?php endif; ?>         
                </div>
            </section>
        
            <section class="copyright container">
                <div class="copyright-text">
                    <p>© Copyright 2023. Todos os direitos reservados.<strong> Guia De Fatos</strong></p>   
                </div>
            </section>
        </footer>
    </div>
    <?php wp_footer(); ?>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BD6XS65SNR"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date()
        );

        gtag('config', 'G-BD6XS65SNR');
    </script>

</body>
</html>