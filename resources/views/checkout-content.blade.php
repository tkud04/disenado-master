		<!-- coupon-area start -->
		<div class="coupon-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="coupon-accordion">
							<!-- ACCORDION START -->
							<h3>Have a coupon? <span id="showcoupon" role="button" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">Click here to enter your code</span></h3>
							<div class="collapse" id="collapseExample2">
								<div class="well">
									<div id="checkout_coupon" class="coupon-checkout-content">
										<div class="coupon-info">
											<form action="#">
												<p class="checkout-coupon">
													<input type="text" placeholder="Coupon code" />
													<input type="submit" value="Apply Coupon" />
												</p>
											</form>
										</div>
									</div>
								</div>
							</div>
							<!-- ACCORDION END -->						
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- coupon-area end -->
		<!-- checkout-area start -->
		<div class="checkout-area">
			<div class="container">
				<div class="row">
					<form action="{{url('checkout')}}" method="post">
					    {{ csrf_field() }}
						<div class="col-lg-6 col-md-6">
							<div class="checkbox-form">						
								<h3>Billing Details</h3>
								<div class="row">
									<div class="col-md-12">
										<div class="country-select">
											<label>Country <span class="required">*</span></label>
											<select name="country">
			<option value="">Please select</option>
			
					<option value="AF">Afghanistan</option>
					
					<option value="AL">Albania</option>
					
					<option value="DZ">Algeria</option>
					
					<option value="AS">American Samoa</option>
					
					<option value="AD">Andorra</option>
					
					<option value="AO">Angola</option>
					
					<option value="AI">Anguilla</option>
					
					<option value="AG">Antigua & Barbuda</option>
					
					<option value="AR">Argentina</option>
					
					<option value="AM">Armenia</option>
					
					<option value="AW">Aruba</option>
					
					<option value="au">Australia</option>
					
					<option value="AT">Austria</option>
					
					<option value="AZ">Azerbaijan</option>
					
					<option value="BS">Bahamas</option>
					
					<option value="BH">Bahrain</option>
					
					<option value="BB">Barbados</option>
					
					<option value="BY">Belarus</option>
					
					<option value="BE">Belgium</option>
					
					<option value="BZ">Belize</option>
					
					<option value="BJ">Benin</option>
					
					<option value="BM">Bermuda</option>
					
					<option value="BT">Bhutan</option>
					
					<option value="BO">Bolivia</option>
					
					<option value="BA">Bosnia & Herzegovina</option>
					
					<option value="BW">Botswana</option>
					
					<option value="BR">Brazil</option>
					
					<option value="IO">British Indian Ocean Territory</option>
					
					<option value="VG">British Virgin Islands</option>
					
					<option value="BN">Brunei Darussalam</option>
					
					<option value="BG">Bulgaria</option>
					
					<option value="BF">Burkina Faso</option>
					
					<option value="BI">Burundi</option>
					
					<option value="KH">Cambodia</option>
					
					<option value="CM">Cameroon</option>
					
					<option value="CA">Canada</option>
					
					<option value="CV">Cape Verde</option>
					
					<option value="KY">Cayman Islands</option>
					
					<option value="CF">Central African Republic</option>
					
					<option value="TD">Chad</option>
					
					<option value="CL">Chile</option>
					
					<option value="CN">China</option>
					
					<option value="CC">Cocos (Keeling) Islands</option>
					
					<option value="CO">Colombia</option>
					
					<option value="KM">Comoros</option>
					
					<option value="CG">Congo</option>
					
					<option value="CD">Congo, Dem. Rep.</option>
					
					<option value="CK">Cook Islands</option>
					
					<option value="CR">Costa Rica</option>
					
					<option value="CI">Cote D?ivoire (ivory Coast)</option>
					
					<option value="HR">Croatia</option>
					
					<option value="CU">Cuba</option>
					
					<option value="CY">Cyprus</option>
					
					<option value="CZ">Czech Republic</option>
					
					<option value="DK">Denmark</option>
					
					<option value="DJ">Djibouti</option>
					
					<option value="DM">Dominica</option>
					
					<option value="DO">Dominican Republic</option>
					
					<option value="TL">East Timor</option>
					
					<option value="EC">Ecuador</option>
					
					<option value="EG">Egypt</option>
					
					<option value="SV">El Salvador</option>
					
					<option value="GQ">Equatorial Guinea</option>
					
					<option value="ER">Eritrea</option>
					
					<option value="EE">Estonia</option>
					
					<option value="ET">Ethiopia</option>
					
					<option value="FK">Falkland Islands</option>
					
					<option value="FO">Faroe Islands</option>
					
					<option value="FJ">Fiji</option>
					
					<option value="FI">Finland</option>
					
					<option value="FR">France</option>
					
					<option value="GF">French Guiana</option>
					
					<option value="PF">French Polynesia</option>
					
					<option value="GA">Gabon</option>
					
					<option value="GM">Gambia</option>
					
					<option value="GZ">Gaza Strip</option>
					
					<option value="GE">Georgia</option>
					
					<option value="DE">Germany</option>
					
					<option value="GH">Ghana</option>
					
					<option value="GI">Gibraltar</option>
					
					<option value="GR">Greece</option>
					
					<option value="GL">Greenland</option>
					
					<option value="GD">Grenada</option>
					
					<option value="GP">Guadeloupe</option>
					
					<option value="GU">Guam</option>
					
					<option value="GT">Guatemala</option>
					
					<option value="GN">Guinea</option>
					
					<option value="GW">Guinea-bissau</option>
					
					<option value="GY">Guyana</option>
					
					<option value="HT">Haiti</option>
					
					<option value="HN">Honduras</option>
					
					<option value="HK">Hong Kong</option>
					
					<option value="HU">Hungary</option>
					
					<option value="IS">Iceland</option>
					
					<option value="IN">India</option>
					
					<option value="ID">Indonesia</option>
					
					<option value="IR">Iran</option>
					
					<option value="IQ">Iraq</option>
					
					<option value="IE">Ireland</option>
					
					<option value="IL">Israel</option>
					
					<option value="IT">Italy</option>
					
					<option value="JM">Jamaica</option>
					
					<option value="JP">Japan</option>
					
					<option value="JO">Jordan</option>
					
					<option value="KZ">Kazakhstan</option>
					
					<option value="KE">Kenya</option>
					
					<option value="KI">Kiribati</option>
					
					<option value="ko">Kosovo</option>
					
					<option value="KW">Kuwait</option>
					
					<option value="KG">Kyrgyzstan</option>
					
					<option value="LA">Laos</option>
					
					<option value="LV">Latvia</option>
					
					<option value="LB">Lebanon</option>
					
					<option value="LS">Lesotho</option>
					
					<option value="LR">Liberia</option>
					
					<option value="LY">Libya</option>
					
					<option value="LI">Liechtenstein</option>
					
					<option value="LT">Lithuania</option>
					
					<option value="LU">Luxembourg</option>
					
					<option value="MO">Macau</option>
					
					<option value="MK">Macedonia, Yugoslavia</option>
					
					<option value="MG">Madagascar</option>
					
					<option value="MW">Malawi</option>
					
					<option value="MY">Malaysia</option>
					
					<option value="MV">Maldives</option>
					
					<option value="ML">Mali</option>
					
					<option value="MT">Malta</option>
					
					<option value="MH">Marshall Islands</option>
					
					<option value="MQ">Martinique</option>
					
					<option value="MR">Mauritania</option>
					
					<option value="MU">Mauritius</option>
					
					<option value="YT">Mayotte</option>
					
					<option value="MX">Mexico</option>
					
					<option value="FM">Micronesia</option>
					
					<option value="MD">Moldova</option>
					
					<option value="MC">Monaco</option>
					
					<option value="MN">Mongolia</option>
					
					<option value="ME">Montenegro</option>
					
					<option value="MS">Montserrat</option>
					
					<option value="MA">Morocco</option>
					
					<option value="MZ">Mozambique</option>
					
					<option value="MM">Myanmar (Burma)</option>
					
					<option value="NA">Namibia</option>
					
					<option value="NT">Native - Country not in list</option>
					
					<option value="NR">Nauru</option>
					
					<option value="NP">Nepal</option>
					
					<option value="NL">Netherlands</option>
					
					<option value="AN">Netherlands Antilles</option>
					
					<option value="NC">New Caledonia</option>
					
					<option value="NZ">New Zealand</option>
					
					<option value="NI">Nicaragua</option>
					
					<option value="NE">Niger</option>
					
					<option value="NG">Nigeria</option>
					
					<option value="NU">Niue</option>
					
					<option value="NF">Norfolk Island</option>
					
					<option value="KP">North Korea</option>
					
					<option value="NN">Northern Ireland</option>
					
					<option value="NO">Norway</option>
					
					<option value="OM">Oman</option>
					
					<option value="PK">Pakistan</option>
					
					<option value="PW">Palau</option>
					
					<option value="PS">Palestinian Territory</option>
					
					<option value="PA">Panama</option>
					
					<option value="PG">Papua New Guinea</option>
					
					<option value="PY">Paraguay</option>
					
					<option value="PE">Peru</option>
					
					<option value="PH">Philippines</option>
					
					<option value="PN">Pitcairn</option>
					
					<option value="PL">Poland</option>
					
					<option value="PT">Portugal</option>
					
					<option value="PR">Puerto Rico</option>
					
					<option value="QA">Qatar</option>
					
					<option value="RE">Reunion</option>
					
					<option value="RO">Romania</option>
					
					<option value="RU">Russia</option>
					
					<option value="RW">Rwanda</option>
					
					<option value="GS">S. Georgia & South Sandwic</option>
					
					<option value="KN">Saint Kitts And Nevis</option>
					
					<option value="LC">Saint Lucia</option>
					
					<option value="PM">Saint Pierre and Miquelon</option>
					
					<option value="VC">Saint Vincent & Grenadines</option>
					
					<option value="WS">Samoa</option>
					
					<option value="SM">San Marino</option>
					
					<option value="ST">Sao Tome And Principe</option>
					
					<option value="SA">Saudi Arabia</option>
					
					<option value="SN">Senegal</option>
					
					<option value="RS">Serbia</option>
					
					<option value="SC">Seychelles</option>
					
					<option value="SL">Sierra Leone</option>
					
					<option value="SG">Singapore</option>
					
					<option value="SK">Slovakia</option>
					
					<option value="SI">Slovenia</option>
					
					<option value="SB">Solomon Islands</option>
					
					<option value="SO">Somalia</option>
					
					<option value="ZA">South Africa</option>
					
					<option value="KR">South Korea</option>
					
					<option value="ES">Spain</option>
					
					<option value="LK">Sri Lanka</option>
					
					<option value="SH">St. Helena</option>
					
					<option value="SD">Sudan</option>
					
					<option value="SR">Suriname</option>
					
					<option value="SJ">Svalbard and Jan Mayen</option>
					
					<option value="SZ">Swaziland</option>
					
					<option value="SE">Sweden</option>
					
					<option value="CH">Switzerland</option>
					
					<option value="SY">Syria</option>
					
					<option value="TW">Taiwan</option>
					
					<option value="TJ">Tajikistan</option>
					
					<option value="TZ">Tanzania</option>
					
					<option value="TH">Thailand</option>
					
					<option value="TG">Togo</option>
					
					<option value="TK">Tokelau</option>
					
					<option value="TO">Tonga</option>
					
					<option value="TT">Trinidad And Tobago</option>
					
					<option value="TN">Tunisia</option>
					
					<option value="TR">Turkey</option>
					
					<option value="TM">Turkmenistan</option>
					
					<option value="TC">Turks and Caicos Islands</option>
					
					<option value="TV">Tuvalu</option>
					
					<option value="UG">Uganda</option>
					
					<option value="UA">Ukraine</option>
					
					<option value="AE">United Arab Emirates</option>
					
					<option value="GB">United Kingdom</option>
					
					<option value="US">United States</option>
					
					<option value="UY">Uruguay</option>
					
					<option value="UM">US Outlying Islands</option>
					
					<option value="UZ">Uzbekistan</option>
					
					<option value="VU">Vanuatu</option>
					
					<option value="VA">Vatican City</option>
					
					<option value="VE">Venezuela</option>
					
					<option value="VN">Vietnam</option>
					
					<option value="VI">Virgin Islands, U.S.</option>
					
					<option value="WF">Wallis and Futuna</option>
					
					<option value="EH">Western Sahara</option>
					
					<option value="YE">Yemen</option>
					
					<option value="ZM">Zambia</option>
					
					<option value="ZW">Zimbabwe</option>
											</select> 										
										</div>
									</div>
									<div class="col-md-6">
										<div class="checkout-form-list">
											<label>First Name <span class="required">*</span></label>										
											<input type="text" placeholder="" name="fname" value="{{old('fname')}}" />
										</div>
									</div>
									<div class="col-md-6">
										<div class="checkout-form-list">
											<label>Last Name <span class="required">*</span></label>										
											<input type="text" placeholder="" name="lname" value="{{old('lname')}}"/>
										</div>
									</div>
									<div class="col-md-12">
										<div class="checkout-form-list">
											<label>Company Name</label>
											<input type="text" placeholder="" name="company" value="{{old('company')}}"/>
										</div>
									</div>
									<div class="col-md-12">
										<div class="checkout-form-list">
											<label>Address <span class="required">*</span></label>
											<input type="text" placeholder="Full address" name="address" value="{{old('address')}}"/>
										</div>
									</div>
									<div class="col-md-12">
										<div class="checkout-form-list">
											<label>Town / City <span class="required">*</span></label>
											<input type="text" placeholder="Town / City" name="city" value="{{old('city')}}"/>
										</div>
									</div>
									<div class="col-md-6">
										<div class="checkout-form-list">
											<label>State / County <span class="required">*</span></label>										
											<input type="text" placeholder="" name="state" value="{{old('state')}}"/>
										</div>
									</div>
									<div class="col-md-6">
										<div class="checkout-form-list">
											<label>Postcode / Zip <span class="required">*</span></label>										
											<input type="text" placeholder="Postcode / Zip" name="zipcode" value="{{old('zipcode')}}"/>
										</div>
									</div>
									<div class="col-md-6">
										<div class="checkout-form-list">
											<label>Email Address <span class="required">*</span></label>										
											<input type="email" placeholder="" name="email" value="{{old('email')}}"/>
										</div>
									</div>
									<div class="col-md-6">
										<div class="checkout-form-list">
											<label>Phone  <span class="required">*</span></label>										
											<input type="text" placeholder="Phone number" name="phone" value="{{old('phone')}}"/>
										</div>
									</div>	
									<div class="order-notes">
										<div class="checkout-form-list">
											<label>Order Notes</label>
											<textarea id="checkout-mess" name = "notes" value = "{{old('notes')}}" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery." ></textarea>
										</div>									
									</div>                                   									
								</div>
							
							</div>
						</div>													
						<div class="col-lg-6 col-md-6">
							<div class="your-order">
								<h3>Your order</h3>
								<div class="your-order-table table-responsive">
								  <?php $ct = 0; ?>
									<table>
										<thead>
											<tr>
												<th class="product-name">Product</th>
												<th class="product-total">Total</th>
											</tr>							
										</thead>
										<tbody>
										    @foreach($cart as $c)
										<?php
									   $p = $c['product'];
								        $images = $p['images'];
										$rm_url = url('remove-from-cart')."/".$c['id'];
										$price = ($p['price']  * $c['qty']);
										$ct += $price;
							           ?>
											<tr class="cart_item">
												<td class="product-name">
												{{$p['name']}} <strong class="product-quantity"> x {{$c['qty']}}</strong>
												</td>
												<td class="product-total">
													<span class="amount">{{$price}}</span>
												</td>
											</tr>
											@endforeach
										</tbody>
										<tfoot>
											<tr class="cart-subtotal">
												<th>Cart Subtotal</th>
												<td><span class="amount">&#8358;{{$ct}}</span></td>
											</tr>
											<tr class="shipping">
												<th>Shipping</th>
												<td>
														<ul id="shipping_method">
															<li>
																<input type="radio" name="with-shipping" id = "with-shipping" checked/> 
																<label>
																	Flat Rate: <span class="amount">&#8358;2500.00</span>
																</label>
															</li>
															<li></li>
														</ul>
												</td>
											</tr>
											<tr class="order-total">
												<th>Order Total</th>
												<td><strong><span class="amount" id="yuu">{{$ct}}</span></strong></strong>
												</td>
											</tr>								
										</tfoot>
									</table>
								</div>
								<div class="payment-method">
									<div class="payment-accordion">
										<!-- ACCORDION START -->
										<h3 >
											<a class="collapsed" role="button" data-toggle="collapse" href="#payment-con" aria-expanded="false" aria-controls="payment-con">Direct Bank Transfer</a>
										</h3>
										<div class="payment-content collapse" id="payment-con">
											<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.</p>
											<div class="order-button-payment">
										      <input type="submit" class="i-pay" data-tope="i-bank" value="Pay to our bank account" />
									        </div>											
										</div>
										<!-- ACCORDION END -->	
										<!-- ACCORDION START -->
										<h3>
											<a class="collapsed" role="button" data-toggle="collapse" href="#payment-con2" aria-expanded="false" aria-controls="payment-con2">Cheque Payment</a>
										</h3>
										<div class="payment-content collapse" id="payment-con2">
											<p>Please send your check to Luxury Affairs, Store Street, Store Town, Store State / County, Store Postcode.</p>
											<div class="order-button-payment">
										      <input type="submit" class="i-pay" data-tope="i-check" value="Send us a check" />
									        </div>											
										</div>
										<!-- ACCORDION END -->	
										<!-- ACCORDION START -->
										<h3>
											<a class="collapsed" role="button" data-toggle="collapse" href="#payment-con3" aria-expanded="false" aria-controls="payment-con3">
											PayPal 
											</a>	
										<img src="img/payment/payment.png" alt="" />

										</h3>
										<div class="payment-content collapse"  id="payment-con3">
											<p>Pay via PayPal; you can pay with your credit card if you don't have a PayPal account.</p>
											<div class="order-button-payment">
										      <input type="submit" class="i-pay" data-tope="i-paypal" value="Pay via Paypal" />
									        </div>
										</div>
										<!-- ACCORDION END -->									
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Main content end -->