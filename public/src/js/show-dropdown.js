(function (cash) {
    "use strict";

    if (cash("#programmatically-dropdown").length) {
        let dropdown = new bootstrap.Dropdown(
            cash("#programmatically-dropdown")[0]
        );

        // Show dropdown
        cash("#programmatically-show-dropdown").on("click", function () {
            dropdown.show();
        });

        // Hide dropdown
        cash("#programmatically-hide-dropdown").on("click", function () {
            dropdown.hide();
        });

        // Toggle dropdown
        cash("#programmatically-toggle-dropdown").on("click", function () {
            dropdown.toggle();
        });
    }
})(cash);
