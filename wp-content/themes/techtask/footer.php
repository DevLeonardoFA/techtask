<?php include('svg.php'); ?>


<div class="block w-full flex justify-center bg-black py-14" id="footer">
    <div class="wid_mob w-4/5">

        <div class="menu flex justify-between">
            <?php wp_nav_menu( array('theme_location' => 'footer-menu', 'container_class' => 'w-full', 'menu_class' => 'flex justify-between text-2xl text-white')); ?>
        </div>

        <div id="social-m" class="flex w-full justify-center my-12">
            <div class="flex justify-around items-center w-52">
                <a href="http://" target="_blank" rel="noopener noreferrer" >
                    <?= $instagram; ?>
                </a>
                <a href="http://" target="_blank" rel="noopener noreferrer" >
                    <?= $twitter; ?>
                </a>
                <a href="http://" target="_blank" rel="noopener noreferrer" >
                    <?= $facebook; ?>
                </a>
                <a href="http://" target="_blank" rel="noopener noreferrer" >
                    <?= $linkedin; ?>
                </a>
            </div>
        </div>

        <div class="text_footer-regulation-info text-white text-2xl font-normal">
        RISK DISCLOSURE:*The services and information provided by The Bored Traders Club are not directed at citizens or residents in the USA. Additionally, they are not intended for distribution to or used by any individual in any jurisdiction where such distribution would be contrary to local law or regulation.
        </div>

        <div class="flex w-full justify-center mt-12">
            <div class="flex justify-around items-center w-auto font-bold text-[#8A94F7] text-2xl Grow_n_changeColor">
                <a href="http://" rel="noopener noreferrer" class="mx-2 block" >
                    Risk Disclosure
                </a>
                <a href="http://" rel="noopener noreferrer" class="mx-2 block" >
                    Terms & Conditions
                </a>
                <a href="http://" rel="noopener noreferrer" class="mx-2 block" >
                    Privacy Policy
                </a>
            </div>
        </div>

    </div>
</div>


</body>
</html>