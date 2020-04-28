$(function () {
    $('select').formSelect();
});

var $loginForm = $("form#login-form");

//Login
$("button[name=btn_login]").click(function (e) {
    e.preventDefault();

    if ($("input#username").val() != "" || $("input#password").val() != "") {
        log_user_in();
    }
});

//Dismiss Error Message
function closeError() {
    $('div.error').slideUp(350);
}

//Show Progress Bar
function progressBar() {
    $("div.progress").fadeToggle(0);
}

//Login Form Submission
function log_user_in() {
    var data = $loginForm.serialize();

    $.ajax({
        type: "POST",
        url: '/members/login/process_login.php',
        dataType: "json",
        data: data + "&btn_login",
        beforeSend: function () {
            //Disable the form to prevent multiple clicks
            $("button[type=submit]").prop("disabled", true);
            //Scroll to the top of the form, where the response will appear
            $("html, body").animate({
                scrollTop: $loginForm.offset().top - 100
            }, 'fast');
            closeError();
            progressBar();
        },
        success: function (response) {
            //Scroll to the top of the form
            if (response.type === "success") {
                window.location.replace("/members/dashboard?page=dashboard");
            } else {
                //Hide the progress bar
                progressBar();
                //Re-Enable the Button
                $("button[type=submit]").prop("disabled", false);
                //Display the error response from the AJAX request
                $("div.error").html("<p>" + response.content + '</p><button type="button" onclick="closeError()" class="btn center white red-text text-darken-2">Dismiss</button>').slideDown(250);
            }
        },
        error: function (jXHR, textStatus, errorThrown) {
            progressBar();
            $("button[type=submit]").prop("disabled", false);

            $("div.error").html("<p>" + errorThrown + '</p><button type="button" onclick="closeError()" class="btn center white red-text text-darken-2">Dismiss</button>').slideDown(250);

            console.log("(" + textStatus + ") " + errorThrown);
        }
    });
}