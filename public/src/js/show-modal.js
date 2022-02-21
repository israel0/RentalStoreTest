(function (cash) {
    "use strict";

    if (cash("#programmatically-modal").length) {
        let modal = new bootstrap.Modal(cash("#programmatically-modal")[0]);

        // Show modal
        cash("#programmatically-show-modal").on("click", function () {
            modal.show();
        });

        // Hide modal
        cash("#programmatically-hide-modal").on("click", function () {
            modal.hide();
        });

        // Toggle modal
        cash("#programmatically-toggle-modal").on("click", function () {
            modal.toggle();
        });
    }
})(cash);
