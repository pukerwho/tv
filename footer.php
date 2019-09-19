    </section>
    <footer id="footer" class="footer pt-5">
    	<div class="container bb_width-md">
    		<div class="row pb-5">
    			<div class="col-xl-3 col-md-4 col-sm-6">
    				<img src="<?php echo carbon_get_theme_option('crb_logo') ?>" alt="" class="pb-4 img-fluid">
    			</div>
    			<div class="col-xl-9">
    				<div class="row">
    					<div class="col-md-3 col-sm-6 col-6 xs-view">
    						<?php wp_nav_menu([
                  'theme_location' => 'head_menu',
                  'container' => 'nav',
                  'menu_id' => 'head_menu',
                ]); ?>
                <div class="header__login">
                  <ul>
                    <li>
                      <a href="<?php echo carbon_get_theme_option('crb_links_resseler_agent') ?>">
                        Reseller/Agent
                      </a>  
                    </li>
                    <li>
                      <a href="<?php echo carbon_get_theme_option('crb_links_customer') ?>">
                        Customer
                      </a> 
                    </li>  
                  </ul>
                </div>
    					</div>
    					<div class="col-md-4 col-sm-6 col-6 xs-view">
    						<?php wp_nav_menu([
                  'theme_location' => 'footer_menu',
                  'container' => 'nav',
                  'menu_id' => 'head_menu',
                ]); ?>
    					</div>
    					<div class="col-md-5 col-sm-12 col-12 xs-view">
    						<h5>Contact Us</h5>
    						<ul>
    							<li>
    								<span>Sales: &nbsp;</span>
    								<a href="mailto:<?php echo carbon_get_theme_option('crb_email_sales') ?>"><?php echo carbon_get_theme_option('crb_email_sales') ?></a>
    							</li>
    							<li>
    								<span>Logistic: &nbsp;</span>
    								<a href="mailto:<?php echo carbon_get_theme_option('crb_email_logistic') ?>"><?php echo carbon_get_theme_option('crb_email_logistic') ?></a>
    							</li>
    							<li>
    								<span>Reseller or Agent: &nbsp;</span>
    								<a href="mailto:<?php echo carbon_get_theme_option('crb_email_resseler') ?>"><?php echo carbon_get_theme_option('crb_email_resseler') ?></a>
    							</li>
    							<li>
    								<span>Support: &nbsp;</span>
    								<a href="mailto:<?php echo carbon_get_theme_option('crb_email_support') ?>"><?php echo carbon_get_theme_option('crb_email_support') ?></a>
    							</li>
    						</ul>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="row pb-3">
    			<div class="col-12 small_view">
    				<div class="text-center">
    					Copyright © BestBox / Monte International Trade (Tianjin) Co Ltd. All trademarks and copyrights belong to their respective owners.
    				</div>
    			</div>
    		</div>
    	</div>
    </footer>
    <!-- Modal -->
    <div class="modal fade imp-note show" id="imp-note">
        <div class="modal-dialog modal-lg">
            <div class="modal-content modal_bg">
                <div class="modal-header">
                    <h4 class="modal-title font-primary-book">Important Note</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body font-primary-book">
                    <p>Please note as AliExpress only sells products and not services. When buying a subscription it may appear at first that you are purchasing a product, in fact you are purchasing the BESTBOX streaming service, which you will receive access to shortly after your transaction has been completed. When you purchase the subscription with a BESTBOX TV box, the item will be shipped to your shipping address and you will receive a DHL tracking number within 1-2 days upon purchase.</p>

                    <p>During the purchase you will be asked to open an AliExpress account, just requires your email address and a password of your choice and will be valid for future purchases. After purchase you will receive an email with your code details, generally this will take a couple of hours so hold tight you will be up and running in no time. All of this may seem heavy but have a go, it is very easy and secure for card payment.</p>

                    <p>If you have any questions please dont hesitate to contact us.</p>
                </div>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</body>
</html>