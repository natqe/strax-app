@extends('master')
@section('content')
<div class="container main-container headerOffset">
    <div class="row">
        <div class="breadcrumbDiv col-lg-12">
            <ul class="breadcrumb">
                <li><a href="{{url('')}}">Home</a></li>
                <li><a href="{{url('cart')}}">Cart</a></li>
                <li class="active"> Checkout</li>
            </ul>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-7">
            <h1 class="section-title-inner"><span><i
                    class="glyphicon glyphicon-shopping-cart"></i> ONEPAGE CHECKOUT</span></h1>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-5 rightSidebar">
            <h4 class="caps"><a href="{{url('categories')}}"><i class="fa fa-chevron-left"></i> Back to shopping </a></h4>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="row userInfo">
                <div class="col-xs-12 col-sm-12">


                    <div class="w100 clearfix">
                        <div class="row userInfo">

                            <div style="clear: both"></div>

                            <div class="onepage-checkout col-lg-12">

                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                   href="#BillingInformation" aria-expanded="true"
                                                   aria-controls="BillingInformation">
                                                    Billing information
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="BillingInformation" class="panel-collapse collapse in" role="tabpanel"
                                             aria-labelledby="BillingInformation">
                                            <div class="panel-body">

                                                <form class="form-inline" action="page" method="post">
                                                    <label class="radio inline">
                                                        <input id="exisitingAddress" type="radio" value="option1"
                                                               name="add"> Use my existing
                                                        Data address
                                                    </label>&nbsp;&nbsp;
                                                    <label class="radio inline">
                                                        <input id="newAddress" type="radio" value="option2" name="add">
                                                        I want to assign
                                                        new address
                                                    </label>


                                                </form>

                                                <hr>

                                                <div style="clear: both"></div>

                                                <div id="exisitingAddressBox" class="collapse in">
                                                    <div class="form-group uppercase"><strong>Select Billing
                                                        address</strong></div>
                                                    <form>

                                                        <div class="form-group required maxwidth300">
                                                            <label for="InputCountry">Select Address <sup>*</sup>
                                                            </label>
                                                            <select class="form-control" required aria-required="true"
                                                                    id="SelectAddress" name="SelectAddress">
                                                                <option value="">Address 1</option>
                                                                <option value="38">Address 2</option>
                                                                <option value="39">Address 3</option>
                                                                <option value="40">Address 4</option>
                                                                <option value="41">Address 5</option>
                                                            </select>
                                                        </div>
                                                    </form>


                                                </div>

                                                <div id="newBillingAddressBox" class="collapse">

                                                    <div class="form-group uppercase"><strong>New Billing
                                                        address</strong></div>


                                                    <form>
                                                        <div class="col-xs-12 col-sm-6">
                                                            <div class="form-group required">
                                                                <label for="InputName">First Name <sup>*</sup> </label>
                                                                <input required type="text" class="form-control"
                                                                       id="InputName" placeholder="First Name">
                                                            </div>
                                                            <div class="form-group required">
                                                                <label for="InputLastName">Last Name <sup>*</sup>
                                                                </label>
                                                                <input required type="text" class="form-control"
                                                                       id="InputLastName" placeholder="Last Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="InputEmail">Email </label>
                                                                <input type="text" class="form-control" id="InputEmail"
                                                                       placeholder="Email">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="InputCompany">Company </label>
                                                                <input type="text" class="form-control"
                                                                       id="InputCompany" placeholder="Company">
                                                            </div>
                                                            <div class="form-group required">
                                                                <label for="InputAddress">Address <sup>*</sup> </label>
                                                                <input required type="text" class="form-control"
                                                                       id="InputAddress" placeholder="Address">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="InputAddress2">Address (Line 2) </label>
                                                                <input type="text" class="form-control"
                                                                       id="InputAddress2" placeholder="Address">
                                                            </div>
                                                            <div class="form-group required">
                                                                <label for="InputCity">City <sup>*</sup> </label>
                                                                <input required type="text" class="form-control"
                                                                       id="InputCity" placeholder="City">
                                                            </div>
                                                            <div class="form-group required">
                                                                <label for="InputState">State <sup>*</sup> </label>

                                                                <select class="form-control" required
                                                                        aria-required="true" id="InputState"
                                                                        name="InputState">
                                                                    <option value="">Choose</option>
                                                                    <option value="1">Alabama</option>
                                                                    <option value="2">Alaska</option>
                                                                    <option value="3">Arizona</option>
                                                                    <option value="4">Arkansas</option>
                                                                    <option value="5">California</option>
                                                                    <option value="6">Colorado</option>
                                                                    <option value="7">Connecticut</option>
                                                                    <option value="8">Delaware</option>
                                                                    <option value="53">District of Columbia</option>
                                                                    <option value="9">Florida</option>
                                                                    <option value="10">Georgia</option>
                                                                    <option value="11">Hawaii</option>
                                                                    <option value="12">Idaho</option>
                                                                    <option value="13">Illinois</option>
                                                                    <option value="14">Indiana</option>
                                                                    <option value="15">Iowa</option>
                                                                    <option value="16">Kansas</option>
                                                                    <option value="17">Kentucky</option>
                                                                    <option value="18">Louisiana</option>
                                                                    <option value="19">Maine</option>
                                                                    <option value="20">Maryland</option>
                                                                    <option value="21">Massachusetts</option>
                                                                    <option value="22">Michigan</option>
                                                                    <option value="23">Minnesota</option>
                                                                    <option value="24">Mississippi</option>
                                                                    <option value="25">Missouri</option>
                                                                    <option value="26">Montana</option>
                                                                    <option value="27">Nebraska</option>
                                                                    <option value="28">Nevada</option>
                                                                    <option value="29">New Hampshire</option>
                                                                    <option value="30">New Jersey</option>
                                                                    <option value="31">New Mexico</option>
                                                                    <option value="32">New York</option>
                                                                    <option value="33">North Carolina</option>
                                                                    <option value="34">North Dakota</option>
                                                                    <option value="35">Ohio</option>
                                                                    <option value="36">Oklahoma</option>
                                                                    <option value="37">Oregon</option>
                                                                    <option value="38">Pennsylvania</option>
                                                                    <option value="51">Puerto Rico</option>
                                                                    <option value="39">Rhode Island</option>
                                                                    <option value="40">South Carolina</option>
                                                                    <option value="41">South Dakota</option>
                                                                    <option value="42">Tennessee</option>
                                                                    <option value="43">Texas</option>
                                                                    <option value="52">US Virgin Islands</option>
                                                                    <option value="44">Utah</option>
                                                                    <option value="45">Vermont</option>
                                                                    <option value="46">Virginia</option>
                                                                    <option value="47">Washington</option>
                                                                    <option value="48">West Virginia</option>
                                                                    <option value="49">Wisconsin</option>
                                                                    <option value="50">Wyoming</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-6">
                                                            <div class="form-group required">
                                                                <label for="InputZip">Zip / Postal Code <sup>*</sup>
                                                                </label>
                                                                <input required type="text" class="form-control"
                                                                       id="InputZip" placeholder="Zip / Postal Code">
                                                            </div>
                                                            <div class="form-group required">
                                                                <label for="InputCountry">Country <sup>*</sup> </label>
                                                                <select class="form-control" required
                                                                        aria-required="true" id="InputCountry"
                                                                        name="InputCountry">
                                                                    <option value="">Choose</option>
                                                                    <option value="38">Algeria</option>
                                                                    <option value="39">American Samoa</option>
                                                                    <option value="40">Andorra</option>
                                                                    <option value="41">Angola</option>
                                                                    <option value="42">Anguilla</option>
                                                                    <option value="43">Antigua and Barbuda</option>
                                                                    <option value="44">Argentina</option>
                                                                    <option value="45">Armenia</option>
                                                                    <option value="46">Aruba</option>
                                                                    <option value="24">Australia</option>
                                                                    <option value="2">Austria</option>
                                                                    <option value="47">Azerbaijan</option>
                                                                    <option value="48">Bahamas</option>
                                                                    <option value="49">Bahrain</option>
                                                                    <option value="50">Bangladesh</option>
                                                                    <option value="3">Belgium</option>
                                                                    <option value="34">Bolivia</option>
                                                                    <option value="4">Canada</option>
                                                                    <option value="5">China</option>
                                                                    <option value="16">Czech Republic</option>
                                                                    <option value="20">Denmark</option>
                                                                    <option value="7">Finland</option>
                                                                    <option value="8">France</option>
                                                                    <option value="1">Germany</option>
                                                                    <option value="9">Greece</option>
                                                                    <option value="22">HongKong</option>
                                                                    <option value="26">Ireland</option>
                                                                    <option value="29">Israel</option>
                                                                    <option value="10">Italy</option>
                                                                    <option value="32">Ivory Coast</option>
                                                                    <option value="11">Japan</option>
                                                                    <option value="12">Luxemburg</option>
                                                                    <option value="35">Mauritius</option>
                                                                    <option value="13">Netherlands</option>
                                                                    <option value="27">New Zealand</option>
                                                                    <option value="31">Nigeria</option>
                                                                    <option value="23">Norway</option>
                                                                    <option value="14">Poland</option>
                                                                    <option value="15">Portugal</option>
                                                                    <option value="36">Romania</option>
                                                                    <option value="25">Singapore</option>
                                                                    <option value="37">Slovakia</option>
                                                                    <option value="30">South Africa</option>
                                                                    <option value="28">South Korea</option>
                                                                    <option value="6">Spain</option>
                                                                    <option value="18">Sweden</option>
                                                                    <option value="19">Switzerland</option>
                                                                    <option value="33">Togo</option>
                                                                    <option value="17">United Kingdom</option>
                                                                    <option value="21">United States</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="InputAdditionalInformation">Additional
                                                                    information</label>
                                                                <textarea rows="3" cols="26"
                                                                          name="InputAdditionalInformation"
                                                                          class="form-control"
                                                                          id="InputAdditionalInformation"></textarea>
                                                            </div>
                                                            <div class="form-group required">
                                                                <label for="InputMobile">Mobile phone
                                                                    <sup>*</sup></label>
                                                                <input required type="tel" name="InputMobile"
                                                                       class="form-control" id="InputMobile">
                                                            </div>
                                                            <div class="form-group required">
                                                                <label for="addressAlias">Please assign an address title
                                                                    for future reference. <sup>*</sup></label>
                                                                <input required type="text" value="My address"
                                                                       name="addressAlias" class="form-control"
                                                                       id="addressAlias">
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                   data-parent="#accordion" href="#Shippinginformation"
                                                   aria-expanded="false" aria-controls="collapseTwo">
                                                    Shipping information
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="Shippinginformation" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="Shippinginformation">
                                            <div class="panel-body">

                                                <form class="form-inline" action="page" method="post">
                                                    <label class="radio inline">
                                                        <input id="existingShippingAddress" type="radio"
                                                               value="option-b1" name="add"> Same as
                                                        Billing address
                                                    </label>&nbsp;&nbsp;
                                                    <label class="radio inline">
                                                        <input id="newShippingAddress" type="radio" value="option-b2"
                                                               name="add"> New Shipping
                                                        address
                                                    </label>
                                                </form>
                                                <hr>
                                                <div style="clear: both"></div>

                                                <div class="expandBox collapse" id="newShippingAddressBox">

                                                    <div class="form-group uppercase"><strong>new shipping
                                                        address</strong></div>

                                                    <div class="col-xs-12">
                                                        <div class="form-group required">
                                                            <label for="InputName">First Name <sup>*</sup> </label>
                                                            <input placeholder="First Name" id="InputName"
                                                                   class="form-control" required
                                                                   type="text">
                                                        </div>
                                                        <div class="form-group required">
                                                            <label for="InputLastName">Last Name <sup>*</sup> </label>
                                                            <input placeholder="Last Name" id="InputLastName"
                                                                   class="form-control" required
                                                                   type="text">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="InputEmail">Email </label>
                                                            <input placeholder="Email" id="InputEmail"
                                                                   class="form-control"
                                                                   type="text">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="InputCompany">Company </label>
                                                            <input placeholder="Company" id="InputCompany"
                                                                   class="form-control"
                                                                   type="text">
                                                        </div>
                                                        <div class="form-group required">
                                                            <label for="InputAddress">Address <sup>*</sup> </label>
                                                            <input placeholder="Address" id="InputAddress"
                                                                   class="form-control" required
                                                                   type="text">
                                                        </div>

                                                        <div class="form-group required">
                                                            <label for="InputCity">City <sup>*</sup> </label>
                                                            <input placeholder="City" id="InputCity"
                                                                   class="form-control" required
                                                                   type="text">
                                                        </div>
                                                        <div class="form-group required">
                                                            <label for="InputState">State <sup>*</sup> </label>

                                                            <select name="InputState" id="InputState"
                                                                    aria-required="true" required
                                                                    class="form-control">
                                                                <option value="">Choose</option>
                                                                <option value="1">Alabama</option>
                                                                <option value="2">Alaska</option>
                                                                <option value="3">Arizona</option>
                                                                <option value="4">Arkansas</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                   data-parent="#accordion" href="#Deliverymethod" aria-expanded="false"
                                                   aria-controls="Deliverymethod">
                                                    Delivery method
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="Deliverymethod" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="Deliverymethod">
                                            <div class="panel-body">
                                                <div class="w100 row">
                                                    <div class="form-group col-lg-4 col-sm-4 col-md-4 -col-xs-12">
                                                        <label for="id_country">Country</label>
                                                        <select class="form-control" required aria-required="true"
                                                                id="id_country" name="id_country">
                                                            <option value="">Choose</option>
                                                            <option value="38">Algeria</option>
                                                            <option value="39">American Samoa</option>
                                                            <option value="40">Andorra</option>
                                                            <option value="41">Angola</option>
                                                            <option value="42">Anguilla</option>
                                                            <option value="43">Antigua and Barbuda</option>
                                                            <option value="44">Argentina</option>
                                                            <option value="45">Armenia</option>
                                                            <option value="46">Aruba</option>
                                                            <option value="24">Australia</option>
                                                            <option value="2">Austria</option>
                                                            <option value="47">Azerbaijan</option>
                                                            <option value="48">Bahamas</option>
                                                            <option value="49">Bahrain</option>
                                                            <option value="50">Bangladesh</option>
                                                            <option value="3">Belgium</option>
                                                            <option value="34">Bolivia</option>
                                                            <option value="4">Canada</option>
                                                            <option value="5">China</option>
                                                            <option value="16">Czech Republic</option>
                                                            <option value="20">Denmark</option>
                                                            <option value="7">Finland</option>
                                                            <option value="8">France</option>
                                                            <option value="1">Germany</option>
                                                            <option value="9">Greece</option>
                                                            <option value="22">HongKong</option>
                                                            <option value="26">Ireland</option>
                                                            <option value="29">Israel</option>
                                                            <option value="10">Italy</option>
                                                            <option value="32">Ivory Coast</option>
                                                            <option value="11">Japan</option>
                                                            <option value="12">Luxemburg</option>
                                                            <option value="35">Mauritius</option>
                                                            <option value="13">Netherlands</option>
                                                            <option value="27">New Zealand</option>
                                                            <option value="31">Nigeria</option>
                                                            <option value="23">Norway</option>
                                                            <option value="14">Poland</option>
                                                            <option value="15">Portugal</option>
                                                            <option value="36">Romania</option>
                                                            <option value="25">Singapore</option>
                                                            <option value="37">Slovakia</option>
                                                            <option value="30">South Africa</option>
                                                            <option value="28">South Korea</option>
                                                            <option value="6">Spain</option>
                                                            <option value="18">Sweden</option>
                                                            <option value="19">Switzerland</option>
                                                            <option value="33">Togo</option>
                                                            <option value="17">United Kingdom</option>
                                                            <option selected="selected" value="21">United States
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div id="states"
                                                         class="form-group  col-lg-4 col-sm-4 col-md-4 -col-xs-12">
                                                        <label for="id-state">State</label>
                                                        <select class="form-control" required aria-required="true"
                                                                id="id-state" name="id-state">
                                                            <option value="">Choose</option>
                                                            <option value="1">Alabama</option>
                                                            <option value="2">Alaska</option>
                                                            <option value="3">Arizona</option>
                                                            <option value="4">Arkansas</option>
                                                            <option value="5">California</option>
                                                            <option value="6">Colorado</option>
                                                            <option value="7">Connecticut</option>
                                                            <option value="8">Delaware</option>
                                                            <option value="9">Florida</option>
                                                            <option value="10">Georgia</option>
                                                            <option value="11">Hawaii</option>
                                                            <option value="12">Idaho</option>
                                                            <option value="13">Illinois</option>
                                                            <option value="14">Indiana</option>
                                                            <option value="15">Iowa</option>
                                                            <option value="16">Kansas</option>
                                                            <option value="17">Kentucky</option>
                                                            <option value="18">Louisiana</option>
                                                            <option value="19">Maine</option>
                                                            <option value="20">Maryland</option>
                                                            <option value="21">Massachusetts</option>
                                                            <option value="22">Michigan</option>
                                                            <option value="23">Minnesota</option>
                                                            <option value="24">Mississippi</option>
                                                            <option value="25">Missouri</option>
                                                            <option value="26">Montana</option>
                                                            <option value="27">Nebraska</option>
                                                            <option value="28">Nevada</option>
                                                            <option value="29">New Hampshire</option>
                                                            <option value="30">New Jersey</option>
                                                            <option value="31">New Mexico</option>
                                                            <option value="32">New York</option>
                                                            <option value="33">North Carolina</option>
                                                            <option value="34">North Dakota</option>
                                                            <option value="35">Ohio</option>
                                                            <option value="36">Oklahoma</option>
                                                            <option value="37">Oregon</option>
                                                            <option value="38">Pennsylvania</option>
                                                            <option value="39">Rhode Island</option>
                                                            <option value="40">South Carolina</option>
                                                            <option value="41">South Dakota</option>
                                                            <option value="42">Tennessee</option>
                                                            <option value="43">Texas</option>
                                                            <option value="44">Utah</option>
                                                            <option value="45">Vermont</option>
                                                            <option value="46">Virginia</option>
                                                            <option value="47">Washington</option>
                                                            <option value="48">West Virginia</option>
                                                            <option value="49">Wisconsin</option>
                                                            <option value="50">Wyoming</option>
                                                            <option value="51">Puerto Rico</option>
                                                            <option value="52">US Virgin Islands</option>
                                                            <option value="53">District of Columbia</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group  col-lg-4 col-sm-4 col-md-4 -col-xs-12">
                                                        <label for="zipcode">Zip Code</label>
                                                        <input type="text" id="zipcode" name="zipcode"
                                                               class="form-control">
                                                        (Needed for certain carriers.)
                                                    </div>
                                                    <div class="form-group col-lg-12 col-sm-12 col-md-12 -col-xs-12">
                                                        <table style="width:100%"
                                                               class="table-bordered table tablelook2">
                                                            <tbody>
                                                            <tr>
                                                                <td> Carrier</td>
                                                                <td>Method</td>
                                                                <td>Information</td>
                                                                <td>Price!</td>
                                                            </tr>
                                                            <tr>
                                                                <td><label class="radio">
                                                                    <input type="radio" name="optionsRadios"
                                                                           id="optionsRadios1" value="option1" checked>
                                                                    <i class="fa  fa-plane fa-2x"></i> </label></td>
                                                                <td> By Road</td>
                                                                <td>Pick up in-store</td>
                                                                <td>Free!</td>
                                                            </tr>
                                                            <tr>
                                                                <td><label class="radio">
                                                                    <input type="radio" name="optionsRadios"
                                                                           id="optionsRadios2" value="option2">
                                                                    <i class="fa fa-truck fa-2x"></i> </label></td>
                                                                <td>By Air</td>
                                                                <td>Delivery next day!</td>
                                                                <td>Free!</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                   data-parent="#accordion" href="#Paymentmethod" aria-expanded="false"
                                                   aria-controls="Paymentmethod">
                                                    Payment method
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="Paymentmethod" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="Paymentmethod">
                                            <div class="panel-body">


                                                <div class="onepage-payment">

                                                    <div class="payment-method">
                                                        <label class="radio-inline" for="paypal">
                                                            <input name="radios" id="paypal" value="4" type="radio">
                                                            <img src="images/site/payment/paypal-small.png" height="18"
                                                                 alt="paypal"> Checkout with Paypal </label>

                                                    </div>

                                                    <div style="clear:both;"></div>

                                                    <div class="creditCardcollapse payment-method">

                                                        <label class="radio-inline" for="creditCard">
                                                            <input type="radio" name="radios" id="creditCard" value="">
                                                            <img style="height: 30px;" class="pull-right"
                                                                 src="images/site/card-payment.jpg" alt="card-payment">
                                                        </label>

                                                    </div>
                                                    <div style="clear:both;"></div>

                                                    <div id="creditCardCollapse" class="creditCard collapse ">

                                                        <div class="paymentInput">
                                                            <label for="CardNumber">Credit Card Number *</label>
                                                            <br>
                                                            <input id="CardNumber" type="text" name="Number">
                                                        </div>
                                                        <!--paymentInput-->
                                                        <div class="paymentInput">
                                                            <label for="CardNumber2">Name on Credit Card *</label>
                                                            <br>
                                                            <input type="text" name="CardNumber2" id="CardNumber2">
                                                        </div>
                                                        <!--paymentInput-->
                                                        <div class="paymentInput">
                                                            <div class="form-group">
                                                                <label>Expiration date *</label>
                                                                <br>

                                                                <div class="col-lg-4 col-md-4 col-sm-4 no-margin-left no-padding">
                                                                    <select required aria-required="true" name="expire">
                                                                        <option value="">Month</option>
                                                                        <option value="1">01 - January</option>
                                                                        <option value="2">02 - February</option>
                                                                        <option value="3">03 - March</option>
                                                                        <option value="4">04 - April</option>
                                                                        <option value="5">05 - May</option>
                                                                        <option value="6">06 - June</option>
                                                                        <option value="7">07 - July</option>
                                                                        <option value="8">08 - August</option>
                                                                        <option value="9">09 - September</option>
                                                                        <option value="10">10 - October</option>
                                                                        <option value="11">11 - November</option>
                                                                        <option value="12">12 - December</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                                    <select required aria-required="true" name="year">
                                                                        <option value="">Year</option>
                                                                        <option value="2013">2013</option>
                                                                        <option value="2014">2014</option>
                                                                        <option value="2015">2015</option>
                                                                        <option value="2016">2016</option>
                                                                        <option value="2017">2017</option>
                                                                        <option value="2018">2018</option>
                                                                        <option value="2019">2019</option>
                                                                        <option value="2020">2020</option>
                                                                        <option value="2021">2021</option>
                                                                        <option value="2022">2022</option>
                                                                        <option value="2023">2023</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--paymentInput-->

                                                        <div style="clear:both"></div>
                                                        <div class="paymentInput clearfix">
                                                            <label for="VerificationCode">Verification Code *</label>
                                                            <br>
                                                            <input type="text" id="VerificationCode"
                                                                   name="VerificationCode" style="width:90px;">
                                                            <br>
                                                        </div>
                                                        <!--paymentInput-->

                                                        <div>
                                                            <input type="checkbox" name="saveInfo" id="saveInfoid">
                                                            <label for="saveInfoid">&nbsp;Save my Card
                                                                information</label>
                                                        </div>
                                                    </div>
                                                    <!--creditCard-->


                                                    <div class="card-paynemt-box payment-method">


                                                        <label class="radio-inline" for="CashOnDelivery"
                                                               data-toggle="collapse"
                                                               data-target="#CashOnDeliveryCollapse"
                                                               aria-expanded="false"
                                                               aria-controls="CashOnDeliveryCollapse">
                                                            <input name="radios" id="CashOnDelivery" value="4"
                                                                   type="radio">
                                                            Cash On Delivery </label>

                                                        <div class="collapse" id="CashOnDeliveryCollapse">

                                                            <p>All transactions are secure and encrypted, and we
                                                                neverstor
                                                                To learn more, please view our privacy policy.</p>


                                                            <div class="form-group">
                                                                <label for="CommentsOrder">Add Comments About Your
                                                                    Order</label>
                                                                <textarea id="CommentsOrder" class="form-control"
                                                                          name="CommentsOrder" cols="26"
                                                                          rows="3"></textarea>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <br>
                                                        <label class="checkbox-inline" for="checkboxes-1">
                                                            <input name="checkboxes" id="checkboxes-1" value="1"
                                                                   type="checkbox">
                                                            I have read and agree to the <a
                                                                href="terms-conditions.html">Terms & Conditions</a>
                                                        </label>
                                                    </div>
                                                    <div class="pull-left"><a href="{{url('cart/thanks-for-order')}}"
                                                                              class="btn btn-primary btn-lg ">
                                                        Order &nbsp; <i class="fa fa-arrow-circle-right"></i> </a></div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!--onepage-checkout-->


                        </div>
                        <!--/row end-->

                    </div>


                </div>
            </div>
            <!--/row end-->

        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 rightSidebar">
            <div class="w100 cartMiniTable">
                <table id="cart-summary" class="std table">
                    <tbody>
                    <tr>
                        <td>Total products</td>
                        <td class="price">${{Cart::getSubTotal()}}</td>
                    </tr>
                    <tr style="">
                        <td>Shipping</td>
                        <td class="price"><span class="success">Free shipping!</span></td>
                    </tr>
                    <tr class="cart-total-price ">
                        <td>Total (tax excl.)</td>
                        <td class="price">${{Cart::getSubTotal()}}</td>
                    </tr>
                    <tr>
                        <td>Total tax</td>
                        <td class="price" id="total-tax">$0.00</td>
                    </tr>
                    <tr>
                        <td> Total</td>
                        <td class=" site-color" id="total-price">${{Cart::getSubTotal()}}</td>
                    </tr>
                    </tbody>
                    <tbody>
                    </tbody>
                </table>


            </div>
            <!--  /cartMiniTable-->

        </div>
        <!--/rightSidebar-->

    </div>
    <!--/row-->

    <div style="clear:both"></div>
</div>
<!-- /.main-container-->
<div class="gap"></div>
@endsection
@section('js_content')
<script>


    $(document).ready(function () {

        $('input#newAddress').on('ifChanged', function (event) {
            //alert(event.type + ' callback');
            $('#newBillingAddressBox').collapse("show");
            $('#exisitingAddressBox').collapse("hide");

        });

        $('input#exisitingAddress').on('ifChanged', function (event) {
            //alert(event.type + ' callback');
            $('#newBillingAddressBox').collapse("hide");
            $('#exisitingAddressBox').collapse("show");
        });


        $('input#newShippingAddress').on('ifChanged', function (event) {
            //alert(event.type + ' callback');
            $('#newShippingAddressBox').collapse("show");

        });

        $('input#existingShippingAddress').on('ifChanged', function (event) {
            //alert(event.type + ' callback');
            $('#newShippingAddressBox').collapse("hide");

        });


        $('input#creditCard').on('ifChanged', function (event) {
            //alert(event.type + ' callback');
            $('#creditCardCollapse').collapse("toggle");

        });


        $('input#CashOnDelivery').on('ifChanged', function (event) {
            //alert(event.type + ' callback');
            $('#CashOnDeliveryCollapse').collapse("toggle");

        });


    });


</script>
@endsection