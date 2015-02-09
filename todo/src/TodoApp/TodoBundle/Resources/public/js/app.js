$(document).ready(function() {
    $('.datepicker').pickadate();

    var notification = $('#notifications');
    if (notification.text().length > 0) {
        toast(notification.html(), 6000, 'green accent-3 black-text');
    }

    $('.dropdown-activator').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrain_width: false,
            hover: false,
            alignment: 'left',
            gutter: 0
        }
    );
});
