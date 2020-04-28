function getNotification(user, src) {
    $.get(
        "init.php",
        "type=notif&user=" + user + "&src=" + src,
        function (data, status, xhr) {
            $("div#notifications ul.collapsible").html(data);
        },
        "html"
    );
}

function dselNotification(ref, user, src) {
    $.get(
        "init.php",
        "type=dnotif&ref=" + ref + "&user=" + user + "&src=" + src,
        function (data, status, xhr) {
            $("div#notifications ul.collapsible").html(data);
        },
        "html"
    );
}


//Request Pages Programmatically
function getPage(src, title) {

    $.get(src, "page=" + title, function (data, status, xhr) {
        if (data === "Logging Out") {
            //If it's a logout command, then Log out.
            window.location.replace("/members/logout.php?last_addr_before_logout=" + window.location.href);
        } else {
            //Otherwise, display the form in the Pop-Up page
            $("#page-req>.modal-content").html(data);
            //$("#nav-mobile").sidenav("close");
            $("#page-req").modal('open');
        }
    });
}