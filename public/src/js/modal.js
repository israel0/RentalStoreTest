(function (cash) {
    "use strict";

    // Wait for element to be loaded
    let waitForEl = function (selector, callback) {
        if (cash(selector).length) {
            callback();
        } else {
            setTimeout(function () {
                waitForEl(selector, callback);
            }, 100);
        }
    };

    // Get highest z-index
    function getHighestZindex() {
        let zIndex = 0;
        cash(".modal").each(function () {
            if (cash(this).css("z-index") > zIndex) {
                zIndex = parseInt(cash(this).css("z-index"));
            }
        });

        return zIndex;
    }

    cash(".modal").each(function () {
        let modal = cash(this)[0];
        let modalToggle = cash(
            '[data-bs-target="#' + cash(modal).attr("id") + '"]'
        )[0];

        modal.addEventListener("show.bs.modal", function (event) {
            if (cash(modal).attr("aria-modal") == undefined) {
                // Move element to outer "body" element
                let randId = "_" + Math.random().toString(36).substr(2, 9);
                cash(modal).attr("data-uid", randId);
                cash(
                    '<span data-modal-replacer="' + randId + '"></span>'
                ).insertAfter(modal);
                cash(modal).attr("data-uid", randId).appendTo("body");

                // Configure modal & modal backdrop z-index to fix overlapping modal issue
                waitForEl(".modal-backdrop:not([data-modal-uid])", () => {
                    let highestZindex = getHighestZindex() + 2;
                    cash(modal).css("z-index", highestZindex);
                    cash(".modal-backdrop:not([data-modal-uid])")
                        .css("z-index", highestZindex - 1)
                        .attr("data-modal-uid", randId);
                });
            }
        });

        modal.addEventListener("hide.bs.modal", async function () {
            // Reset backdrop state
            let randId = cash(modal).attr("data-uid");
            cash('[data-modal-uid="' + randId + '"]').removeAttr(
                "data-modal-uid"
            );
        });

        modal.addEventListener("hidden.bs.modal", async function () {
            // Move back element when hidden
            let randId = cash(modal).attr("data-uid");
            cash('[data-modal-replacer="' + randId + '"]').replaceWith(modal);

            // Reset modal state
            cash('[data-uid="' + randId + '"]').removeAttr("style");
        });
    });
})(cash);
