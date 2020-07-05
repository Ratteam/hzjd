/**
 * demo.js
 * http://www.jq22.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2017, jq22
 * http://www.jq22.com
 */
{
	setTimeout(() => document.body.classList.add('render'), 60);
	const navdemos = document.querySelectorAll('nav.demos > .demo');
	Array.from(navdemos).forEach(link => link.addEventListener('click', (ev) => {
		ev.preventDefault();
		document.body.classList.remove('render');
		document.body.addEventListener('transitionend', () => window.location = ev.target.href);
	}));
}
