<?php include 'includes/header.php'; ?>

<div class="app-header">
    <?php include 'includes/app-header.php'; ?>
</div>

<div class="app-body">
    <?php include 'includes/side-bar.php'; ?>

    <div class="app-content">

        <div class="page-header">
            <div class="row">
                <div class="col-md-6">
                    <div class="title">
                        Configuration
                    </div>
                    <div class="desc">
                        Update system configurations
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">System</a> / <span>Configuration</span>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="row no-gutters">
                <div class="content-panel col-md-12">
                    <div class="content-inner">
                        <div class="panel-head">General Settings</div>
                        <div class="content-area">

                            <form>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="lang">Language</label>
                                        <select class="form-control" id="lang">
                                            <option>- Select -</option>
                                            <option selected>English</option>
                                            <option>Français</option>
                                            <option>Português</option>
                                            <option>Italiano</option>
                                            <option>Russian</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="from">From Email</label>
                                        <input type="email" class="form-control" id="from" placeholder="From Email" value="mishan@app-monkeyz.com">
                                        <div class="form-feild-info">Sender's Email address. Please use corperate email address rather than using free emails like gmail, yahoo etc.</div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="fr-name">From Name</label>
                                        <input class="form-control" type="text" id="fr-name" placeholder="From Name" value="Jacques Anderson">
                                        <div class="form-feild-info">Sender's Name to be appeared on Email</div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="mailjet-user">MailJet Username</label>
                                        <input class="form-control" type="text" id="mailjet-user" placeholder="MailJet Username" value="f6398804690ba0ca90e7d1bf7876227b">
                                        <div class="form-feild-info">Your MailJet account(SMTP) username. Works only with new MailJet accounts that support API access. Username and password are in MailJet > Account > SMTP Settings.</div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="mailjet-pass">MailJet Password</label>
                                        <input class="form-control" type="text" id="mailjet-pass" placeholder="MailJet Password" value="448554abf63c75dd7d6cd212f0881d94">
                                        <div class="form-feild-info">Your MailJet account(SMTP) password</div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="dn-type">Donation Type</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox1" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">Paypal</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="paypal-id">Paypal ID</label>
                                        <input class="form-control" type="text" id="paypal-id" placeholder="Paypal ID" value="XBAZ3AH6DNVVS">
                                        <div class="form-feild-info">Merchant id or email of the Paypal account</div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="currency">Currency</label>
                                        <select class="form-control" id="currency">
                                            <option>- Select -</option>
                                            <option>U.S. Dollar ( US&#36; ) </option>
                                            <option selected>Euro ( &#8364; )</option>
                                            <option>Canadian Dollar ( C&#36; )</option>
                                        </select>
                                        <div class="form-feild-info">System currency type. Changed currency type will affect only to new transactions</div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="dn-type">Options</label><br>
                                        <div class="form-check">
                                            <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox2" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">Validate Volunteer</label>
                                        </div>
                                        <div class="form-feild-info">Allow team lead to moderate the volunteer after joining to a team</div>

                                        <div class="form-check">
                                            <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox3" value="option3">
                                            <label class="form-check-label" for="inlineCheckbox3">Exclude Facebook Personal Contacts</label>
                                        </div>
                                        <div class="form-feild-info">Exclude personal Facebook contacts appearing on the system</div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="">Embed Newsletter</label>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <textarea class="form-control form-inline" id="embed-newsletter" rows="4">
<form method="post" action='http://staging.moncenis.com/index.php/Newsletter/index'>
    First name:<br>
    <input type='text' name='firstName'>
    <br>
    Last name:<br>
    <input type='text' name='lastName'>
    <br>
    Email:<br>
    <input type='text' name='email'>
    <br><br>
    <input type='hidden' name='callBackUrl' value=''><!-- Redirect URL ex: http://www.google.com, if not set redirects to client page -->
    <input type='submit' name='Submit' value='Submit'>
</form>
                                                </textarea>
                                                <div class="form-feild-info">Copy this to your website</div>
                                            </div>
                                            <div class="col-md-4">
                                                <button onclick="copyToClipboard()" class="btn btn-secondary btn-sm form-inline">Copy to Clipboard</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="sms-sender">SMS Sender ID</label>
                                        <input type="text" id="sms-sender" class="form-control" placeholder="SMS Sender ID">
                                        <div class="form-feild-info">Sender ID can only be a valid telephone number, company name or company product and it must only contain the following characters A-Z and 0-9 with a maximum of 11 characters for a name and 16 for a number.</div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="strp-client">Stripe Client ID</label>
                                        <input type="text" id="strp-client" class="form-control" placeholder="Stripe Client ID" value="pk_test_tedeA4LaVEEImn0vzC9DsAHM">
                                        <div class="form-feild-info">Stripe Client ID can be obtained from stripe.com when you sign up. ex: pk_test_6pRNASCoBOKtIshFeQd4XMUh</div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="strp-id">Stripe Secret ID</label>
                                        <input type="text" id="strp-id" class="form-control" placeholder="Stripe Secret ID" value="sk_test_9uQec8BCZUTFM2UlznJuhnJV">
                                        <div class="form-feild-info">Stripe Secret ID can be obtained from stripe.com when you sign up. ex: sk_test_6pRNASCoBOKtIshFeQd4XMUh</div>
                                    </div>
                                </div>

                                <div class="text-left text-md-right">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <div class="content-panel col-md-6">
                    <div class="content-inner">
                        <div class="panel-head">Reset Accounts</div>
                        <div class="content-area">
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-action"><img src="img/social-twitter.svg" width="25"> Twitter <button class="btn btn-primary btn-sm float-right">Reset</button></li>
                                <li class="list-group-item list-group-item-action"><img src="img/social-fb.svg" width="25"> Facebook <button class="btn btn-primary btn-sm float-right">Reset</button></li>
                                <li class="list-group-item list-group-item-action"><img src="img/social-in.svg" width="25"> LinkedIn <button class="btn btn-primary btn-sm float-right">Reset</button></li>
                                <li class="list-group-item list-group-item-action"><img src="img/social-mailchimp.svg" width="25"> MailChimp <button class="btn btn-primary btn-sm float-right">Reset</button></li>
                                <li class="list-group-item list-group-item-action"><img src="img/social-bitly.svg" width="25"> Bilty <button class="btn btn-primary btn-sm float-right">Reset</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <?php include 'includes/app-footer.php'; ?>
    </div>

</div>

<?php include 'includes/footer.php'; ?>

<script>
    $(document).ready(function () {
        $('#dob1').datetimepicker({
            format: 'YYYY-MM-DD'
        });

        $(".chosen-select").chosen();
    });

    function copyToClipboard() {
        var copyText = document.getElementById("embed-newsletter");
        copyText.select();
        document.execCommand("Copy");
        /* Alert the copied text */
        alert("Copied to the clipboard");
    }
</script>