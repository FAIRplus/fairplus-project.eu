/**
 *
 * Make the site search and main navigation responsive in the ELIXIR theme.
 * At small screen sizes, the main menu and search boxes are replaced by buttons.
 * The buttons toggle the visibility of the menu and the search box.
 *
 * NOTE: You don't need Javascript to do this. If you prefer, you can do it in pure CSS
 * e.g. http://www.outofscope.com/css-only-menu-toggle-no-javascript-required/
 * (read the comments at the end of the article, too).
 *
 * @author Martin Cook (martin.cook@elixir-europe.org)
 *
 */

window.addEventListener("load", responsiveMenu, false);

function responsiveMenu() {

    "use strict";

    /** Assign variables */
		var header = document.getElementById("main-header");
		var mainNav = document.getElementById("main-nav");

		/** Add the "hidden" class, so the elements become invisible. */
		function addHiddenClass() {
				mainNav.classList.add("hidden");
		}

		/** Remove the "hidden" class, so the elements become visible. */
		function removeHiddenClass() {
				mainNav.classList.remove("hidden");
		}

		/**
		 * React to clicks/taps on the mobile navbar in the header.
		 * (Toggles the visibility of the main nav.)
		 * @param e (event object)
		 */
		function processClick(e) {
				if (e.target !== e.currentTarget) {
						var clickedItem = e.target.id;
						if (clickedItem === "show-nav") {
								mainNav.classList.toggle("hidden");
                this.classList.toggle("open");
						}
				}
				e.stopPropagation();
		}

		/** Add the "hidden" class and an event listener for small screen sizes. */
		if (window.innerWidth < 1024) {
				header.addEventListener("click", processClick, false);
				addHiddenClass();
		} else {
				header.removeEventListener("click", processClick, false);
				removeHiddenClass();
		}

		/**
		 * Change the visibility of the search form and main nav when people resize their window.
		 * Add the event listener for small screens.
		 */
		window.addEventListener("resize", function() {
				if (window.innerWidth < 1024) {
						header.addEventListener("click", processClick, false);
						addHiddenClass();
				} else {
						header.removeEventListener("click", processClick, false);
						removeHiddenClass();
				}
		});

}
