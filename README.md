<a href="http://www.ffuenf.de" title="ffuenf - code • design • e-commerce"><img src="https://github.com/ffuenf/Ffuenf_Common/blob/master/skin/adminhtml/default/default/ffuenf/ffuenf.png" alt="ffuenf - code • design • e-commerce" /></a>

FfuenfNoWishlist
================
[![GitHub tag](https://img.shields.io/github/tag/ffuenf/FfuenfNoWishlist.svg)](https://github.com/ffuenf/FfuenfNoWishlist)
[![Build Status](https://img.shields.io/travis/ffuenf/FfuenfNoWishlist.svg)](https://travis-ci.org/ffuenf/FfuenfNoWishlist)
[![Code Quality](https://scrutinizer-ci.com/g/ffuenf/FfuenfNoWishlist/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/ffuenf/FfuenfNoWishlist/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/ffuenf/FfuenfNoWishlist/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/ffuenf/FfuenfNoWishlist/?branch=master)
[![PayPal Donate](https://img.shields.io/badge/paypal-donate-blue.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=J2PQS2WLT2Y8W&item_name=Shopware%20Extension%3a%20FfuenfNoWishlist&item_number=FfuenfNoWishlist&currency_code=EUR)

This is a extension for [Shopware](https://de.shopware.com/) that removes the wishlist functionality in the frontend.

Platform
--------

The following versions are supported and tested:

* Shopware 5.5.x

Other versions are assumed to work.

Requirements
------------

|                                                                              | PHP 7.0           | PHP 7.1           | PHP 7.2           |
| ---------------------------------------------------------------------------- | ----------------- | ----------------- | ----------------- |
| [EOL](https://secure.php.net/supported-versions.php) / SEC-FIX / STABLE / RC | EOL               | SEC-FIX           | **STABLE**        |
| automated tests on [travis]                                                  | **required pass** | **required pass** | **required pass** |

Shopware [officially supports PHP 5.6.4 and higher](https://community.shopware.com/Systemanforderungen_detail_1840.html#Server).

Installation
------------

via zip:

* Download the [latest plugin version](https://github.com/Ffuenf/FfuenfNoWishlist/releases/latest/) (e.g. `FfuenfNoWishlist-1.0.0.zip`)
* Upload and install the plugin using the Plugin-Manager

via git:

* Checkout the plugin in `/custom/plugins/FfuenfNoWishlist`
* Change to directory and run `composer install` to install the dependencies
* Install the plugin with the Plugin-Manager

via composer:

* Change to your root installation of shopware
* Run command `composer require ffuenf/shopware-nowishlist` and install/active the plugin in the Plugin-Manager

Development
-----------
1. Fork the repository from GitHub.
2. Clone your fork to your local machine:

        $ git clone https://github.com/USER/FfuenfNoWishlist

3. Create a git branch

        $ git checkout -b my_bug_fix

4. Make your changes/patches/fixes, committing appropriately
5. Push your changes to GitHub
6. Open a Pull Request

License and Author
------------------

- Author:: Achim Rosenhagen (<a.rosenhagen@ffuenf.de>)
- Copyright:: 2019, ffuenf

The MIT License (MIT)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.