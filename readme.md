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

Simple PHP Server

    php -S localhost:8000 -t public/
