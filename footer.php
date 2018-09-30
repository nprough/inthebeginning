<?php
// The footer of your page, include get_footer() function to add it to a page.
?>
        </div>

        <footer>
            <?php
            printf( esc_html__( '%1$s by %2$s', 'In The Beginning' ), 'In The Beginning', '<a href="https://proughwebdesign.com">Prough Web Design, LLC</a>' );
            ?>
        </footer>
    </div>
    <?php wp_footer(); ?>
    </body>
</html>