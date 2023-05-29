<?= get_header(); ?>

<main id="main" class="w-full flex justify-center my-2 flex-wrap">

    <div class="
    wid_mob
    banner
    w-4/5
    relative
    flex
    flex-wrap
    justify-end
    pt-14
    min-[768]:pt-0
    min-[1024px]:min-h-[40rem]
    min-[1024px]:items-center
    min-[1240px]:min-h-[45rem]">

        <?php $content_group = get_field('content'); ?>

        <div class="
        content 
        block
        w-full
        min-[769px]:max-w-[30rem]
        min-[1024px]:w-1/2
        min-[1240px]:w-4/12
        min-[1240px]:absolute
        min-[1240px]:left-0
        min-[1240px]:top-1/2
        min-[1240px]:translate-y-[-75%]
        ">
            <?= $content_group['text_content']; ?>
        </div>

        <div class="
        flex
        h-auto
        w-full
        min-[1024px]:w-1/2
        min-[1280px]:w-[70%]
        min-[1366px]:w-3/4
        ">
            <img src="<?= $content_group['image_content']['url']; ?>" alt="hero">
        </div>


    </div>

    <section class="wid_mob cards w-4/5 relative flex justify-center flex-wrap pt-4 pb-28">

        <div class="w-full text-center text_cardssection">
            <?= get_field('text_cards_section'); ?>
        </div>

        <div class="w-full flex justify-between cards_loop">
            <?php 

            $cards = get_field('cards');

            foreach($cards as $card){

                $img = $card['card']['card_image']['url'];
                $content = $card['card']['card_text'];
                $cardHTML =  '<div class="
                border-[#fff0]
                border-solid
                border-4
                rounded-3xl
                card
                items-center
                min-[769px]:flex
                min-[769px]:flex-col
                min-[769px]:justify-center
                min-[769px]:p-1
                min-[769px]:max-w-[17rem]
                min-[1028px]:p-7
                min-[1028px]:max-w-[23.875rem]
                min-[1028px]:max-h-[29.125rem]
                ">';
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
