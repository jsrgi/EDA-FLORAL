<?php include "header.php" ?>
<link href="assets/css/layout-shop.css" rel="stylesheet" type="text/css" />
<section class="page-header page-header-xs">
    <div class="container">

        <h1>CHECKOUT</h1>

        <!-- breadcrumbs -->
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li class="active">Checkout</li>
        </ol><!-- /breadcrumbs -->

    </div>
</section>
<!-- CART -->
<section>
    <div class="container">

        <!-- CHECKOUT -->
        <form class="row clearfix" method="post" action="shop-checkout-final.php">

            <div class="col-lg-7 col-sm-7">
                <div class="heading-title">
                    <h4>Billing &amp; Shipping</h4>
                </div>


                <!-- BILLING -->
                <fieldset class="margin-top-60">

                    <div class="row">
                        <div class="col-lg-12">
                           
                            <input id="thread_id" name="thread_id" type="hidden" class="form-control required" placeholder="Thread Id" />                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_firstname">First Name *</label>
                            <input id="billing_firstname" name="billing[firstname]" type="text" class="form-control required" />
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_lastname">Last Name *</label>
                            <input id="billing_lastname" name="billing[lastname]" type="text" class="form-control required" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_email">Email *</label>
                            <input id="billing_email" name="billing[email]" type="text" class="form-control required" />
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_company">Company</label>
                            <input id="billing_company" name="billing[company]" type="text" class="form-control" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <label for="billing_address1">Address *</label>
                            <input id="billing_address1" name="billing[address][]" type="text" class="form-control required" placeholder="Address 1" />

                            <input id="billing_address2" name="billing[address][]" type="text" class="form-control margin-top-10" placeholder="Address 2" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_city">City *</label>
                            <input id="billing_city" name="billing[city]" type="text" class="form-control required" />
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_state">State/Province *</label>
                            <select id="billing_state" name="billing[state]" class="form-control pointer required">
                                <option value="">Select...</option>
                                <option value="1">Alabama</option>
                                <option value="2">Alaska</option>
                                <option value="">..............</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_zipcode">Zip/Postal Code *</label>
                            <input id="billing_zipcode" name="billing[zipcode]" type="text" class="form-control required" />
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_country">Country *</label>
                            <select id="billing_country" name="billing[country]" class="form-control pointer required">
                                <option value="">Select...</option>
                                <option value="1">united States</option>
                                <option value="2">united Kingdom</option>
                                <option value="">..............</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_phone">Phone *</label>
                            <input id="billing_phone" name="billing[phone]" type="text" class="form-control required" />
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_fax">Fax</label>
                            <input id="billing_fax" name="billing[fax]" type="text" class="form-control" />
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary btn-lg btn-block size-15" id="copy_link"><i class="fa fa-mail-forward"></i> Copy Link</button>

                    <hr />

                    <div class="row">

                        <div class="col-lg-12 nomargin clearfix">
                            <label class="checkbox pull-left"><!-- see assets/js/view/demo.shop.js - CHECKOUT section -->
                                <input id="shipswitch" name="shipping[same_as_billing]" type="checkbox" value="1" checked="checked" />
                                <i></i> <span class="weight-300">Ship to the same address</span>
                            </label>
                        </div>

                    </div>

                </fieldset>
                <!-- /BILLING -->


                <!-- SHIPPING -->
                <fieldset id="shipping" class="margin-top-80 softhide">
                    <h4>Shipping Address</h4>
                    <hr />

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <label for="shipping:firstname">First Name *</label>
                            <input id="shipping:firstname" name="shipping[firstname]" type="text" class="form-control required" />
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="shipping:lastname">Last Name *</label>
                            <input id="shipping:lastname" name="shipping[lastname]" type="text" class="form-control required" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <label for="shipping:email">Email *</label>
                            <input id="shipping:email" name="shipping[email]" type="text" class="form-control required" />
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="shipping:company">Company</label>
                            <input id="shipping:company" name="shipping[company]" type="text" class="form-control" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <label for="shipping:address1">Address *</label>
                            <input id="shipping:address1" name="shipping[address][]" type="text" class="form-control required" placeholder="Address 1" />

                            <input id="shipping:address2" name="shipping[address][]" type="text" class="form-control margin-top-10" placeholder="Address 2" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <label for="shipping:city">City *</label>
                            <input id="shipping:city" name="shipping[city]" type="text" class="form-control required" />
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="shipping:state">State/Province *</label>
                            <select id="shipping:state" name="shipping[state]" class="form-control pointer required">
                                <option value="">Select...</option>
                                <option value="1">Alabama</option>
                                <option value="2">Alaska</option>
                                <option value="">..............</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <label for="shipping:zipcode">Zip/Postal Code *</label>
                            <input id="shipping:zipcode" name="shipping[zipcode]" type="text" class="form-control required" />
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="shipping:country">Country *</label>
                            <select id="shipping:country" name="shipping[country]" class="form-control pointer required">
                                <option value="">Select...</option>
                                <option value="1">united States</option>
                                <option value="2">united Kingdom</option>
                                <option value="">..............</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <label for="shipping:phone">Phone *</label>
                            <input id="shipping:phone" name="shipping[phone]" type="text" class="form-control required" />
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="shipping:fax">Fax</label>
                            <input id="shipping:fax" name="shipping[fax]" type="text" class="form-control" />
                        </div>
                    </div>

                </fieldset>
                <!-- /SHIPPING -->

            </div>



            <div class="col-lg-5 col-sm-5">
                <div class="heading-title">
                    <h4>Payment Method</h4>
                </div>

                <!-- PAYMENT METHOD -->
                <fieldset class="margin-top-60">
                    <div class="toggle-transparent toggle-bordered-full clearfix">
                        <div class="toggle active">
                            <div class="toggle-content">

                                <div class="row nomargin-bottom">
                                    <div class="col-lg-12 nomargin clearfix">
                                        <label class="radio pull-left nomargin-top">
                                            <input id="payment_check" name="payment[method]" type="radio" value="1" checked="checked" />
                                            <i></i> <span class="weight-300">Check / Money order</span>
                                        </label>
                                    </div>
                                    <div class="col-lg-12 nomargin clearfix">
                                        <label class="radio pull-left">
                                            <input id="payment_card" name="payment[method]" type="radio" value="2" />
                                            <i></i> <span class="weight-300">Credit Card</span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </fieldset>
                <!-- /PAYMENT METHOD -->


                <!-- CREDIT CARD PAYMENT -->
                <fieldset id="ccPayment" class="margin-top-30 softhide">

                    <div class="toggle-transparent toggle-bordered-full clearfix">
                        <div class="toggle active">
                            <div class="toggle-content">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="payment:name">Name on Card *</label>
                                        <input id="payment:name" name="payment[name]" type="text" class="form-control required" autocomplete="off" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="payment:name">Credit Card Type *</label>
                                        <select id="payment:state" name="payment[state]" class="form-control pointer required">
                                            <option value="">Select...</option>
                                            <option value="AE">American Express</option>
                                            <option value="VI">Visa</option>
                                            <option value="MC">Mastercard</option>
                                            <option value="DI">Discover</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="payment:cc_number">Credit Card Number *</label>
                                        <input id="payment:cc_number" name="payment[cc_number]" type="text" class="form-control required" autocomplete="off" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="payment:cc_exp_month">Card Expiration *</label>

                                        <div class="row nomargin-bottom">
                                            <div class="col-lg-6 col-sm-6">
                                                <select id="payment:cc_exp_month" name="payment[cc_exp_month]" class="form-control pointer required">
                                                    <option value="0">Month</option>
                                                    <option value="01">01 - January</option>
                                                    <option value="02">02 - February</option>
                                                    <option value="03">03 - March</option>
                                                    <option value="04">04 - April</option>
                                                    <option value="05">05 - May</option>
                                                    <option value="06">06 - June</option>
                                                    <option value="07">07 - July</option>
                                                    <option value="08">08 - August</option>
                                                    <option value="09">09 - September</option>
                                                    <option value="10">10 - October</option>
                                                    <option value="11">11 - November</option>
                                                    <option value="12">12 - December</option>
                                                </select>
                                            </div>

                                            <div class="col-lg-6 col-sm-6">
                                                <select id="payment:cc_exp_year" name="payment[cc_exp_year]" class="form-control pointer required">
                                                    <option value="0">Year</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                </select>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="payment:cc_cvv">CVV2 *</label>
                                        <input id="payment:cc_cvv" name="payment[cc_cvv]" type="text" class="form-control required" autocomplete="off" maxlength="4" />
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </fieldset>
                <!-- /CREDIT CARD PAYMENT -->


                <!-- TOTAL / PLACE ORDER -->
                <div class="toggle-transparent toggle-bordered-full clearfix">
                    <div class="toggle active">
                        <div class="toggle-content">

										<span class="clearfix">
											<span class="pull-right">$120.75</span>
											<strong class="pull-left">Subtotal:</strong>
										</span>
                            <span class="clearfix">
											<span class="pull-right">$0.00</span>
											<span class="pull-left">Discount:</span>
										</span>
                            <span class="clearfix">
											<span class="pull-right">$8.00</span>
											<span class="pull-left">Shipping:</span>
										</span>

                            <hr />

                            <span class="clearfix">
											<span class="pull-right size-20">$128.75</span>
											<strong class="pull-left">TOTAL:</strong>
										</span>

                            <hr />

                            <button class="btn btn-primary btn-lg btn-block size-15"><i class="fa fa-mail-forward"></i> Place Order Now</button>
                        </div>
                    </div>
                </div>
                <!-- /TOTAL / PLACE ORDER -->

                <!-- CREATE ACCOUNT -->
                <div class="toggle-transparent toggle-bordered-full margin-top-30 clearfix">
                    <div class="toggle active">
                        <div class="toggle-content">

                            <div class="clearfix">
                                <label class="checkbox pull-left">
                                    <input id="accountswitch" name="create-account[yes]" type="checkbox" value="1" />
                                    <i></i> <span class="weight-300">Create an account for later use</span>
                                </label>
                            </div>

                            <!-- CREATE ACCOUNT FORM -->
                            <div id="newaccount" class="margin-top-10 margin-bottom-30 softhide">

                                <div class="row nomargin-bottom">
                                    <div class="col-md-6 col-sm-6">
                                        <label for="account:password">Password *</label>
                                        <input id="account:password" name="account[password]" type="password" class="form-control" />
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label for="account:password2">Confirm Password *</label>
                                        <input id="account:password2" name="account[password2]" type="password" class="form-control" />
                                    </div>
                                </div>
                                <small class="text-warning">NOTE: Email address will be used to login</small>

                            </div>
                            <!-- /CREATE ACCOUNT FORM -->


                        </div>
                    </div>
                </div>
                <!-- /CREATE ACCOUNT -->

        </form>
        <!-- /CHECKOUT -->

    </div>
</section>
<!-- /CART -->
<?php include "footer.php" ?>
<script type="text/javascript" src="assets/js/view/demo.shop.js"></script>