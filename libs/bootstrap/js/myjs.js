function htmlbodyHeightUpdate() {
    var height3 = $(window).height()
    var height1 = $('.nav').height() + 50
    height2 = $('.main').height()
    if (height2 > height3) {
        $('html').height(Math.max(height1, height3, height2) + 10);
        $('body').height(Math.max(height1, height3, height2) + 10);
    } else
    {
        $('html').height(Math.max(height1, height3, height2));
        $('body').height(Math.max(height1, height3, height2));
    }
}


$(document).ready(function () {
    htmlbodyHeightUpdate()
    $(window).resize(function () {
        htmlbodyHeightUpdate()
    });
    $(window).scroll(function () {
        height2 = $('.main').height()
        htmlbodyHeightUpdate()
    });


    // ======SALES/add more inputs START=====
    $(".add-more").click(function () {
        var html = $(".copy").html();
        $(".hide").after(html);
    });


    $("body").on("click", ".remove", function () {
        $(this).parents(".control-group").remove();
    });

    // ======SALES/add more inputs END=====


    // ======Show tooltip user Profile=====
    $('[data-toggle="tooltip"]').tooltip();


    $(".dropdown-menu li a").click(function () {
        document.getElementById("admin_cal_list").innerHTML = $(".dropdown-toggle").attr("id") + " " + $(".dropdown-toggle").attr("value");
    });


    //alert("Hello! I am an alert box!!");




    //Form Validation
    var request;

// Bind to the submit event of our form
    $("#registerform").submit(function (event) {

        // Prevent default posting of form - put here to work in case of errors
        event.preventDefault();

        // Abort any pending request
        if (request) {
            request.abort();
        }
        // setup some local variables
        var $form = $(this);

        // Let's select and cache all the fields
        var $inputs = $form.find("input, select, button, textarea");

        // Serialize the data in the form
        var serializedData = $form.serialize();

        // Let's disable the inputs for the duration of the Ajax request.
        // Note: we disable elements AFTER the form data has been serialized.
        // Disabled form elements will not be serialized.
        $inputs.prop("disabled", true);
        $('#responsemsg').html('LOADING...');
        // Fire off the request to /form.php
        request = $.ajax({
            url: "/register/registeruser",
            type: "post",
            data: serializedData
        });

        // Callback handler that will be called on success
        request.done(function (response, textStatus, jqXHR) {
            // Log a message to the console
            $('#responsemsg').html(response);
        });

        // Callback handler that will be called on failure
        request.fail(function (jqXHR, textStatus, errorThrown) {
            // Log the error to the console
            console.error(
                    "The following error occurred: " +
                    textStatus, errorThrown
                    );
        });

        // Callback handler that will be called regardless
        // if the request failed or succeeded
        request.always(function () {
            // Reenable the inputs
            $inputs.prop("disabled", false);
        });

    });
    //END Form Validation
    getalldata();

});



var request;
function getalldata() {
    if (request) {
        request.abort();
    }

    // Let's disable the inputs for the duration of the Ajax request.
    // Note: we disable elements AFTER the form data has been serialized.
    // Disabled form elements will not be serialized.

    // Fire off the request to /form.php
    request = $.ajax({
        url: "/stockbalance/getallimages",
        type: "post"

    });

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR) {
        // Log a message to the console
        var allImages = $.parseJSON(response);
        allImages.forEach(function (element) {

            $('#stockimg').append('<div class="main_row"> <a href="#"><img src="'+ element.img +'" class="mat_image"></a><hr><div class="mat_name"><p>' + element.name + '</p></div><div class="another"><p>Available:</p></div></div>')



        });
    });

    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown) {
        // Log the error to the console
        console.error(
                "The following error occurred: " +
                textStatus, errorThrown
                );
    });



}






