<?php

// direct access protection
if(!defined('KIRBY')) die('Direct access is not allowed');
c::set('url', 'https://arsnova.eu/arsnova-manual-presenter');
c::set('subfolder', 'arsnova-manual-presenter');
c::set('rewrite', false);
c::set('ssl', false);
c::set('cache', true);
c::set('cache.autoupdate', true);
c::set('cache.data', true);
c::set('cache.html', true);
c::set('cache.ignore', array());
c::set('troubleshoot', false);
c::set('debug', false);


