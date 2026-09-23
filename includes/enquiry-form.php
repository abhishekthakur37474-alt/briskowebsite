<?php
$states = json_decode(INDIAN_STATES, true);
$ranges = json_decode(INVESTMENT_RANGES, true);
$formId = $formId ?? 'franchiseForm';
?>
<form class="enquiry-form" id="<?php echo e($formId); ?>" action="<?php echo e(site_url('forms/franchise-enquiry.php')); ?>" method="post" novalidate>
    <?php echo csrf_field(); ?>
    <div class="honeypot" aria-hidden="true">
        <label for="<?php echo e($formId); ?>_website">Website</label>
        <input type="text" id="<?php echo e($formId); ?>_website" name="website" tabindex="-1" autocomplete="off">
    </div>
    <div class="row g-4">
        <div class="col-md-6">
            <label class="form-label" for="<?php echo e($formId); ?>_name">Full Name <span class="req">*</span></label>
            <input class="form-control" type="text" id="<?php echo e($formId); ?>_name" name="full_name" autocomplete="name" required maxlength="80">
            <div class="field-error" data-error-for="full_name"></div>
        </div>
        <div class="col-md-6">
            <label class="form-label" for="<?php echo e($formId); ?>_mobile">Mobile Number <span class="req">*</span></label>
            <input class="form-control" type="tel" id="<?php echo e($formId); ?>_mobile" name="mobile" autocomplete="tel" inputmode="numeric" required maxlength="10" pattern="[6-9][0-9]{9}">
            <div class="field-error" data-error-for="mobile"></div>
        </div>
        <div class="col-md-6">
            <label class="form-label" for="<?php echo e($formId); ?>_email">Email Address</label>
            <input class="form-control" type="email" id="<?php echo e($formId); ?>_email" name="email" autocomplete="email" maxlength="120">
            <div class="field-error" data-error-for="email"></div>
        </div>
        <div class="col-md-6">
            <label class="form-label" for="<?php echo e($formId); ?>_city">City <span class="req">*</span></label>
            <input class="form-control" type="text" id="<?php echo e($formId); ?>_city" name="city" autocomplete="address-level2" required maxlength="80">
            <div class="field-error" data-error-for="city"></div>
        </div>
        <div class="col-md-6">
            <label class="form-label" for="<?php echo e($formId); ?>_state">State <span class="req">*</span></label>
            <select class="form-select" id="<?php echo e($formId); ?>_state" name="state" required>
                <option value="">Select state</option>
                <?php foreach ($states as $stateName): ?>
                    <option value="<?php echo e($stateName); ?>"><?php echo e($stateName); ?></option>
                <?php endforeach; ?>
            </select>
            <div class="field-error" data-error-for="state"></div>
        </div>
        <div class="col-md-6">
            <label class="form-label" for="<?php echo e($formId); ?>_location">Preferred Location</label>
            <input class="form-control" type="text" id="<?php echo e($formId); ?>_location" name="preferred_location" maxlength="120">
            <div class="field-error" data-error-for="preferred_location"></div>
        </div>
        <div class="col-md-6">
            <label class="form-label" for="<?php echo e($formId); ?>_investment">Available Investment Range</label>
            <select class="form-select" id="<?php echo e($formId); ?>_investment" name="investment">
                <option value="">Select range</option>
                <?php foreach ($ranges as $range): ?>
                    <option value="<?php echo e($range); ?>"><?php echo e($range); ?></option>
                <?php endforeach; ?>
            </select>
            <p class="form-hint">Franchise investment and requirements are discussed during the enquiry process.</p>
            <div class="field-error" data-error-for="investment"></div>
        </div>
        <div class="col-md-6">
            <label class="form-label" for="<?php echo e($formId); ?>_property">Do you own a commercial property?</label>
            <select class="form-select" id="<?php echo e($formId); ?>_property" name="property">
                <option value="">Select</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
                <option value="Not sure">Not sure</option>
            </select>
            <div class="field-error" data-error-for="property"></div>
        </div>
        <div class="col-12">
            <label class="form-label" for="<?php echo e($formId); ?>_message">Message</label>
            <textarea class="form-control" id="<?php echo e($formId); ?>_message" name="message" rows="4" maxlength="1500"></textarea>
            <div class="field-error" data-error-for="message"></div>
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="<?php echo e($formId); ?>_consent" name="consent" value="1" required>
                <label class="form-check-label" for="<?php echo e($formId); ?>_consent">I agree to be contacted by Brisko Pizza regarding franchise opportunities. <span class="req">*</span></label>
            </div>
            <div class="field-error" data-error-for="consent"></div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary btn-cta btn-lg" type="submit">
                <span class="btn-text">Submit Franchise Enquiry</span>
                <i class="bi bi-arrow-right" aria-hidden="true"></i>
            </button>
            <div class="form-status" role="status" aria-live="polite"></div>
        </div>
    </div>
</form>
<div class="form-success" hidden>
    <div class="success-card">
        <div class="success-icon" aria-hidden="true"><i class="bi bi-check-lg"></i></div>
        <h3>Thank you for your interest in Brisko Pizza.</h3>
        <p>Our team will get in touch with you shortly.</p>
        <a class="btn btn-outline-light btn-cta" href="<?php echo e($whatsappHref); ?>" target="_blank" rel="noopener noreferrer">Chat on WhatsApp <i class="bi bi-whatsapp" aria-hidden="true"></i></a>
    </div>
</div>
