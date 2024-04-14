<?php

arch('service')
    ->expect('App\Services')
    ->toBeUsedIn('App\Models');
