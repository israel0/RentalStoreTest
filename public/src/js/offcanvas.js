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
        cash(".offcanvas").each(function () {
            if (cash(this).css("z-index") > zIndex) {
                zIndex = parseInt(cash(this).css("z-index"));
            }
        });

        return zIndex;
    }

    cash(".offcanvas").each(function () {
        let offcanvas = cash(this)[0];
        let offcanvasToggle = cash(
            '[data-bs-target="#' + cash(offcanvas).attr("id") + '"]'
        )[0];
        offcanvasToggle =
            offcanvasToggle === undefined
                ? cash('[href="#' + cash(offcanvas).attr("id") + '"]')[0]
                : offcanvasToggle;

        offcanvas.addEventListener("show.bs.offcanvas", function (event) {
            if (cash(offcanvas).attr("aria-modal") == undefined) {
                // Move element to outer "body" element
                let randId = "_" + Math.random().toString(36).substr(2, 9);
                cash(offcanvas).attr("data-uid", randId);
                cash(
                    '<span data-offcanvas-replacer="' + randId + '"></span>'
                ).insertAfter(offcanvas);
                cash(offcanvas).attr("data-uid", randId).appendTo("body");

                // Configure offcanvas & offcanvas backdrop z-index to fix overlapping offcanvas issue
                waitForEl(
                    ".offcanvas-backdrop:not([data-offcanvas-uid])",
                    () => {
                        let highestZindex = getHighestZindex() + 2;
                        cash(offcanvas).css("z-index", highestZindex);
                        cash(".offcanvas-backdrop:not([data-offcanvas-uid])")
                            .css("z-index", highestZindex - 1)
                            .attr("data-offcanvas-uid", randId)
                            .appendTo("body");

                        setTimeout(() => {
                            cash(
                                "[data-offcanvas-uid='" + randId + "']"
                            ).addClass("show-backdrop");
                        });
                    }
                );
            }
        });

        offcanvas.addEventListener("hide.bs.offcanvas", async function () {
            // Reset backdrop state
            let randId = cash(offcanvas).attr("data-uid");
            cash('[data-offcanvas-uid="' + randId + '"]')
                .removeAttr("data-offcanvas-uid")
                .removeClass("show-backdrop");
        });

        offcanvas.addEventListener("hidden.bs.offcanvas", async function () {
            // Move back element when hidden
            let randId = cash(offcanvas).attr("data-uid");
            cash('[data-offcanvas-replacer="' + randId + '"]').replaceWith(
                offcanvas
            );

            // Reset offcanvas state
            cash('[data-uid="' + randId + '"]').removeAttr("style");
        });
    });
})(cash);
