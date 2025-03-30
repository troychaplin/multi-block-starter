/**
 * WordPress dependencies
 */
import { store, getContext } from '@wordpress/interactivity';

const { state } = store('interactivity', {
	state: {
		get themeText() {
			return state.isDark ? state.darkText : state.lightText;
		},
	},
	actions: {
		toggleOpen() {
			const context = getContext();
			context.isOpen = !context.isOpen;
		},
		toggleTheme() {
			state.isDark = !state.isDark;
		},
	},
	callbacks: {
		logIsOpen: () => {
			const { isOpen } = getContext();
			// eslint-disable-next-line no-console
			console.log(`Is open: ${isOpen}`);
		},
	},
});
