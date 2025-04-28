// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files trigger a rebuild.
		'./theme/**/*.php',
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {
			spacing: {
				'3xs-2xs': 'clamp(0.25rem, 0.163rem + 0.4348vw, 0.5rem)',
				'2xs-xs': 'clamp(0.5rem, 0.413rem + 0.4348vw, 0.75rem)',
				'xs-s': 'clamp(0.75rem, 0.663rem + 0.4348vw, 1rem)',
				's-m': 'clamp(1rem, 0.8261rem + 0.8696vw, 1.5rem)',
				'm-l': 'clamp(1.5rem, 1.3261rem + 0.8696vw, 2rem)',
				'l-xl': 'clamp(2rem, 1.6522rem + 1.7391vw, 3rem)',
				'xl-2xl': 'clamp(3rem, 2.6522rem + 1.7391vw, 4rem)',
				'2xl-3xl': 'clamp(4rem, 3.3043rem + 3.4783vw, 6rem)',
				's-l': 'clamp(1rem, 0.6522rem + 1.7391vw, 2rem)',
			},
			fontFamily: {
				display: [
					'display',
					'Segoe UI',
					'Roboto',
					'Helvetica',
					'Arial',
					'sans-serif',
					'Apple Color Emoji',
					'Segoe UI Emoji',
					'Segoe UI Symbol',
				],
				body: [
					'body',
					'Segoe UI',
					'Roboto',
					'Helvetica',
					'Arial',
					'sans-serif',
					'Apple Color Emoji',
					'Segoe UI Emoji',
					'Segoe UI Symbol',
				],
			},
		},
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Add Animations with Rombo
		require('tailwindcss-motion'),
		require('tailwindcss-intersect'), 
		// Add Tailwind Typography (via _tw fork).
		require('@_tw/typography'),

		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson'),

		// Uncomment below to add additional first-party Tailwind plugins.
		require('@tailwindcss/forms'),
		// require('@tailwindcss/aspect-ratio'),
		// require('@tailwindcss/container-queries'),
	],
};
