		<br/>

        <!-- Footer -->
		<div class="navbar navbar-inverse">
			<div class="container">				
				<p class="navbar-text pull-left">Powered by <a href="http://www.winsagetech.com">Winsage Technologies Pvt Ltd</a></p>
				<p class="navbar-text pull-right">
					<ul class="list-unstyled list-inline list-social-icons pull-right navbar-text">
						<li>
							<a href="https://www.facebook.com/NaharDrugs">Subscribe to our updates on: <i class="fa fa-facebook-square fa-2x"></i></a>
						</li>
						<!--
						<li>
							<a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
						</li>
						-->
					</ul>
				</p>							
			</div>
			<div class = "container">
				<p class="navbar-text pull-left"><a href="login.php">Admin Login</a></p>
			</div>
		</div>

    </div>
    <!-- /.container -->

    <script>
        var $logo = $('#logo');
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $logo.fadeOut();
            } else {
                $logo.fadeIn();
            }
        });
    </script>