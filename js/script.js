$(document).ready(function() {
    // Add any custom JavaScript/jQuery functionality here

    // Example: Display an alert when a plugin is downloaded
    $('.btn-primary').click(function(event) {
        var pluginName = $(this).closest('.card-body').find('.card-title').text();
        alert('You are downloading: ' + pluginName);
    });
});