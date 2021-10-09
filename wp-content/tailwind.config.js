module.exports = {
	mode: 'jit',
	purge: {
		preserveHtmlElements: true,
		enabled: true,
		content: [
			"./themes/wp-dev-ready/index.php",
			"./themes/wp-dev-ready/header.php",
			"./themes/wp-dev-ready/functions.php",
			"./themes/wp-dev-ready/404.php",
			"./themes/wp-dev-ready/archive.php",
			"./themes/wp-dev-ready/footer.php",
			"./themes/wp-dev-ready/single.php",
			"./themes/wp-dev-ready/page.php",
			"./themes/wp-dev-ready/components/*.php",
			"./themes/wp-dev-ready/components/*/*.php",
			"./themes/wp-dev-ready/components/*/*/*.php"
		],
	},
	theme: {
		colors: {

		},		
		screens: {
			xxxs: "330px",
			xxs: "400px",
			xs: "560px",
			sm: "640px",
			md: "768px",
			lg: "1024px",
			xl: "1280px",
			"2xl": "1600px",
			"3xl": "1920px",
		},
		extend: {			
		},
	},
	variants: {
	},
	plugins: [
		require("@tailwindcss/typography"), require("@tailwindcss/forms"),
		require('@tailwindcss/aspect-ratio'),
	],
};
