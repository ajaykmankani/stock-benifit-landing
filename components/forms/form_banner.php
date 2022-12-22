<form class="contact-form custom-form-style-1" action="https://www.okler.net/previews/porto/9.9.0/php/contact-form.php" method="POST">
    <div class="contact-form-success alert alert-success d-none mt-4">
        <strong>Success!</strong> Your request has been sent to us.
    </div>

    <div class="contact-form-error alert alert-danger d-none mt-4">
        <strong>Error!</strong> There was an error sending your request.
        <span class="mail-error-message text-1 d-block"></span>
    </div>

    <div class="row">
        <div class="form-group col pb-1 mb-3">
            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" placeholder="Your Name" required>
        </div>
    </div>
    <div class="row">
        <div class="form-group col pb-1 mb-3">
            <input type="text" value="" data-msg-required="Please enter your phone number." maxlength="100" class="form-control" name="phone" placeholder="Your Phone Number" required>
        </div>
    </div>
    <div class="row">
        <div class="form-group col pb-1 mb-3">
            <div class="custom-select-1">
                <select data-msg-required="Please select a service." class="form-control" name="service" required>
                    <option value="" selected>Select Service</option>
                    <option value="NIFTY / Bank NIFTY">NIFTY / Bank NIFTY</option>
                    <option value="Equity Cash / Intraday">Equity Cash / Intraday</option>
                    <option value="Option (Call - Put)">Option (Call - Put)</option>
                    <option value="Future (Derivatives)">Future (Derivatives)</option>
                    <option value="index">index</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <button type="submit" class="btn btn-primary btn-modern font-weight-bold text-3 px-5 py-3" data-loading-text="Loading...">CALL ME BACK</button>
        </div>
    </div>
</form>