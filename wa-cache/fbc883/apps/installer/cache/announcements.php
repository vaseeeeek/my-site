<?php
return array (
  'status' => 'ok',
  'data' => 
  array (
    'a-violation-0816' => 
    array (
      'html' => 
      array (
        'header_top' => '
<section class="a-product-violation" id="a-product-violation62fbeab2da91a" style="background-color: #ffcccc; padding: 10px;">
    <form class="js-buy-product-form" method="POST" action="https://www.webasyst.ru/buy/apps/?utm_campaign=violation&utm_medium=backend&utm_source=installation-announce">
        <p style="margin: 0;">
            <i class="icon16 exclamation"></i>
            <strong>У вас установлены нелицензионные программные продукты:</strong>  приложение <em>Shop-Script</em>.

            Чтобы использовать эти продукты, купите и активируйте их лицензии в приложении «Инсталлер». Или удалите их, чтобы не нарушать лицензионное соглашение Webasyst.

                    <input type="hidden" name="hash" value="d5ee84337619cdf598cd68ae0874852f">
            <input type="hidden" name="domain" value="my-site">
            <input type="hidden" name="app_id[]" value="129">
            <a href="javascript:void(0)" class="js-submit-button">Купить или активировать лицензию</a>
                </p>
    </form>
</section>
<script>
    $(function () {
        var $wrapper_id = $(\'#a-product-violation62fbeab2da91a\');
        $wrapper_id.on(\'click\', \'.js-submit-button\', function (e) {
            e.preventDefault();
            var $link = $(this);
            var $form = $link.closest(\'.js-buy-product-form\');
            $form.submit();
        });
    });
</script>',
        'notification' => '
<section class="a-product-violation" id="a-product-violation62fbeab2db67a">
    <form class="js-buy-product-form" method="POST" action="https://www.webasyst.ru/buy/apps/?utm_campaign=violation&utm_medium=backend&utm_source=installation-announce">
        <strong>У вас установлены нелицензионные программные продукты:</strong>  приложение <em>Shop-Script</em>.

        Чтобы использовать эти продукты, купите и активируйте их лицензии в приложении «Инсталлер». Или удалите их, чтобы не нарушать лицензионное соглашение Webasyst.

                    <input type="hidden" name="hash" value="d5ee84337619cdf598cd68ae0874852f">
            <input type="hidden" name="domain" value="my-site">
            <input type="hidden" name="app_id[]" value="129">
            <a href="javascript:void(0)" class="js-submit-button">Купить или активировать лицензию</a>
            </form>
</section>
<script>
    $(function () {
        var $wrapper_id = $(\'#a-product-violation62fbeab2db67a\');
        $wrapper_id.on(\'click\', \'.js-submit-button\', function (e) {
            e.preventDefault();
            var $link = $(this);
            var $form = $link.closest(\'.js-buy-product-form\');
            $form.submit();
        });
    });
</script>',
      ),
    ),
    'a-offer-2022-08' => 
    array (
      'html' => 
      array (
        'header_top' => '
<section class="a-offer" id="a-offer62fbeab2dc450" style="background-color: #ffeeaa; padding: 10px;">
    <p style="margin: 0;">

            
                    <b>-50% на «Весь Webasyst» до 31 августа</b>: комплект всех 15+ главных приложений Webasyst с максимальной скидкой и <b>выгодой до 70 994 рублей</b>. Чем больше приложений вы покупали ранее, тем ниже будет ваша персональная стоимость всего комплекта, а скидка сохранится. <input type="button" value="Купить весь Webasyst" onClick="window.location.href=\'https://www.webasyst.ru/buy/store/bundle/all-webasyst/\';"> &nbsp; <a href="https://www.webasyst.ru/pricing/#ownserver" target="_blank">Подробнее о комплекте</a>
        
    
    </p>
</section>',
        'notification' => '
<section class="a-offer" id="a-offer62fbeab2dcffa">
    
            
                    <strong style="color: var(--text-color-strongest);">-50% на «Весь Webasyst» до 31 августа</strong>: комплект всех 15+ главных приложений Webasyst с максимальной скидкой и <b>выгодой до 70 994 рублей</b>. Чем больше приложений вы покупали ранее, тем ниже будет ваша персональная стоимость всего комплекта, а скидка сохранится. <input type="button" value="Купить весь Webasyst" onClick="window.location.href=\'https://www.webasyst.ru/buy/store/bundle/all-webasyst/\';"> &nbsp; <a href="https://www.webasyst.ru/pricing/#ownserver" target="_blank">Подробнее о комплекте</a>
        
    </section>',
      ),
    ),
  ),
);
