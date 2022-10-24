<?php

/*
 * You can place your custom package configuration in here.
 */
return [
  // List of IP
  'list_ip' => explode(',', env('LIST_IP')),
  // Behavior of IP Address
  'behavior' => env('BEHAVIOR', 'blacklist'),
];