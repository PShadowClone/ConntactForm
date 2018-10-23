const form = $('#contact-form') // form reference

/**
 *
 * make form validation before submission
 */
$(document).ready(function () {
    validation();
})

/**
 * handel validation logic
 * @returns {void | boolean | ActiveX.IXMLDOMParseError}
 */
function validation() {
    return form.validate({
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            subject: {
                required: true,
            },
            message: {
                required: true
            }
        }
    })
}

