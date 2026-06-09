<?php
/**
 * Calmara front page — serves si-calmara-source thera.html as homepage.
 *
 * Static HTML clone lives in: wp-content/themes/calmara/assets/calmara-clone/
 * This template reads site/products/thera.html and rewrites relative asset
 * paths so they resolve to the theme asset directory.
 *
 * @package calmara
 */

$clone_dir   = get_template_directory()     . '/assets/calmara-clone';
$clone_uri   = get_template_directory_uri() . '/assets/calmara-clone';
$source_file = $clone_dir . '/site/products/thera.html';

if ( ! file_exists( $source_file ) ) {
    status_header( 500 );
    echo 'Clone source missing: ' . esc_html( $source_file );
    exit;
}

$html = file_get_contents( $source_file );

// Asset path rewrites.
// Source HTML lives at site/products/thera.html and references:
//   ../../cdn-assets/...   -> {clone}/cdn-assets/...
//   ../cdn/...             -> {clone}/site/cdn/...
//   ../checkouts/...       -> {clone}/site/checkouts/...
//   thera-back.html, thera-wrap.html, thera.oembed -> {clone}/site/products/...
$replacements = array(
    '../../cdn-assets/'  => $clone_uri . '/cdn-assets/',
    '../../fonts-google/'=> $clone_uri . '/fonts-google/',
    '../../fonts-static/'=> $clone_uri . '/fonts-static/',
    '../cdn/'            => $clone_uri . '/site/cdn/',
    '../checkouts/'      => $clone_uri . '/site/checkouts/',
    'href="thera.html'   => 'href="' . esc_url( home_url( '/' ) ),
    'href="thera-back.html' => 'href="' . $clone_uri . '/site/products/thera-back.html',
    'href="thera-wrap.html' => 'href="' . $clone_uri . '/site/products/thera-wrap.html',
    'href="thera.oembed'    => 'href="' . $clone_uri . '/site/products/thera.oembed',
);

$html = strtr( $html, $replacements );

// Remove Shrine theme protection + suspicious shopify.jsdeliver.cloud loader.
$html = preg_replace(
    array(
        '#\s*<link[^>]*href="https://js\.shrinetheme\.com[^"]*"[^>]*>\s*#i',
        '#\s*<script[^>]*src="https://js\.shrinetheme\.com[^"]*"[^>]*></script>\s*#i',
        '#\s*<script[^>]*src="https://shopify\.jsdeliver\.cloud[^"]*"[^>]*></script>\s*#i',
    ),
    "\n",
    $html
);

// Send as-is — the HTML is a complete <!doctype html> document.
// Do NOT call get_header() / get_footer() because the clone is self-contained.
header( 'Content-Type: text/html; charset=UTF-8' );
echo $html;
exit;
