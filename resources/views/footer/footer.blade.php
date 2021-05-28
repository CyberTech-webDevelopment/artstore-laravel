<section class="footer pt-4">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-7 col-sm-6 footer-left">
				<div class="row pl-0 pr-0 d-flex justify-content-between">
					<div class=" col-3">
						<div class="footer-img-logo pb-4">
							<img src="{{asset('assets\images\logo.png')}}">
						</div>
						<hr width="80%" color="#959595" class="ft-hr">
						<div class="pt-4 br-1 text-center">
							<p class="mb-0">+37455555555</p>
							<p>info@artstore.am</p>
						</div>
					</div>
					<div class="">
						<div class="text-strong ft-br-1">{{ app()->getLocale()=='en' ? 'Information' : ( app()->getLocale()=='ru' ? 'Информация' : ( app()->getLocale()=='am' ? 'Տեղեկատվություն' : 'Information')) }}</div>
						<div>
							<ul>
								<li><a href=""> {{ app()->getLocale()=='en' ? 'About Us' : ( app()->getLocale()=='ru' ? 'О нас' : ( app()->getLocale()=='am' ? 'Մեր մասին' : 'About Us')) }}</a></li>
								<li><a href=""> {{ app()->getLocale()=='en' ? 'Contact Us' : ( app()->getLocale()=='ru' ? 'Контакт' : ( app()->getLocale()=='am' ? 'Կապ մեզ հետ' : 'Contact Us')) }}</a></li>
								<li><a href=""> {{ app()->getLocale()=='en' ? 'Rules & Policies' : ( app()->getLocale()=='ru' ? 'Правила и политика' : ( app()->getLocale()=='am' ? 'Կանոններ և քաղաքականություն' : 'Rules & Policies')) }}</a></li>
								<li><a href=""> {{ app()->getLocale()=='en' ? 'Blog' : ( app()->getLocale()=='ru' ? 'Блог' : ( app()->getLocale()=='am' ? 'Բլոգ' : 'Blog')) }}</a></li>
								<li><a href=""> {{ app()->getLocale()=='en' ? 'Help' : ( app()->getLocale()=='ru' ? 'Помощь' : ( app()->getLocale()=='am' ? 'Օգնություն' : 'Help')) }}</a></li>
								<li><a href=""> {{ app()->getLocale()=='en' ? 'Career' : ( app()->getLocale()=='ru' ? 'Карьера' : ( app()->getLocale()=='am' ? 'Կարիերա' : 'Career')) }}</a></li>
								<li><a href=""> {{ app()->getLocale()=='en' ? 'FAQ' : ( app()->getLocale()=='ru' ? 'ЧЗВ' : ( app()->getLocale()=='am' ? 'ՀՏՀ' : 'FAQ')) }}</a></li>
							</ul>
						</div>
					</div>
					<div class=" ">
						<div class="text-strong ft-br-1">{{ app()->getLocale()=='en' ? 'Shop' : ( app()->getLocale()=='ru' ? 'Магазин' : ( app()->getLocale()=='am' ? 'Խանութ' : 'Shop')) }}</div>
						<div>
							<ul>
								<li><a href="">Jewelry</a></li>
								<li><a href="">Accessories</a></li>
								<li><a href="">Clothing</a></li>
								<li><a href="">Home & Living</a></li>
								<li><a href="">Childrens</a></li>
								<li><a href="">Entertainment</a></li>
								<li><a href="">Artwork</a></li>
								<li><a href="">Crafts</a></li>
								<li><a href="">Bath & Body</a></li>
								<li><a href="">Wedding/Party</a></li>
							</ul>
						</div>
					</div>
					<div class=" ">
						<div class="text-strong ft-br-1">{{ app()->getLocale()=='en' ? 'Customer Care' : ( app()->getLocale()=='ru' ? 'Обслуживание клиентов' : ( app()->getLocale()=='am' ? 'Սպասարկման կենտրոն' : 'Customer Care')) }}</div>
						<div>
							<ul>
								<li><a href="">{{ app()->getLocale()=='en' ? 'My account' : ( app()->getLocale()=='ru' ? 'Мой аккаунт' : ( app()->getLocale()=='am' ? 'Անձնական էջ' : 'My account')) }}</a></li>
								<li><a href="">{{ app()->getLocale()=='en' ? 'Wish List' : ( app()->getLocale()=='ru' ? 'Список желаний' : ( app()->getLocale()=='am' ? ' ցուցակ' : 'Wish List')) }}</a></li>
							</ul>
						</div>
					</div>

				</div>
				<div class="design-by">Designed & developed by CyberTech LLC</div>
			</div>
			<div class="mr-auto ml-auto col-lg-4 col-md-5 col-sm-6 d-flex footer-right flex-column justify-content-start text-center">
				<div class=" mb-4">
					<div class="text-strong tuch pb-3 mt-0"> {{ app()->getLocale()=='en' ? 'Get In Tuch' : ( app()->getLocale()=='ru' ? 'tuch' : ( app()->getLocale()=='am' ? 'tuch' : 'Get In Tuch')) }}</div>
					<div class="soc-icons d-flex text-center justify-content-center">
						<div class="linkdin ml-3 mr-3"><a href=""><img src="{{ asset('assets\icons\linkedin.png') }}"></i></a></div>
						<div class="instagram ml-3 mr-3 "><a href=""><img src="{{ asset('assets\icons\instagram.png') }}"></a></div>
						<div class="facebook ml-3 mr-3 "><a href=""><img src="{{ asset('assets\icons\footer-facebook.png') }}"></a></div>
					</div>
				</div>
				<div class="mt-4">
					<div class="text-strong newsletter mb-2">{{ app()->getLocale()=='en' ? 'Sign Up For Our Newsletter' : ( app()->getLocale()=='ru' ? 'Подпишитесь на нашу рассылку' : ( app()->getLocale()=='am' ? ' Գրանցվեք մեր նորությունների համար' : 'Sign Up For Our Newsletter')) }}</div>


                        <input type="text" name="" class="email-inp pl-2" placeholder="{{ app()->getLocale()=='en' ? 'Enter your E-Mail' : ( app()->getLocale()=='ru' ? 'Введите адрес эл․ почты' : ( app()->getLocale()=='am' ? ' Մուտքագրեք ձեր էլ․փոստը' : 'Enter your E-Mail')) }}">
                        <input type="hidden" value="{{ route('subscribe.email',app()->getLocale()) }}" class='subscribe'>
                        <button class="news-submit text-strong ml-2" >{{ app()->getLocale()=='en' ? 'Sign Up' : ( app()->getLocale()=='ru' ? 'Зарегистрироваться' : ( app()->getLocale()=='am' ? 'Գրանցվել' : 'Sign Up')) }}</button>



                    <div class="email-message mt-2"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="footer-bottom">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-7 col-sm-6 footer-bottom-left d-flex pt-3 justify-content-around">
				<div class=" accept text-strong pl-0"> {{ app()->getLocale()=='en' ? 'We Accept' : ( app()->getLocale()=='ru' ? 'Мы принимаем' : ( app()->getLocale()=='am' ? 'Մենք ընդունում ենք' : 'We Accept')) }}</div>
				<div class=""><img src="{{ asset('assets\images\cards\visa.png') }}" alt="visa" title="visa"></div>
				<div class=""><img src="{{ asset('assets\images\cards\MasterCard.png') }}" alt="MasterCard" title="MasterCard"></div>
				<div class=""><img src="{{ asset('assets\images\cards\paypal.png') }}" alt="paypal" title="paypal"></div>
				<div class=""><img src="{{ asset('assets\images\cards\amex.png') }}" alt="amex" title="amex"></div>
				<div class=""><img src="{{ asset('assets\images\cards\arca.png') }}" alt="arca" title="arca"></div>
				<div class=""><img src="{{ asset('assets\images\cards\qiwi.png') }}" alt="qiwi" title="qiwi"></div>
				<div class=""><img src="{{ asset('assets\images\cards\webmoney.png') }}" alt="webmoney" title="webmoney"></div>
				<div class=""><img src="{{ asset('assets\images\cards\idram.png') }}" alt="idram" title="idram"></div>

			</div>
			<div class="col-md-5 col-sm-6 footer-bootom-right pt-3 text-strong text-center">© “Artstore” LLC, 2000, All rights reserved</div>
	    </div>
	</div>
</section>


<!-- ------------------------footer max-width-768px--------------- -->
<section class="footer-mobile pt-4 pb-4">
	<div class="container-fluid">
	   <div class="row ml-0 mr-0">
		<div class="d-flex justify-content-between">
            <div class="footer-logo">
            	    <div class="footer-img-logo pb-2">
						<img src="{{ asset('assets\images\logo.png') }}">
					</div>
					<hr width="80%" color="#959595" class="ft-hr">
					<div class="pt-2 br-1 text-center footer-info">
						<p class="mb-0">+37455555555</p>
						<p>info@artstore.am</p>
					</div>
            </div>
            <div class="text-center pt-3 pl-3 pr-3 footer-social-icons">
            	<div class="text-strong tuch pb-3 mt-0">{{ app()->getLocale()=='en' ? 'Get In Tuch' : ( app()->getLocale()=='ru' ? 'tuch' : ( app()->getLocale()=='am' ? 'tuch' : 'Get In Tuch')) }}</div>
					<div class="soc-icons d-flex text-center justify-content-center">
						<div class="linkdin ml-2 mr-2 "><a href=""><img src="{{ asset('assets\icons\linkedin.png') }}"></a></div>
						<div class="instagram ml-2 mr-2 "><a href=""><img src="{{ asset('assets\icons\instagram.png') }}"></a></div>
						<div class="facebook ml-2 mr-2 "><a href=""><img src="{{ asset('assets\icons\footer-facebook.png') }}"></a></div>
					</div>
            </div>
        </div>
        <div class="text-center footer-m-form">
        	    <div class="text-strong newsletter mb-2">{{ app()->getLocale()=='en' ? 'Sign Up For Our Newsletter' : ( app()->getLocale()=='ru' ? 'Подпишитесь на нашу рассылку' : ( app()->getLocale()=='am' ? ' Գրանցվեք մեր նորությունների համար' : 'Sign Up For Our Newsletter')) }}</div>


					<input type="text" name="" class="email-inp pl-2" placeholder="{{ app()->getLocale()=='en' ? 'Enter your E-Mail' : ( app()->getLocale()=='ru' ? 'Введите адрес эл․ почты' : ( app()->getLocale()=='am' ? ' Մուտքագրեք ձեր էլ․փոստը' : 'Enter your E-Mail')) }}">
                    <input type="hidden" value="{{ route('subscribe.email',app()->getLocale()) }}" class='subscribe'>
					<button class="news-submit text-strong ml-2" >{{ app()->getLocale()=='en' ? 'Sign Up' : ( app()->getLocale()=='ru' ? 'Зарегистрироваться' : ( app()->getLocale()=='am' ? 'Գրանցվել' : 'Sign Up')) }}</button>


                <div class="email-message mt-2"></div>
        </div>
        <div class="w-100 d-flex justify-content-between pl-0 pr-0 mt-5">
        	      <div class="pr-3 footer-m-ul-li">
						<div class="text-strong ft-br-1">{{ app()->getLocale()=='en' ? 'Information' : ( app()->getLocale()=='ru' ? 'Информация' : ( app()->getLocale()=='am' ? 'Տեղեկատվություն' : 'Information')) }}</div>
						<div>
							<ul>
								<li><a href=""> {{ app()->getLocale()=='en' ? 'About Us' : ( app()->getLocale()=='ru' ? 'О нас' : ( app()->getLocale()=='am' ? 'Մեր մասին' : 'About Us')) }}</a></li>
								<li><a href=""> {{ app()->getLocale()=='en' ? 'Contact Us' : ( app()->getLocale()=='ru' ? 'Контакт' : ( app()->getLocale()=='am' ? 'Կապ մեզ հետ' : 'Contact Us')) }}</a></li>
								<li><a href=""> {{ app()->getLocale()=='en' ? 'Rules & Policies' : ( app()->getLocale()=='ru' ? 'Правила и политика' : ( app()->getLocale()=='am' ? 'Կանոններ և քաղաքականություն' : 'Rules & Policies')) }}</a></li>
								<li><a href=""> {{ app()->getLocale()=='en' ? 'Blog' : ( app()->getLocale()=='ru' ? 'Блог' : ( app()->getLocale()=='am' ? 'Բլոգ' : 'Blog')) }}</a></li>
								<li><a href=""> {{ app()->getLocale()=='en' ? 'Help' : ( app()->getLocale()=='ru' ? 'Помощь' : ( app()->getLocale()=='am' ? 'Օգնություն' : 'Help')) }}</a></li>
								<li><a href=""> {{ app()->getLocale()=='en' ? 'Career' : ( app()->getLocale()=='ru' ? 'Карьера' : ( app()->getLocale()=='am' ? 'Կարիերա' : 'Career')) }}</a></li>
								<li><a href=""> {{ app()->getLocale()=='en' ? 'FAQ' : ( app()->getLocale()=='ru' ? 'ЧЗВ' : ( app()->getLocale()=='am' ? 'ՀՏՀ' : 'FAQ')) }}</a></li>
							</ul>
						</div>
					</div>
					<div class="pr-3 footer-m-ul-li">
						<div class="text-strong ft-br-1">{{ app()->getLocale()=='en' ? 'Shop' : ( app()->getLocale()=='ru' ? 'Магазин' : ( app()->getLocale()=='am' ? 'Խանութ' : 'Shop')) }}</div>
						<div>
							<ul>
								<li><a href="">Jewelry</a></li>
								<li><a href="">Accessories</a></li>
								<li><a href="">Clothing</a></li>
								<li><a href="">Home & Living</a></li>
								<li><a href="">Childrens</a></li>
								<li><a href="">Entertainment</a></li>
								<li><a href="">Artwork</a></li>
								<li><a href="">Crafts</a></li>
								<li><a href="">Bath & Body</a></li>
								<li><a href="">Wedding/Party</a></li>
							</ul>
						</div>
					</div>
					<div class="pr-3 footer-m-ul-li">
						<div class="text-strong ft-br-1">{{ app()->getLocale()=='en' ? 'Customer Care' : ( app()->getLocale()=='ru' ? 'Обслуживание клиентов' : ( app()->getLocale()=='am' ? 'Սպասարկման կենտրոն' : 'Customer Care')) }}</div>
						<div>
							<ul>
								<li><a href="">{{ app()->getLocale()=='en' ? 'My account' : ( app()->getLocale()=='ru' ? 'Мой аккаунт' : ( app()->getLocale()=='am' ? 'Անձնական էջ' : 'My account')) }}</a></li>
								<li><a href="">{{ app()->getLocale()=='en' ? 'Wish List' : ( app()->getLocale()=='ru' ? 'Список желаний' : ( app()->getLocale()=='am' ? ' ցուցակ' : 'Wish List')) }}</a></li>
							</ul>
						</div>
					</div>
            </div>
            <div class="w-100 mt-2">
				<div class="accept text-strong text-center ">{{ app()->getLocale()=='en' ? 'We Accept' : ( app()->getLocale()=='ru' ? 'Мы принимаем' : ( app()->getLocale()=='am' ? 'Մենք ընդունում ենք' : 'We Accept')) }}</div>
				<div class=" w-100 d-flex justify-content-between pr-0 mt-3">
					<div class="col-3 pl-0"><img src="{{ asset('assets\images\cards\visa.png') }}" alt="visa" title="visa"></div>
					<div class="col-3"><img src="{{ asset('assets\images\cards\MasterCard.png') }}" alt="MasterCard" title="MasterCard"></div>
					<div class="col-3"><img src="{{ asset('assets\images\cards\paypal.png') }}" alt="paypal" title="paypal"></div>
					<div class="col-3"><img src="{{ asset('assets\images\cards\amex.png') }}" alt="amex" title="amex"></div>
				</div>
				<div class="w-100 d-flex justify-content-between pr-0 mt-2">
					<div class="col-3 pl-0"><img src="{{ asset('assets\images\cards\arca.png') }}" alt="arca" title="arca"></div>
					<div class="col-3 "><img src="{{ asset('assets\images\cards\qiwi.png') }}" alt="qiwi" title="qiwi"></div>
					<div class="col-3 "><img src="{{ asset('assets\images\cards\webmoney.png') }}" alt="webmoney" title="webmoney"></div>
					<div class="col-3 "><img src="{{ asset('assets\images\cards\idram.png') }}" alt="idram" title="idram"></div>
				</div>
            </div>
            <div class="w-100 text-center footer-m-design-art-store mt-3">
            	<div class="">Designed & developed by CyberTech LLC</div>
            	<div class="">© “<strong>Artstore</strong>” LLC, 2000, All rights reserved</div>
            </div>
        </div>
    </div>
</section>
