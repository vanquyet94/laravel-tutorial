<?php 
# use Log;
Log::useDailyFiles(storage_path().'/logs/debug.log');
Log::info(['Request'=>$request]);
