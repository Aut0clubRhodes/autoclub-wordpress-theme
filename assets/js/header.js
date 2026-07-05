document.addEventListener('DOMContentLoaded', function () {
	var toggle = document.querySelector('.autoclub-header__toggle');
	var navigation = document.querySelector('.autoclub-header__navigation');
	var submenuParent = document.querySelector('.autoclub-header__has-submenu');
	var submenuToggle = document.querySelector('.autoclub-header__submenu-toggle');
	var languageParents = document.querySelectorAll('.autoclub-header__language');

	if (!toggle || !navigation) {
		return;
	}

	function closeNavigation() {
		toggle.setAttribute('aria-expanded', 'false');
		navigation.classList.remove('is-open');
		closeSubmenu();
		closeLanguageMenu();
	}

	function closeSubmenu() {
		if (!submenuParent || !submenuToggle) {
			return;
		}

		submenuToggle.setAttribute('aria-expanded', 'false');
		submenuParent.classList.remove('is-submenu-open');
	}

	function closeLanguageMenu() {
		languageParents.forEach(function (languageParent) {
			var languageToggle = languageParent.querySelector('.autoclub-header__language-toggle');

			if (!languageToggle) {
				return;
			}

			languageToggle.setAttribute('aria-expanded', 'false');
			languageParent.classList.remove('is-language-open');
		});
	}

	toggle.addEventListener('click', function () {
		var isOpen = toggle.getAttribute('aria-expanded') === 'true';

		toggle.setAttribute('aria-expanded', String(!isOpen));
		navigation.classList.toggle('is-open', !isOpen);
	});

	if (submenuParent && submenuToggle) {
		submenuToggle.addEventListener('click', function () {
			var isOpen = submenuToggle.getAttribute('aria-expanded') === 'true';

			closeLanguageMenu();
			submenuToggle.setAttribute('aria-expanded', String(!isOpen));
			submenuParent.classList.toggle('is-submenu-open', !isOpen);
		});
	}

	languageParents.forEach(function (languageParent) {
		var languageToggle = languageParent.querySelector('.autoclub-header__language-toggle');

		if (!languageToggle) {
			return;
		}

		languageToggle.addEventListener('click', function () {
			var isOpen = languageToggle.getAttribute('aria-expanded') === 'true';

			closeSubmenu();
			closeLanguageMenu();
			languageToggle.setAttribute('aria-expanded', String(!isOpen));
			languageParent.classList.toggle('is-language-open', !isOpen);
		});
	});

	navigation.addEventListener('click', function (event) {
		if (event.target.closest('a')) {
			closeNavigation();
		}
	});

	document.addEventListener('keydown', function (event) {
		if (event.key === 'Escape') {
			closeNavigation();
			toggle.focus();
		}
	});

	window.addEventListener('resize', function () {
		if (window.innerWidth > 921) {
			closeNavigation();
		}
	});
});
