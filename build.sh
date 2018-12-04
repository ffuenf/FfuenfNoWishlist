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
( find ./FfuenfNoWishlist -type d -name ".git" && find ./FfuenfNoWishlist -name ".gitignore" && find ./FfuenfNoWishlist -name ".gitmodules" ) | xargs rm -r
zip -r FfuenfNoWishlist-${commit}.zip FfuenfNoWishlist