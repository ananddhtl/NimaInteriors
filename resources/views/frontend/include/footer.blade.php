<style>
	
	.copyright span{
		color: #828282;
		text-decoration: underline;
	}
	</style>
<footer>
		<div class="container container-footer">
			<div class="row">
				
				<div class="col-lg-3 col-md-4 col-sm-6 col-6">
					<h5>Ga naar</h5>
					<ul class="footer-nav">
						<li><a href="/"><span>Startpagina</span></a></li>
						<li><a href="/diensten"><span>Projecten</span></a></li>
						{{-- <li><a href="/faq"></i><span>FAQ’s</span></a></li> --}}
						<li><a href="/blog"><span>Blogs</span></a></li>
						<li><a href="/contact"><span>Contact</span></a></li>
					</ul>
				</div>
			
				<div class="col-lg-3 col-md-4 col-sm-12">
					<h5>Neem contact op</h5>
					<div class="address">
						{{-- this will be also dynamic value --}}
						<p>Tel. +32 3 296 82 66</p>
						<p><a href="#">info@nimainteriors.com</a></p>
						<p style="font-weight:bold;">Open op afpraak:</p>
						<p>Herentalsebaan 301 - 2150 Borsbeek</p>
						
						</div>
				</div>
				<div class="col-lg-3 col-md-12 col-sm-12">
					<h5>Blijf op de hoogte</h5>
					<ul class="social">
						{{-- here all the social sites will be also dynamic --}}
						<li><a href="https://www.facebook.com/nimainterieurs/"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://www.instagram.com/nima.interiors/"><i class="fa fa-instagram"></i></a></li>
						<li><a href="https://www.pinterest.com/nimainteriors/"><i class="fa fa-pinterest"></i></a></li>

					</ul>
				</div>
				<div class="col-lg-3 col-md-12 col-sm-12">
					<h5>Haal inspiratie uit onze gratis brochure </h5>
				
					<a href="{{ asset('frontend/assets/doc/Cataloog_NimaIneriors.pdf') }}" target="_blank">
						<button class="btn btn-secondary">
							<i class="fa fa-download" style="margin-right: 5px;"></i> Download
						</button>
					</a>
				</div>

				
			</div>
			<div class="row copyright text-center">
				<div class="col-lg-3 col-md-12 col-sm-12">
						<a href="/algemene-voorwaarden"><span>Algemene voorwaarden</span></a>
						<a href="/privacy"><span>Privacyverklaring</span></a>
						<a href="/contact"><span>Cookies</span></a>
				
				</div>
				{{-- <div class="col-lg-6 col-md-12 col-sm-12">
					<p class="">© 2021 nimainteriors. All Rights Reserved.</p>
				</div> --}}
				<div class="col-lg-3 col-md-12 col-sm-12">
					<p class="">Talen<br>
						Nederlands&nbsp;/&nbsp;English</p>
				</div>
			</div>
		</div>
	</footer>
    </body>
</html>
