document.addEventListener("DOMContentLoaded", function() {
	/* ─────────────────────────────────────────────────────────────────────────────────────
	DROPDOWN MENU & SUB-MENUS
	*/
	var hamburgerIcon = document.querySelector(".navbar button[data-toggle='collapse']");
	var parentMainMenu = document.querySelector(".parentMainMenu");
	var parentMainMenuItems = parentMainMenu.querySelectorAll(".navbar-nav > *");
	var subMenuToggleButtons = document.querySelectorAll(".navbar a[data-toggle='dropdown']");
	var subMenus = document.querySelectorAll(".dropdown-menu");

	var toggleAttributesOnChildElements = function(action, attributeName, listOfElements) {
		listOfElements.forEach(function(el) {
			if (action === "set") {
				el.setAttribute(attributeName, true);
			}
			if (action === "remove") {
				el.removeAttribute(attributeName);
			}
		});
	};

	var toggleClassesOnChildElements = function(action, className, listOfElements) {
		listOfElements.forEach(function(el) {
			if (action === "add") {
				el.classList.add(className);
			}
			if (action === "remove") {
				el.classList.remove(className);
			}
		});
	};

	// Toggle .parentMainMenu if the hamburger icon has been clicked
	hamburgerIcon.addEventListener("click", function() {
		parentMainMenu.classList.toggle("parentMainMenu--show");
	});

	// Close parentMainMenu after clicking anywhere outside of it
	document.addEventListener("click", function(event) {
		if (!parentMainMenu.contains(event.target) && parentMainMenu.classList.contains("parentMainMenu--show") && !hamburgerIcon.contains(event.target)) {
			hamburgerIcon.click();
		}
	});

	// Close parentMainMenu when changing the browser's size
	window.addEventListener("resize", function() {
		if (parentMainMenu.classList.contains("parentMainMenu--show")) {
			hamburgerIcon.click();
		}
	});

	// Close all sub-menus while closing the main one (clicking on the hamburger Icon)
	hamburgerIcon.addEventListener("click", function() {
		if (!hamburgerIcon.classList.contains("collapsed")) {
			toggleAttributesOnChildElements("remove", "data-active", subMenuToggleButtons);
			toggleClassesOnChildElements("remove", "show", subMenus);
			toggleClassesOnChildElements("remove", "menu-item--show", parentMainMenuItems);
		} else {
			toggleClassesOnChildElements("add", "menu-item--show", parentMainMenuItems);
		}
	});

	// Open / Close each sub-menu after clicking on corresponding toggle button
	subMenuToggleButtons.forEach(function(subMenuToggleButton) {
		subMenuToggleButton.addEventListener("click", function(e) {
			e.stopPropagation();
			var parent = this.parentNode;
			var subMenuToggleButtonAllDescendants = parent.querySelectorAll("nav a[data-toggle='dropdown']");
			var subMenuDirectDescendant = parent.querySelector("ul");
			var subMenuAllDescendants = parent.querySelectorAll("ul");

			if (!this.getAttribute("data-active")) {
				this.setAttribute("data-active", true);
				subMenuDirectDescendant.classList.add("show");
			} else {
				toggleAttributesOnChildElements("remove", "data-active", subMenuToggleButtonAllDescendants);
				toggleClassesOnChildElements("remove", "show", subMenuAllDescendants);
			}
		});
	});

	// Close each sub-menu after clicking anywhere outside of it
	// Probably needs some refactoring...
	subMenus.forEach(function(subMenu) {
		document.addEventListener("click", function(event) {
			if (!subMenu.contains(event.target)) {
				subMenu.parentNode.querySelector("a").removeAttribute("data-active");
				subMenu.classList.remove("show");
				subMenu.style.left = null;
			}
		});
	});

	// Change the behavior of each sub-menu depending on its position
	// (if sub-menu will appear to close to the right edge of the browser's viewport)
	var checkBrowserViewportWidth = function() {
		return window.innerWidth;
	};

	var subMenuPositionHandler = function() {
		var subMenu = this.parentNode.querySelector(".dropdown-menu");
		var subMenuDimensions = subMenu.getBoundingClientRect();
		var subMenuPositionOfTheLeftEdge = subMenuDimensions.left;
		var subMenuWidth = subMenuDimensions.width;

		if (subMenuPositionOfTheLeftEdge + subMenuWidth >= checkBrowserViewportWidth()) {
			subMenu.style.left = "-100%";
		} else {
			subMenu.style.left = null;
		}
	};

	// Add subMenuPositionHandlers to each toggleButton
	subMenuToggleButtons.forEach(function(toggleButton) {
		toggleButton.addEventListener("click", subMenuPositionHandler);
	});

	/*
	DROPDOWN MENU & SUB-MENUS - END
	───────────────────────────────────────────────────────────────────────────────────── */
});
