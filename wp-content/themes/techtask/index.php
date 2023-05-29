<?= get_header(); ?>

<main id="main" class="w-full flex justify-center my-2 flex-wrap">

    <div class="banner w-4/5 relative flex justify-end min-h-[40rem]">

        <?php $content_group = get_field('content'); ?>

        <div class="content block absolute left-0 w-2/6 top-1/2 translate-y-[-75%] min-w-[30rem]">
            <?= $content_group['text_content']; ?>
        </div>

        <div class="flex w-3/4 h-auto min-[320px]:w-[70%]">
            <img src="<?= $content_group['image_content']['url']; ?>" alt="hero">
        </div>


    </div>

    <section class="cards w-4/5 relative flex justify-center flex-wrap pt-4 pb-28">

        <div class="w-full text-center text_cardssection">
            <?= get_field('text_cards_section'); ?>
        </div>

        <div class="w-full flex justify-between">  

        <?php 

        $cards = get_field('cards');

        foreach($cards as $card){

            $img = $card['card']['card_image']['url'];
            $content = $card['card']['card_text'];
            $cardHTML =  '<div class="border-[#fff0] border-solid border-4 rounded-3xl card items-center flex flex-col justify-center p-7 bg-red max-w-[23.875rem] max-h-[29.125rem]">';
            $cardHTML .= '<img src="'.$img.'" alt="img-card">';
            $cardHTML .= '<div class="content text-center">';
            $cardHTML .= $content;
            $cardHTML .= '</div>';
            $cardHTML .= '</div>';

            echo $cardHTML;

        }

        ?>

        </div>

    </section>

</main>

<?= get_footer(); ?>
