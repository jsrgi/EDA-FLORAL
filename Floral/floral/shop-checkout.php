<?php

ob_start();
include('header.php');
$con = mysql_connect('localhost','root','');
mysql_select_db('edadb',$con);
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $address = $_POST['address'];
    $address1 = $_POST['address1'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $fax = $_POST['fax'];
    $tid = $_POST['thread_id'];
	
	$query = mysql_query("INSERT INTO `floral`(`tid`, `firstname`, `lastname`, `email`, `add1`, `add2`, `city`, `state`, `zipcode`, `country`, `phone`, `fax`)
	VALUES ('{$tid}', '{$firstname}', '{$lastname}', '{$email}', '{$address}', '{$address1}', '{$city}', '{$state}', '{$zipcode}', 
	'{$country}', '{$phone}', '{$fax}')");
	
	if($query) {

    header('location:shop-checkout.php?tid=' . $tid ); //. '&firstname=' . $firstname . '&lastname=' . $lastname . '&email=' . $email . '&company=' . $company . '&address=' . $address . '&address1=' . $address1 . '&city=' . $city . '&state=' . $state . '&zipcode=' . $zipcode . '&country=' . $country . '&phone=' . $phone . '&fax=' . $fax
	}
	
	else
	{
		die(mysql_error());
	}

}

?>
<link href="assets/css/layout-shop.css" rel="stylesheet" type="text/css"/>
<script src="clipboard.min.js"></script>

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
        <form class="row clearfix" method="post" action="">

            <div class="col-lg-7 col-sm-7">
                <div class="heading-title">
                    <h4>Billing &amp; Shipping</h4>
                </div>

                <!-- BILLING -->
                <fieldset class="margin-top-60">
                    <?php //if (empty($_GET['tid'])) { ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="thread_id">Thread ID *</label>

                                <input id="thread_id" name="thread_id" type="text" class="form-control required" value="<?php echo $_GET['tid']; ?>"
                                       placeholder="Thread Id"/></div>
                        </div>
                    <?php //} 
					//else {
					$tid = $_GET['tid'];
						$q = mysql_query("select * from floral where tid='{$tid}'");
						
						$row = mysql_fetch_array($q);
					//}
					?>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_firstname">First Name *</label>
                            <input type="hidden" id="tid" value="<?php echo $_GET['tid']; ?>">
                            <input id="billing_firstname" name="firstname"
                                   value="<?php if (!empty($_GET['firstname'])) {
                                       echo $_GET['firstname'];
                                   } else if(!empty($row['tid'])) { echo $row['firstname']; }?>" type="text" class="form-control required"/>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_lastname">Last Name *</label>
                            <input id="billing_lastname" name="lastname" value="<?php if (!empty($_GET['lastname'])) { echo $_GET['lastname']; }
                             else  if(!empty($row['tid'])) { echo $row['lastname'];
                            } ?>" type="text" class="form-control required"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_email">Email *</label>
                            <input id="billing_email" name="email" type="text"
                                   value="<?php if (!empty($_GET['email'])) { echo $_GET['email']; } else if (!empty($row['tid'])) {
                                       echo $row['email'];
                                   } ?>" class="form-control required"/>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_company">Company</label>
                            <input id="billing_company" name="company" type="text"
                                   value="<?php if (!empty($_GET['company'])) { echo $_GET['company']; } else if (!empty($row['tid'])) {
                                       echo $row['company'];
                                   } ?>" class="form-control"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <label for="billing_address1">Address *</label>
                            <input id="billing_address1" name="address" type="text"
                                   value="<?php if (!empty($_GET['address'])) { echo $_GET['address']; } else if (!empty($row['tid'])) {
                                       echo $row['add1'];
                                   } ?>" class="form-control required" placeholder="Address 1"/>

                            <input id="billing_address2" name="address1" type="text"
                                   value="<?php if (!empty($_GET['address1'])) { echo $_GET['address1']; } else if (!empty($row['tid'])) {
                                       echo $row['add2'];
                                   } ?>" class="form-control margin-top-10" placeholder="Address 2"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_city">City *</label>
                            <input id="billing_city" name="city" type="text" value="<?php if (!empty($_GET['city'])) { echo $_GET['city']; } else if (!empty($row['tid'])) {
                                echo $row['city'];
                            } ?>" class="form-control required"/>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_state">State/Province *</label>
                            <select id="billing_state" name="state" class="form-control pointer required">
                                <option value="">Select...</option>
                                <option value="Alabama" <?php if (!empty($_GET['state']) && $_GET['state'] == "Alabama") echo "selected"; else 
								if (!empty($row['tid']) && $row['state'] == "Alabama") echo "selected"; ?>>
                                    Alabama
                                </option>
                                <option value="Alaska" <?php if (!empty($_GET['state']) && $_GET['state'] == "Alaska") echo "selected"; else if (!empty($row['tid']) && $row['state'] == "Alaska") echo "selected"; ?>>
                                    Alaska
                                </option>

                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_zipcode">Zip/Postal Code *</label>
                            <input id="billing_zipcode" name="zipcode" type="text"
                                   value="<?php if (!empty($_GET['zipcode'])) {
                                       echo $_GET['zipcode']; } else if (!empty($row['tid'])) {
                                       echo $row['zipcode'];
                                   } ?>" class="form-control required"/>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_country">Country *</label>
                            <select id="billing_country" name="country" class="form-control pointer required">
                                <option value="">Select...</option>
                                <option value="united States" <?php if (!empty($_GET['country']) && $_GET['country'] == "united States") { echo "selected"; }
								else
								if (!empty($row['tid']) && $row['country'] == "united States") { echo "selected"; }?>>
                                    united States
                                </option>
                                <option value="united Kingdom" <?php if (!empty($_GET['country']) && $_GET['country'] == "united Kingdom") echo "selected"; else if (!empty($row['tid']) && $row['country'] == "united Kingdom") echo "selected"; ?>>
                                    united Kingdom
                                </option>

                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_phone">Phone *</label>
                            <input id="billing_phone" name="phone" type="text"
                                   value="<?php if (!empty($_GET['phone'])) {
                                       echo $_GET['phone']; } else if (!empty($row['tid'])) {
                                       echo $row['phone'];
                                   } ?>" class="form-control required"/>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="billing_fax">Fax</label>
                            <input id="billing_fax" name="fax" type="text" value="<?php if (!empty($_GET['fax'])) {
                                echo $_GET['fax']; } else if (!empty($row['tid'])) {
                                echo $row['fax']; }
                             ?>" class="form-control"/>
                        </div>
                    </div>
                    <?php if (empty($row['tid'])) { ?>
                        <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block size-15"
                               id="copy_link" value="Submit">
                    <?php } ?>
                    <?php if (!empty($row['tid'])) { ?>
                        <button type="button" class="btn btn-primary btn-lg btn-block size-15" data-clipboard-target="#ul"
                                data-clipboard-action="copy"><i class="fa fa-mail-forward"></i>Copy Link
                        </button>
                        <input type="text" value="<?php echo $_SERVER['REQUEST_URI']; ?>" hidden>
                        <p id="ul"
                           style="color:white"><?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?></p>
                        <!--	<i class="fa fa-mail-forward"></i> Copy Link</button> -->
                    <?php } ?>
                    <hr/>

                    <div class="row">

                        <div class="col-lg-12 nomargin clearfix">
                            <label class="checkbox pull-left">
                                <!-- see assets/js/view/demo.shop.js - CHECKOUT section -->
                                <input id="shipswitch" name="shipping[same_as_billing]" type="checkbox" value="1"
                                       checked="checked"/>
                                <i></i> <span class="weight-300">Ship to the same address</span>
                            </label>
                        </div>

                    </div>

                </fieldset>
                <!-- /BILLING -->

                <!-- SHIPPING -->
                <fieldset id="shipping" class="margin-top-80 softhide">
                    <h4>Shipping Address</h4>
                    <hr/>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <label for="shipping:firstname">First Name *</label>
                            <input id="shipping:firstname" name="shipping[firstname]" type="text"
                                   class="form-control required"/>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="shipping:lastname">Last Name *</label>
                            <input id="shipping:lastname" name="shipping[lastname]" type="text"
                                   class="form-control required"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <label for="shipping:email">Email *</label>
                            <input id="shipping:email" name="shipping[email]" type="text"
                                   class="form-control required"/>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="shipping:company">Company</label>
                            <input id="shipping:company" name="shipping[company]" type="text" class="form-control"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <label for="shipping:address1">Address *</label>
                            <input id="shipping:address1" name="shipping[address][]" type="text"
                                   class="form-control required" placeholder="Address 1"/>

                            <input id="shipping:address2" name="shipping[address][]" type="text"
                                   class="form-control margin-top-10" placeholder="Address 2"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <label for="shipping:city">City *</label>
                            <input id="shipping:city" name="shipping[city]" type="text" class="form-control required"/>
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
                            <input id="shipping:zipcode" name="shipping[zipcode]" type="text"
                                   class="form-control required"/>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="shipping:country">Country *</label>
                            <select id="shipping:country" name="shipping[country]"
                                    class="form-control pointer required">
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
                            <input id="shipping:phone" name="shipping[phone]" type="text"
                                   class="form-control required"/>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="shipping:fax">Fax</label>
                            <input id="shipping:fax" name="shipping[fax]" type="text" class="form-control"/>
                        </div>
                    </div>

                </fieldset>
                <!-- /SHIPPING -->

            </div>

            <div class="col-lg-5 col-sm-5">
                
				<img class="img-responsive" src="assets/images/custom/Country_Charm_20171506163131.jpg" alt="shop first image" style="width: 37%;">
				<div class="heading-title" style="margin-bottom: 4px;">
                    <h4>Payment Method</h4>
                </div>
                <!-- PAYMENT METHOD -->
                <fieldset class="margin-top-10">
                    <div class="toggle-transparent toggle-bordered-full clearfix">
                        <div class="toggle active">
                            <div class="toggle-content">

                                <div class="row nomargin-bottom">
                                    <div class="col-lg-12 nomargin clearfix">
                                        <label class="radio pull-left nomargin-top">
                                            <input id="payment_check" name="payment[method]" type="radio" value="1"
                                                   checked="checked"/>
                                            <i></i> <span class="weight-300">Check / Money order</span>
                                        </label>
                                    </div>
                                    <div class="col-lg-12 nomargin clearfix">
                                        <label class="radio pull-left">
                                            <input id="payment_card" name="payment[method]" type="radio" value="2"/>
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
                                        <input id="payment:name" name="payment[name]" type="text"
                                               class="form-control required" autocomplete="off"/>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="payment:name">Credit Card Type *</label>
                                        <select id="payment:state" name="payment[state]"
                                                class="form-control pointer required">
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
                                        <input id="payment:cc_number" name="payment[cc_number]" type="text"
                                               class="form-control required" autocomplete="off"/>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="payment:cc_exp_month">Card Expiration *</label>

                                        <div class="row nomargin-bottom">
                                            <div class="col-lg-6 col-sm-6">
                                                <select id="payment:cc_exp_month" name="payment[cc_exp_month]"
                                                        class="form-control pointer required">
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
                                                <select id="payment:cc_exp_year" name="payment[cc_exp_year]"
                                                        class="form-control pointer required">
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
                                        <input id="payment:cc_cvv" name="payment[cc_cvv]" type="text"
                                               class="form-control required" autocomplete="off" maxlength="4"/>
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

                            <hr/>

                            <span class="clearfix">
											<span class="pull-right size-20">$128.75</span>
											<strong class="pull-left">TOTAL:</strong>
										</span>

                            <hr/>

                            <button type="button" class="btn btn-primary btn-lg btn-block size-15" id="s"><i
                                        class="fa fa-mail-forward"></i> Place Order Now
                            </button>
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
                                    <input id="accountswitch" name="create-account[yes]" type="checkbox" value="1"/>
                                    <i></i> <span class="weight-300">Create an account for later use</span>
                                </label>
                            </div>

                            <!-- CREATE ACCOUNT FORM -->
                            <div id="newaccount" class="margin-top-10 margin-bottom-30 softhide">

                                <div class="row nomargin-bottom">
                                    <div class="col-md-6 col-sm-6">
                                        <label for="account:password">Password *</label>
                                        <input id="account:password" name="account[password]" type="password"
                                               class="form-control"/>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label for="account:password2">Confirm Password *</label>
                                        <input id="account:password2" name="account[password2]" type="password"
                                               class="form-control"/>
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
<script>
    $(document).ready(function () {
        $("#s").click(function () {

            var leg = 0;
            var base_url = "API";

            var threadid = $("#tid").val();

            var content = {
                "thread_ref_id": threadid,
                "status"       : " made"
            };
            jQuery.support.cors = true;
            $
                .ajax({
                    type       : "POST",
                    contentType: 'application/json',
                    dataType   : 'json',
                    cache      : 'false',
                    url        : base_url + "message/payment/",
                    data       : JSON.stringify(content),
                    crossDomain: true,

                    success: function () {
                        window.location.href = "/floral/shop-checkout-final.php";
                    },
                    error  : function () {
                        window.location.href = "/floral/shop-checkout-final.php";
                        //alert('Payment Made Successfully');
                    }
                });
        });
    });
</script>
<script>

    $(function () {
        new Clipboard('.btn');
    });

</script>
<script>
$(function(){
	$(".img-responsive").attr('src',localStorage.getItem('bgcolor'))
})
</script>