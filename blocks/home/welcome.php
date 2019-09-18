<div class="welcome">
	<div class="slider">
		<div class="swiper-container swiper-welcome-container">
			<div class="swiper-wrapper">
				<?php 
				$welcome_sliders = carbon_get_the_post_meta('crb_main_slider');
				foreach( $welcome_sliders as $welcome_slider ): ?>
					<div class="swiper-slide">
						<div class="slider__item" style="background: url(<?php echo $welcome_slider['crb_main_slider_bg'] ?>); -webkit-background-size: cover; background-size: cover; background-position: top;">
							<div class="container bb_width">
								<div class="row slider__item-align-center">
									<div class="col-lg-6">
										<div class="slider__item-title">
											<?php echo $welcome_slider['crb_main_slider_title'] ?>	
										</div>
									</div>
									<div class="col-lg-6">
										<div class="slider__item-img">
											<img src="<?php echo $welcome_slider['crb_main_slider_img'] ?>" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination swiper-welcome-pagination"></div>
		</div>
	</div>
</div>