
<?php

use App\Session;

require_once ('core/App/autoloading.php');

/**
 * Base page of the website launching the run method from kernel to start everything
 */

\App\UserKernel::run();
