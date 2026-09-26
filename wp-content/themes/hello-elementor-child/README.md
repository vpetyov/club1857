# Hello Elementor child theme

The source for `assets/css/club1857.css` is `assets/scss/club1857.scss`.
The compiled CSS is loaded by `functions.php`. Run these commands from this
theme directory. They require the Dart Sass CLI (`sass`) on your path.

Watch the SCSS file and rebuild the CSS when it changes:

```sh
sass --watch wp-content/themes/hello-elementor-child/assets/scss/club1857.scss:wp-content/themes/hello-elementor-child/assets/css/club1857.css
```

Build optimized CSS for use on the site:

```sh
sass wp-content/themes/hello-elementor-child/assets/scss/club1857.scss:wp-content/themes/hello-elementor-child/assets/css/club1857.css --style=compressed
```

Run the optimized build after stopping the watcher to keep the generated file compressed.
