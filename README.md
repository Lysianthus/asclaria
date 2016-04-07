# Asclaria

Asclaria is Lysianthus's umbrella network.

> Asclaria is Lysianthus’s umbrella network. All of her personal websites, cliques, fanlistings, fansites, shrines, tributes, and miscellaneous projects are under this umbrella.

[Live](https://asclaria.org)

## Environment

### Server

* Apache 2.2+
* PHP 5.6+
* MySQL 5.5+

Enable Apache `rewrite_module`.

### Local

* Node.js 4.2+
* npm 3.3+
* Sass 3.4+

## Compilation

1. While editing, compile Sass files by running `sass-watch scss:css` in `src` on the command line to see changes immediately on the browser.
```
$ cd src
$ sass-watch scss:css
$ cd ..
```
2. Compile via [Packager](https://github.com/Lysianthus/packager). Files will be located in the `dist` folder.