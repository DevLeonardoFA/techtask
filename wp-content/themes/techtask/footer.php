<?php include('svg.php'); ?>


<div class="block w-full flex justify-center bg-black py-14" id="footer">
    <div class="wid_mob w-4/5">

        <div class="menu flex justify-between max-[768px]:flex-wrap">
            <?php wp_nav_menu( array('link_after' => '<span>></span>', 'theme_location' => 'footer-menu', 'container_class' => 'w-full', 'menu_class' => 'flex justify-between text-2xl text-white')); ?>
        </div>


        <div class="change_order_for_mobile">

            <div id="social-m" class="flex w-full justify-center my-12">
                <div class="flex justify-around items-center w-52">
                    <?php

                    $sociamedia = get_field('social_media');

                    $instagram_acf  = $sociamedia['instagram'];
                    $twitter_acf    = $sociamedia['twitter'];
                    $facebook_acf   = $sociamedia['facebook'];
                    $linkedin_acf   = $sociamedia['linkedin'];

                    if($instagram_acf['url']){
                        echo '<a href="'.$instagram_acf['url'].'" target="_blank" rel="noopener noreferrer">'.$instagram.'</a>';
                    }
                    if($twitter_acf['url']){
                        echo '<a href="'.$twitter_acf['url'].'" target="_blank" rel="noopener noreferrer">'.$twitter.'</a>';
                    }
                    if($facebook_acf['url']){
                            echo '<a href="'.$facebook_acf['url'].'" target="_blank" rel="noopener noreferrer">'.$facebook.'</a>';
                    }
                    if($linkedin_acf['url']){
                        echo '<a href="'.$linkedin_acf['url'].'" target="_blank" rel="noopener noreferrer">'.$linkedin.'</a>';
                    }

                    ?>
                    
                </div>
            </div>

            <div class="text_footer-regulation-info text-white text-2xl font-normal">
                <?= get_field('footer_text'); ?>
            </div>

        </div>

        <div class="flex w-full justify-center mt-12">
            <div class="flex justify-around items-center w-auto font-bold text-[#8A94F7] text-2xl Grow_n_changeColor">
                <?php
                
                $links = get_field('final_links');

                foreach($links as $link){
                    
                    $url = $link['item']['url'];
                    $txt = $link['item']['title'];

                    echo '<a href="'.$url.'" rel="noopener noreferrer" class="mx-2 block" >'.$txt.'</a>';

                }
                
                ?>
            </div>
        </div>

    </div>
</div>


</body>
</html>