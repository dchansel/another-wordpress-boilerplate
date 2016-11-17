Another WordPress Boilerplate
=====================
My boilerplate is the combination/mashup of two wordpress projects :

* The Wordpress Boilerplate from https://github.com/Darep/wordpress-boilerplate
* The Multi Environnment Configuration from http://github.com/studio24/wordpress-multi-env-config.git

The 'Darep' WordPress Boilerplate is a simple starting point which includes WordPress as a submodule, the required configurations and a dummy plugin &amp; theme structure.
The 'Studio24' Multi Environnment Configuration supports multiple environments such as your local development copy, a test staging site, and the live production site.



## Installation

Clone the repository:

    git clone --recursive https://github.com/dchansel/another-wordpress-boilerplate.git

And remove this origin repository from your working copy:

    cd wordpress-boilerplate
    git remote rm origin

Add your new origin repository to your working copy:

    git remote add origin <url_here>


## Configuration
The wp-config folder content by default a set of differents environment configurations (test, staging and production)
There's two ways to switch beetween environments:

### By .htaccess file editing 
By editing the SetEnv WP_ENV parameter, you can change environment configuration loading.
    
    SetEnv WP_ENV test
    SetEnv WP_ENV staging
    SetEnv WP_ENV production

### By an automatic hostname detection :
A hostname's convention is used to detect which environment must be loading :
* hostname**.dev** load the development wp-config
* **staging**.hostname.tld load the staging wp-config
* in others cases, the production wp-config is load

_I'm not sure hostname with subdomain is completly worked (I must test that)_

## Others Configuration Stuffs
Dont't forget to change the Authentication Unique Keys and Salts in the wp-config.default.php, it's a security issue.

    define('AUTH_KEY',         'put your unique phrase here');
    define('SECURE_AUTH_KEY',  'put your unique phrase here');
    define('LOGGED_IN_KEY',    'put your unique phrase here');
    define('NONCE_KEY',        'put your unique phrase here');
    define('AUTH_SALT',        'put your unique phrase here');
    define('SECURE_AUTH_SALT', 'put your unique phrase here');
    define('LOGGED_IN_SALT',   'put your unique phrase here');
    define('NONCE_SALT',       'put your unique phrase here');

Just go to  
[https://api.wordpress.org/secret-key/1.1/salt/](https://api.wordpress.org/secret-key/1.1/salt/)
and copy and replace the output in wp-config.default.php.

## Adding others environments 
Others environments can be adding, just :
* Copy/Paste an existing wp-config.[environmentName].php to a new wp-config.[environmentName].php
* Add new case in wp-config.env.php or edit the SetEnv WP_ENV in .htaccess

## Upgrading Wordpress

After installing this boilerplate, keeping Wordpress up-to-date via git is
pretty easy.

Go to the submodule directory:

    cd wordpress

Fetch the tags from git:

    git fetch --tags

Checkout the version you want to upgrade to (e.g. `git checkout 4.6.1`):

    git checkout <tag>

Commit your Wordpress upgrade:

    cd ..
    git commit -m "Updating wordpress to <tag-name>"


## Thanks
Specials thanks to [Darep](https://github.com/Darep) and [studio24](http://github.com/studio24) for their works and their knowledge sharing about git submodules, htaccess env, ...  

## License

Licensed under the MIT license.
