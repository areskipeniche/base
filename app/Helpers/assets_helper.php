<?php

if (!function_exists('bootstrap_asset')) {
  function bootstrap_asset($path): string
  { return base_url('assets/vendor/bootstrap/dist/' . $path); }
}//.endif

if (!function_exists('bootstrap_icons')) {
  function bootstrap_icons($path): string
  { return base_url('assets/vendor/bootstrap-icons/font/' . $path); }
}//.endif

if (!function_exists('custom_asset')) {
  function custom_asset($path): string
  { return base_url('assets/' . $path); }
}//.endif

if (!function_exists('image_asset')) {
  function image_asset($path): string
  { return base_url('assets/images/' . $path); }
}//.endif
