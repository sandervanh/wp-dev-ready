# WP dev ready

<!-- An application for configuring and order custom transfers. -->

<!-- 
## Installation

#### Clone the repo locally:

```sh
git clone https://github.com/Shazzoo/transfer-manager.git transfermanager
cd transfermanager
```

#### Install PHP dependencies:

```sh
composer install
```

### Install Inkscape for image manipulation

**Ubuntu Linux New Stable Versions**

``` sh
sudo add-apt-repository universe
sudo add-apt-repository ppa:inkscape.dev/stable
sudo apt-get update
sudo apt install inkscape
```

**MacOS with Homebrew (Homebrew required)**

``` sh
brew install --cask inkscape
```

**Windows :(**

You can find the installer on the [download page](https://inkscape.org/release/inkscape-1.1/). Normally you want to choose "64-bit architecture" and "MSI package". Installing should be an easy step-by-step (next-next-finish) process.

### Install NPM dependencies:

```sh
npm ci
```

### Setup configuration:

```sh
cp .env.example .env
```

Generate application key:

```sh
php artisan key:generate
```

Create an mysql database. You can also use another database (MySQL, Postgres), simply update your ```.env``` configuration accordingly.

### Build assets and watch for changes:

```sh
npm run watch
```

#### Configure the correct path to your Inkscape binary

Set the correct Inkscape path in your newly created .env file:

**for MacOS after install, first run**

```sh
ln -s /Applications/Inkscape.app/Contents/MacOS/inkscape \
      /usr/local/bin/inkscape
```

**then in your .env:**

``` sh
INKSCAPE_PATH=/usr/local/bin
```

**for Windows**

Please supplement ...

### Run database migrations:

```sh
php artisan migrate
```

Run database seeder:

```sh
php artisan db:seed
```

### Run your dev server

Run a dev server of your choice. I would highly recommend Laravel Valet.

* MacOS see: [Laravel Valet](https://laravel.com/docs/8.x/valet)
* Windows see: MacOS see: [Valet for Windows](https://github.com/cretueusebiu/valet-windows)

And you're ready to go! -->