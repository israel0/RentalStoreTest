(function (cash) {
    "use strict";

    cash(".dropdown").each(function () {
        let dropdown = cash(this)[0];
        let dropdownToggle = cash(this).find(".dropdown-toggle")[0];
        let dropdownMenu = cash(this).find(".dropdown-menu");

        dropdown.addEventListener("show.bs.dropdown", function () {
            let randId = "_" + Math.random().toString(36).substr(2, 9);

            // Set dropdown width
            cash(dropdown).css("position") == "static"
                ? cash(dropdown).css("position", "relative")
                : "";
            cash(dropdownMenu).attr(
                "style",
                `width: ${cash(dropdownMenu).css("width")} !important;`
            );

            cash(dropdown).attr("data-uid", randId);
            cash(
                '<span data-dropdown-replacer="' + randId + '"></span>'
            ).insertAfter(dropdownMenu);
            cash(dropdownMenu).attr("data-uid", randId).appendTo("body");

            // Check if dropdown is used inside modal
            cash(".modal.show, .offcanvas.show").each(function () {
                if (
                    cash(this).find('[data-dropdown-replacer="' + randId + '"]')
                ) {
                    cash(dropdownMenu).css(
                        "z-index",
                        cash(this).css("z-index")
                    );
                }
            });
        });

        dropdown.addEventListener("hide.bs.dropdown", function (event) {
            event.preventDefault();
            closeDropdown(dropdown, dropdownToggle, dropdownMenu);
        });

        cash(dropdown)
            .find('[data-bs-dismiss="dropdown"]')
            .on("click", function () {
                closeDropdown(dropdown, dropdownToggle, dropdownMenu);
            });
    });

    async function closeDropdown(dropdown, dropdownToggle, dropdownMenu) {
        // Animate dropdown
        cash(dropdownMenu).removeClass("show");

        await setTimeout(() => {
            let randId = cash(dropdown).attr("data-uid");

            // Move dropdown element to body
            cash('[data-dropdown-replacer="' + randId + '"]').replaceWith(
                dropdownMenu
            );

            // Reset attribute
            cash(dropdownToggle)
                .removeClass("show")
                .attr("aria-expanded", dropdown);
            cash(dropdownMenu)
                .removeAttr("style")
                .removeAttr("data-popper-placement");
        }, 200);
    }
})(cash);
