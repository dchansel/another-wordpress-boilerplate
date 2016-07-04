WordPress Boilerplate
=====================
My boilerplate is the combination of two wordpress projects :

* The Wordpress Boilerplate from https://github.com/Darep/wordpress-boilerplate
* The Multi Environnment Configuration from http://github.com/studio24/wordpress-multi-env-config.git

The 'Darep' WordPress Boilerplate is a simple starting point which includes WordPress as a submodule, the required configurations and a dummy plugin &amp; theme structure.
The 'Studio24' Multi Environnment Configuration supports multiple environments such as your local development copy, a test staging site, and the live production site. 



## Installation

Clone the repository:

    git clone --recursive https://dchansel@bitbucket.org/agence_distill/wordpress-boilerplate.git

And remove this origin repository from your working copy:

    cd wordpress-boilerplate
    git remote rm origin

Add your new origin repository to your working copy:

    git remote add origin <url_here>


## Configuration


## Upgrading Wordpress

After installing this boilerplate, keeping Wordpress up-to-date via git is
pretty easy.

Go to the submodule directory:

    cd wordpress

Fetch the tags from git:

    git fetch --tags

Checkout the version you want to upgrade to (e.g. `git checkout 3.7.1`):

    git checkout <tag>

Commit your Wordpress upgrade:

    cd ..
    git commit -m "Updating wordpress to <tag-name>"




## Contributing

Contributions are most welcome! And well-tested and documented contributions are
more welcome than others ;)

1. [Fork the repository][fork]
2. [Create a branch][branch] (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. [Create a pull request][pr]

## License

Licensed under the MIT license.

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

[fork]: http://help.github.com/fork-a-repo/
[branch]: http://learn.github.com/p/branching.html
[pr]: http://help.github.com/send-pull-requests/