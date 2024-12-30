dev/tailwind:
	 npx tailwindcss -i ./style.css -o ./public/assets/css/main.css --watch

dev/serve:
	debug=1 && php -S 0.0.0.0:8001 -t public

dev:
	make -j2 dev/tailwind dev/serve
