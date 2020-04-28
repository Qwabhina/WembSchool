$(function () {
    var full_name = $("main").attr("data-user");
    $.get(
        "/members/dashboard/get-user-details.php",
        "user=" + full_name,
        function (data, status, xhr) {
            if (data.type = "empty") {
                $("h5.t").text(data.content);
            } else {
                $(".modal-content h5.t").text(data.name);
                $(".modal-content div.user-data p.uname").text(data.phone_number);
                $(".modal-content div.user-data p.uemail").text(data.user_email);
                $(".modal-content div.user-data p.date_r").text(data.date_registered);
            }
            //console.log(data);
        },
        "json"
    );
});
