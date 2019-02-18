#!/usr/bin/env bash

commit=$1
if [ -z ${commit} ]; then
    commit=$(git tag --sort=-creatordate | head -1)
    if [ -z ${commit} ]; then
        commit="master";
    fi
fi

# Remove old release
rm -rf FfuenfNoWishlist FfuenfNoWishlist-*.zip

# Build new release
mkdir -p FfuenfNoWishlist
git archive ${commit} | tar -x -C FfuenfNoWishlist
composer install --no-dev -n -o -d FfuenfNoWishlist
( find ./FfuenfNoWishlist -type d -name ".git" && find ./FfuenfNoWishlist -name ".gitignore" && find ./FfuenfNoWishlist -name ".gitmodules" && find ./FfuenfNoWishlist -name ".php_cs.dist" && find ./FfuenfNoWishlist -name "phpspec.yml" && find ./FfuenfNoWishlist -name ".travis.yml" && find ./FfuenfNoWishlist -name "build.sh" && find ./FfuenfNoWishlist -name "phpunit.xml.dist" && find ./FfuenfNoWishlist -name "tests" && find ./FfuenfNoWishlist -name "vendor" && find ./FfuenfNoWishlist -name "composer.lock" ) | xargs rm -r
zip -r FfuenfNoWishlist-${commit}.zip FfuenfNoWishlist