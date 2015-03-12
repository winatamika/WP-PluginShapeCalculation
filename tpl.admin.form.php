<?php
// don't load directly
if (!defined('ABSPATH'))
    die('-1');

$setting = cab_shapecalculation_load_setting();

?><div class="wrap">

    <?php screen_icon(); ?>

    <h2><?php
    echo esc_html("CanopyArtBali Shape Calculation");
    ?></h2>

    <form method="post" action="" id="">
        <div id="poststuff" class="metabox-holder">
            <p class="tagcode">
                <?php echo esc_html("Price"); ?><br />
                <input type="text" id="cab-anchor-text" name="cab-price" onfocus="this.select();" value="<?php echo $setting['price']; ?>" />
            </p>

            <p class="cab-save">
                <input type="submit" class="button-primary" name="cab-save" value="Save" />
            </p>

        </div>
    </form>
</div>