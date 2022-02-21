(function (cash) {
    "use strict";

    if (cash("#programmatically-slide-over").length) {
        let slideover = new bootstrap.Offcanvas(
            cash("#programmatically-slide-over")[0]
        );

        // Show slideover
        cash("#programmatically-show-slide-over").on("click", function () {
            slideover.show();
        });

        // Hide slideover
        cash("#programmatically-hide-slide-over").on("click", function () {
            slideover.hide();
        });

        // Toggle slideover
        cash("#programmatically-toggle-slide-over").on("click", function () {
            slideover.toggle();
        });
    }
})(cash);
