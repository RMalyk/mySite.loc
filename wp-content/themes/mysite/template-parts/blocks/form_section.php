<?php

if (!defined('ABSPATH') || empty($block)) exit;
if (GutenbergBlocks::checkForPreview($block)) return;

$title      = get_field('title');
$text       = get_field('text');
$image_mini = get_field('image_mini');
$image_bg   = get_field('image_bg');
$form_code   = get_field('form_code');
//$image_preview = get_field('image_preview');

//debug_data($form_code,true);
?>


<div class="form_section">
	<div class="wrapper_global">
      <?php
      if(!empty($title)){?>
          <div class="section_title">
              <?php
              DisplayGlobal::renderAcfImage($image_mini);
              DisplayGlobal::renderTag($title,'h2');
              ?>
              <!--			<img src="images/icons/action.svg" alt="action">-->
              <!--			<h2>Играй и выигрывай!</h2>-->
          </div>
      <?php }
      ?>

        <?php
        if(!empty($text)){ echo $text; }
        ?>
<!--		<p>Играй в <span>Cyberpunk 2077</span> и получи возможность выиграть консоль <span>Xbox Series X</span> или-->
<!--			<span>Sony PlayStation 5!</span>-->
<!--			Заполни форму ниже и приложи скриншот о покупке игры. Итоги розыгрыша будут подведены 1 февраля. Удачи!-->
<!--			;)</p>-->


		<?php
//		echo do_shortcode('[contact-form-7 id="27d0eb4" title="Feedback"]');
		?>



		<div class="form_wrapper">
			<div class="form_box">
				<?php
				if(!empty($form_code)){
					echo do_shortcode($form_code);
				}
				?>





<!--				<form action="">-->
<!--					<input type="text" name="name" placeholder="Как тебя зовут?">-->
<!--					<input type="email" name="email" placeholder="Твой е-mail">-->
<!--					<textarea name="" placeholder="Напиши мне!"></textarea>-->
<!--					<button type="submit">Отправить</button>-->
<!--					<label class="form_checkbox">Согласен на обработку персональных данных-->
<!--						<input type="checkbox">-->
<!--						<span class="form_checkmark"></span>-->
<!--					</label>-->
<!--				</form>-->
			</div>
            <?php
            if(!empty($image_bg)){ ?>
                <div class="img_box">
                    <?php
                    DisplayGlobal::renderAcfImage($image_bg);
                    ?>
<!--                    <img src="images/img-1.png" alt="img-1">-->
                </div>
            <?php }
            ?>

		</div>
	</div>
</div>

