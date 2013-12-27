# Snappy FAQ

This is a base setup for creating Snappy faq themes.


## Changes from original faq templates

* New top header and sidebar.
* The topics list changed from a table to a [block grid](http://foundation.zurb.com/docs/components/block_grid.html).
* The base themes use Zurb Foundation.

## Dev Setup Notes

This projects uses grunt and sass to compile the assets.

    npm install
    bower install
    grunt serve

Foundation icons have an open bug report that has to be manually adjusted in the bower_components. Remove the $fi-path path
in _foundation_icons.scss so it looks like this:

    font-family: "foundation-icons";

Simple PHP Server

    php -S localhost:8000 -t public/
