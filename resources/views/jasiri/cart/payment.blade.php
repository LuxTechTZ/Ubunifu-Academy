@extends('jasiri.layouts.app')

@section('content')
<main>
	<section id="hero_in" class="cart_section">
		<div class="wrapper">
			<div class="container">
				<div class="bs-wizard clearfix">
					<div class="bs-wizard-step">
						<div class="text-center bs-wizard-stepnum">Your cart</div>
						<div class="progress">
							<div class="progress-bar"></div>
						</div>
						<a href="cart-1.html" class="bs-wizard-dot"></a>
					</div>

					<div class="bs-wizard-step active">
						<div class="text-center bs-wizard-stepnum">Payment</div>
						<div class="progress">
							<div class="progress-bar"></div>
						</div>
						<a href="#0" class="bs-wizard-dot"></a>
					</div>

					<div class="bs-wizard-step disabled">
						<div class="text-center bs-wizard-stepnum">Finish!</div>
						<div class="progress">
							<div class="progress-bar"></div>
						</div>
						<a href="#0" class="bs-wizard-dot"></a>
					</div>
				</div>
				<!-- End bs-wizard -->
			</div>
		</div>
	</section>
	<!--/hero_in-->

	<div class="bg_color_1">
		<div class="container margin_60_35">
			<form id="chekout-data" name="chekout-data" method="post" action="{{url('/')}}/course/purchase/chekout/{{$cart->id}}/order">
				@csrf
			<div class="row">
				<div class="col-lg-8">
					<div class="box_cart">
					@if(!isset(Auth::user()->id))
					<div class="message">
						<p>Exisitng Customer? <a href="{{url('/')}}/login" class="">Click here to login</a></p>
					</div>
					@endif
					<div class="form_title">
						<h3><strong>1</strong>Your Details</h3>
						<p>
							Please fill your personal Details
						</p>
					</div>
					@if(isset(Auth::user()->id))
					<div class="step">
						<div class="row">
							<div class="col-sm-6">
								<span class="input">
									<input value="{{Auth::user()->first_name}}" disabled="" class="input_field" type="text">
									<label class="input_label">
										<span class="input__label-content">First name</span>
									</label>
								</span>
							</div>
							<div class="col-sm-6">
								<span class="input">
									<input value="{{Auth::user()->last_name}}" disabled="" class="input_field" type="text">
									<label class="input_label">
										<span class="input__label-content">Last name</span>
									</label>
								</span>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<span class="input">
									<input value="{{Auth::user()->email}}" disabled="" class="input_field" type="email">
									<label class="input_label">
										<span class="input__label-content">Email</span>
									</label>
								</span>
							</div>
						
							<div class="col-sm-6">
								<span class="input">
									<input value="{{Auth::user()->profile->phone}}" name="phone" class="input_field" type="text">
									<label class="input_label">
										<span class="input__label-content">Phone</span>
									</label>
								</span>
							</div>
						</div>
					</div>
					@else
					<div class="step">
						<div class="row">
							<div class="col-sm-6">
								<span class="input">
									<input name="first_name" required="" class="input_field" type="text" value="{{ old('first_name') }}">
									<label class="input_label">
										<span class="input__label-content">First name</span>
									</label>
									@if ($errors->has('first_name'))
			                            <span style="color: red">
			                                <strong>{{ $errors->first('first_name') }}</strong>
			                            </span>
			                        @endif
			                        @if ($errors->has('role'))
			                            <span style="color: red">
			                                <strong>{{ $errors->first('role') }}</strong>
			                            </span>
			                        @endif
								</span>
							</div>
							<div class="col-sm-6">
								<span class="input">
									<input name="last_name" required="" class="input_field" type="text" value="{{ old('last_name') }}">
									<label class="input_label">
										<span class="input__label-content">Last name</span>
									</label>
									@if ($errors->has('last_name'))
			                            <span style="color: red">
			                                <strong>{{ $errors->first('last_name') }}</strong>
			                            </span>
			                        @endif
								</span>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<span class="input">
									<input value="{{ old('email') }}" name="email" required="" class="input_field" type="email">
									<label class="input_label">
										<span class="input__label-content">Email</span>
									</label>
									@if ($errors->has('email'))
			                            <span style="color: red">
			                                <strong>{{ $errors->first('email') }}</strong>
			                            </span>
			                        @endif
								</span>
							</div>
							<div class="col-sm-6">
								<span class="input">
									<input value="{{ old('phone') }}" name="phone" required="" class="input_field" type="text">
									<label class="input_label">
										<span class="input__label-content">Phone (With country code)</span>
									</label>
									@if ($errors->has('phone'))
			                            <span style="color: red">
			                                <strong>{{ $errors->first('phone') }}</strong>
			                            </span>
			                        @endif
								</span>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<span class="input">
									<input name="password" required="" class="input_field" type="password">
									<label class="input_label">
										<span class="input__label-content">Password</span>
									</label>
									@if ($errors->has('password'))
				                        <span style="color: red">
				                            <strong>{{ $errors->first('password') }}</strong>
				                        </span>
				                    @endif
								</span>
							</div>
							<div class="col-sm-6">
								<span class="input">
									<input name="password_confirmation" required="" class="input_field" type="password">
									<label class="input_label">
										<span class="input__label-content">Confirm Password</span>
									</label>
								</span>
							</div>
						</div>
					</div>
					@endif
					<hr>
					<!--End step -->

					<div class="form_title">
						<h3><strong>2</strong>Payment Information</h3>
						<p>
							Mussum ipsum cacilds, vidis litro abertis.
						</p>
					</div>
					<div class="step">
						<span class="input">
							<input class="input_field" type="text">
							<label class="input_label">
							  <span class="input__label-content">Name on card</span>
							</label>
						</span>
						<div class="row">
							<div class="col-md-6">
								<span class="input">
									<input class="input_field" type="text">
									<label class="input_label">
									  <span class="input__label-content">Card number</span>
									</label>
								</span>
							</div>
							<div class="col-md-6 col-sm-6">
								<img src="{{url('/')}}/img/payments.png" alt="Cards" class="cards">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 add_top_30">
								<label>Expiration date</label>
								<div class="row">
									<div class="col-md-6">
										<span class="input">
											<input class="input_field" type="text">
											<label class="input_label">
											  <span class="input__label-content">MM</span>
											</label>
										</span>
									</div>
									<div class="col-md-6">
										<span class="input">
											<input class="input_field" type="text">
											<label class="input_label">
											  <span class="input__label-content">Year</span>
											</label>
										</span>
									</div>
								</div>
							</div>
							<div class="col-md-6 add_top_30">
								<div class="form-group">
									<label>Security code</label>
									<div class="row">
										<div class="col-md-4">
											<span class="input">
												<input class="input_field" type="text">
												<label class="input_label">
												  <span class="input__label-content">CCV</span>
												</label>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End row -->

						<h5>Or checkout with Paypal</h5>
						<p>
							Lorem ipsum dolor sit amet, vim id accusata sensibus, id ridens quaeque qui. Ne qui vocent ornatus molestie, reque fierent dissentiunt mel ea.
						</p>
						<p>
						<a target="_blank" href="https://www.skrill.com/en/business/integration/">
							<img alt="Pay by Skrill purple button 245x75 PNG" src="https://www.skrill.com/fileadmin/content/images/brand_centre/Pay_by_Skrill/skrill-payby-btn-purple_245x75.png" width="245" height="75" />

	                    </a>
							<img src="{{url('/')}}/img/paypal_bt.png" alt="Image">
						</p>
					</div>
					<hr>
					<!--End step -->

					<div class="form_title">
						<h3><strong>3</strong>Billing Address</h3>
						<p>
							Mussum ipsum cacilds, vidis litro abertis.
						</p>
					</div>
					<div class="step">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<span class="input">
									<label class="input_label">Country <span style="color: red">*</span> </label>
						            <select id="country" name="country" class="input_field">
						                <option value="Tanzania">Tanzania</option>
						                <option value="Afghanistan">Afghanistan</option>
						                <option value="Åland Islands">Åland Islands</option>
						                <option value="Albania">Albania</option>
						                <option value="Algeria">Algeria</option>
						                <option value="American Samoa">American Samoa</option>
						                <option value="Andorra">Andorra</option>
						                <option value="Angola">Angola</option>
						                <option value="Anguilla">Anguilla</option>
						                <option value="Antarctica">Antarctica</option>
						                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
						                <option value="Argentina">Argentina</option>
						                <option value="Armenia">Armenia</option>
						                <option value="Aruba">Aruba</option>
						                <option value="Australia">Australia</option>
						                <option value="Austria">Austria</option>
						                <option value="Azerbaijan">Azerbaijan</option>
						                <option value="Bahamas">Bahamas</option>
						                <option value="Bahrain">Bahrain</option>
						                <option value="Bangladesh">Bangladesh</option>
						                <option value="Barbados">Barbados</option>
						                <option value="Belarus">Belarus</option>
						                <option value="Belgium">Belgium</option>
						                <option value="Belize">Belize</option>
						                <option value="Benin">Benin</option>
						                <option value="Bermuda">Bermuda</option>
						                <option value="Bhutan">Bhutan</option>
						                <option value="Bolivia">Bolivia</option>
						                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
						                <option value="Botswana">Botswana</option>
						                <option value="Bouvet Island">Bouvet Island</option>
						                <option value="Brazil">Brazil</option>
						                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
						                <option value="Brunei Darussalam">Brunei Darussalam</option>
						                <option value="Bulgaria">Bulgaria</option>
						                <option value="Burkina Faso">Burkina Faso</option>
						                <option value="Burundi">Burundi</option>
						                <option value="Cambodia">Cambodia</option>
						                <option value="Cameroon">Cameroon</option>
						                <option value="Canada">Canada</option>
						                <option value="Cape Verde">Cape Verde</option>
						                <option value="Cayman Islands">Cayman Islands</option>
						                <option value="Central African Republic">Central African Republic</option>
						                <option value="Chad">Chad</option>
						                <option value="Chile">Chile</option>
						                <option value="China">China</option>
						                <option value="Christmas Island">Christmas Island</option>
						                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
						                <option value="Colombia">Colombia</option>
						                <option value="Comoros">Comoros</option>
						                <option value="Congo">Congo</option>
						                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
						                <option value="Cook Islands">Cook Islands</option>
						                <option value="Costa Rica">Costa Rica</option>
						                <option value="Cote D'ivoire">Cote D'ivoire</option>
						                <option value="Croatia">Croatia</option>
						                <option value="Cuba">Cuba</option>
						                <option value="Cyprus">Cyprus</option>
						                <option value="Czech Republic">Czech Republic</option>
						                <option value="Denmark">Denmark</option>
						                <option value="Djibouti">Djibouti</option>
						                <option value="Dominica">Dominica</option>
						                <option value="Dominican Republic">Dominican Republic</option>
						                <option value="Ecuador">Ecuador</option>
						                <option value="Egypt">Egypt</option>
						                <option value="El Salvador">El Salvador</option>
						                <option value="Equatorial Guinea">Equatorial Guinea</option>
						                <option value="Eritrea">Eritrea</option>
						                <option value="Estonia">Estonia</option>
						                <option value="Ethiopia">Ethiopia</option>
						                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
						                <option value="Faroe Islands">Faroe Islands</option>
						                <option value="Fiji">Fiji</option>
						                <option value="Finland">Finland</option>
						                <option value="France">France</option>
						                <option value="French Guiana">French Guiana</option>
						                <option value="French Polynesia">French Polynesia</option>
						                <option value="French Southern Territories">French Southern Territories</option>
						                <option value="Gabon">Gabon</option>
						                <option value="Gambia">Gambia</option>
						                <option value="Georgia">Georgia</option>
						                <option value="Germany">Germany</option>
						                <option value="Ghana">Ghana</option>
						                <option value="Gibraltar">Gibraltar</option>
						                <option value="Greece">Greece</option>
						                <option value="Greenland">Greenland</option>
						                <option value="Grenada">Grenada</option>
						                <option value="Guadeloupe">Guadeloupe</option>
						                <option value="Guam">Guam</option>
						                <option value="Guatemala">Guatemala</option>
						                <option value="Guernsey">Guernsey</option>
						                <option value="Guinea">Guinea</option>
						                <option value="Guinea-bissau">Guinea-bissau</option>
						                <option value="Guyana">Guyana</option>
						                <option value="Haiti">Haiti</option>
						                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
						                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
						                <option value="Honduras">Honduras</option>
						                <option value="Hong Kong">Hong Kong</option>
						                <option value="Hungary">Hungary</option>
						                <option value="Iceland">Iceland</option>
						                <option value="India">India</option>
						                <option value="Indonesia">Indonesia</option>
						                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
						                <option value="Iraq">Iraq</option>
						                <option value="Ireland">Ireland</option>
						                <option value="Isle of Man">Isle of Man</option>
						                <option value="Israel">Israel</option>
						                <option value="Italy">Italy</option>
						                <option value="Jamaica">Jamaica</option>
						                <option value="Japan">Japan</option>
						                <option value="Jersey">Jersey</option>
						                <option value="Jordan">Jordan</option>
						                <option value="Kazakhstan">Kazakhstan</option>
						                <option value="Kenya">Kenya</option>
						                <option value="Kiribati">Kiribati</option>
						                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
						                <option value="Korea, Republic of">Korea, Republic of</option>
						                <option value="Kuwait">Kuwait</option>
						                <option value="Kyrgyzstan">Kyrgyzstan</option>
						                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
						                <option value="Latvia">Latvia</option>
						                <option value="Lebanon">Lebanon</option>
						                <option value="Lesotho">Lesotho</option>
						                <option value="Liberia">Liberia</option>
						                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
						                <option value="Liechtenstein">Liechtenstein</option>
						                <option value="Lithuania">Lithuania</option>
						                <option value="Luxembourg">Luxembourg</option>
						                <option value="Macao">Macao</option>
						                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
						                <option value="Madagascar">Madagascar</option>
						                <option value="Malawi">Malawi</option>
						                <option value="Malaysia">Malaysia</option>
						                <option value="Maldives">Maldives</option>
						                <option value="Mali">Mali</option>
						                <option value="Malta">Malta</option>
						                <option value="Marshall Islands">Marshall Islands</option>
						                <option value="Martinique">Martinique</option>
						                <option value="Mauritania">Mauritania</option>
						                <option value="Mauritius">Mauritius</option>
						                <option value="Mayotte">Mayotte</option>
						                <option value="Mexico">Mexico</option>
						                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
						                <option value="Moldova, Republic of">Moldova, Republic of</option>
						                <option value="Monaco">Monaco</option>
						                <option value="Mongolia">Mongolia</option>
						                <option value="Montenegro">Montenegro</option>
						                <option value="Montserrat">Montserrat</option>
						                <option value="Morocco">Morocco</option>
						                <option value="Mozambique">Mozambique</option>
						                <option value="Myanmar">Myanmar</option>
						                <option value="Namibia">Namibia</option>
						                <option value="Nauru">Nauru</option>
						                <option value="Nepal">Nepal</option>
						                <option value="Netherlands">Netherlands</option>
						                <option value="Netherlands Antilles">Netherlands Antilles</option>
						                <option value="New Caledonia">New Caledonia</option>
						                <option value="New Zealand">New Zealand</option>
						                <option value="Nicaragua">Nicaragua</option>
						                <option value="Niger">Niger</option>
						                <option value="Nigeria">Nigeria</option>
						                <option value="Niue">Niue</option>
						                <option value="Norfolk Island">Norfolk Island</option>
						                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
						                <option value="Norway">Norway</option>
						                <option value="Oman">Oman</option>
						                <option value="Pakistan">Pakistan</option>
						                <option value="Palau">Palau</option>
						                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
						                <option value="Panama">Panama</option>
						                <option value="Papua New Guinea">Papua New Guinea</option>
						                <option value="Paraguay">Paraguay</option>
						                <option value="Peru">Peru</option>
						                <option value="Philippines">Philippines</option>
						                <option value="Pitcairn">Pitcairn</option>
						                <option value="Poland">Poland</option>
						                <option value="Portugal">Portugal</option>
						                <option value="Puerto Rico">Puerto Rico</option>
						                <option value="Qatar">Qatar</option>
						                <option value="Reunion">Reunion</option>
						                <option value="Romania">Romania</option>
						                <option value="Russian Federation">Russian Federation</option>
						                <option value="Rwanda">Rwanda</option>
						                <option value="Saint Helena">Saint Helena</option>
						                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
						                <option value="Saint Lucia">Saint Lucia</option>
						                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
						                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
						                <option value="Samoa">Samoa</option>
						                <option value="San Marino">San Marino</option>
						                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
						                <option value="Saudi Arabia">Saudi Arabia</option>
						                <option value="Senegal">Senegal</option>
						                <option value="Serbia">Serbia</option>
						                <option value="Seychelles">Seychelles</option>
						                <option value="Sierra Leone">Sierra Leone</option>
						                <option value="Singapore">Singapore</option>
						                <option value="Slovakia">Slovakia</option>
						                <option value="Slovenia">Slovenia</option>
						                <option value="Solomon Islands">Solomon Islands</option>
						                <option value="Somalia">Somalia</option>
						                <option value="South Africa">South Africa</option>
						                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
						                <option value="Spain">Spain</option>
						                <option value="Sri Lanka">Sri Lanka</option>
						                <option value="Sudan">Sudan</option>
						                <option value="Suriname">Suriname</option>
						                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
						                <option value="Swaziland">Swaziland</option>
						                <option value="Sweden">Sweden</option>
						                <option value="Switzerland">Switzerland</option>
						                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
						                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
						                <option value="Tajikistan">Tajikistan</option>
						                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
						                <option value="Thailand">Thailand</option>
						                <option value="Timor-leste">Timor-leste</option>
						                <option value="Togo">Togo</option>
						                <option value="Tokelau">Tokelau</option>
						                <option value="Tonga">Tonga</option>
						                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
						                <option value="Tunisia">Tunisia</option>
						                <option value="Turkey">Turkey</option>
						                <option value="Turkmenistan">Turkmenistan</option>
						                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
						                <option value="Tuvalu">Tuvalu</option>
						                <option value="Uganda">Uganda</option>
						                <option value="Ukraine">Ukraine</option>
						                <option value="United Arab Emirates">United Arab Emirates</option>
						                <option value="United Kingdom">United Kingdom</option>
						                <option value="United States">United States</option>
						                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
						                <option value="Uruguay">Uruguay</option>
						                <option value="Uzbekistan">Uzbekistan</option>
						                <option value="Vanuatu">Vanuatu</option>
						                <option value="Venezuela">Venezuela</option>
						                <option value="Viet Nam">Viet Nam</option>
						                <option value="Virgin Islands, British">Virgin Islands, British</option>
						                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
						                <option value="Wallis and Futuna">Wallis and Futuna</option>
						                <option value="Western Sahara">Western Sahara</option>
						                <option value="Yemen">Yemen</option>
						                <option value="Zambia">Zambia</option>
						                <option value="Zimbabwe">Zimbabwe</option>
						            </select>
								</span>
							</div>
						
							<div class="col-md-6 col-sm-6">
								<span class="input">
									<input class="input_field" name="region" type="text">
									<label class="input_label">
										<span class="input__label-content">Region/City <span style="color: red">*</span></span>
									</label>
								</span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5">
								<span class="input">
									<input class="input_field" type="text">
									<label class="input_label">
										<span class="input__label-content">District</span>
									</label>
								</span>
							</div>
							<div class="col-md-4">
								<span class="input">
									<input class="input_field" type="text">
									<label class="input_label">
										<span class="input__label-content">Street Address</span>
									</label>
								</span>
							</div>
							<div class="col-md-3">
								<span class="input">
									<input class="input_field" type="text">
									<label class="input_label">
										<span class="input__label-content">Postal code</span>
									</label>
								</span>
							</div>
						</div>
						<!--End row -->
					</div>
					<hr>
					<!--End step -->
					<div id="policy">
						<h5>Cancellation policy</h5>
						<p class="nomargin">Gharama zimejumlishwa na VAT <strong>Karibu.</strong> Eandapo haujaridhika na kozi hii, una siku <strong>3</strong>  za kughairi. <a href="#0">Wasiliana nasi</a> endapo unapata tatizo lolote.</p>
					</div>
					</div>
				</div>
				<!-- /col -->
				
				<aside class="col-lg-4" id="sidebar">
					<div class="box_detail">
						<div id="total_cart">
							Total <span class="float-right">{{number_format($cart->total_price)}} TSH</span>
						</div>
						<div class="add_bottom_30">Gharama zimejumlishwa na VAT <strong>Karibu.</strong> Eandapo haujaridhika na kozi hii, una siku <strong>3</strong>  za kughairi. <a href="#0">Wasiliana nasi</a> endapo unapata tatizo lolote.</div>
						<button type="submit" form="chekout-data" href="{{url('/')}}/course/purchase/chekout/{{$cart->id}}/order" class="btn_1 full-width">Checkout</button>
						<a href="{{url('/')}}/courses-grid" class="btn_1 full-width outline"><i class="icon-right"></i> Continue Shopping</a>
					</div>
				</aside>
			</div>
			</form>


			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /bg_color_1 -->
</main>


<div class="modal fade" id="logisn" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
           
            <div class="modal-body"> 
                <div style="text-align: center">
                    <h2>Change Active Batch To <br> </h2>
                </div>
            </div>
            <input type="text" name="">

            <div class="modal-footer"> 
                <div class="btn-group ">
                    <a  href="{{url('/')}}/closebatch/" class="btn red btn-md dropdown-toggle">
                        <span class=""> Close Batch </span>
                    </a>                                       
                </div> 

                <div class="btn-group pull-right">
                    <a  href="{{url('/')}}/changebatch/" type="button" class="btn blue btn-md dropdown-toggle">
                        <span class=""> Set Active Batch</span>
                    </a>                                       
                </div>
            </div>
        </div>
    </div>
</div>

@endsection