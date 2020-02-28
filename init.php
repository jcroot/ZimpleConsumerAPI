<?php

require __DIR__ .'/library/ZimpleConsumerAPI/Account.php';

require __DIR__ .'/library/ZimpleConsumerAPI/Common/ApiResponse.php';

require __DIR__ .'/library/ZimpleConsumerAPI/Util/CaseInsensitiveArray.php';
require __DIR__ .'/library/ZimpleConsumerAPI/Util/Util.php';

require __DIR__ .'/library/ZimpleConsumerAPI/Exception/ExceptionInterface.php';
require __DIR__ .'/library/ZimpleConsumerAPI/Exception/ApiErrorException.php';
require __DIR__ .'/library/ZimpleConsumerAPI/Exception/ApiConnectionException.php';
require __DIR__ .'/library/ZimpleConsumerAPI/Exception/AuthenticationException.php';
require __DIR__ .'/library/ZimpleConsumerAPI/Exception/InvalidArgumentException.php';
require __DIR__ .'/library/ZimpleConsumerAPI/Exception/UnknownApiErrorException.php';

require __DIR__ .'/library/ZimpleConsumerAPI/Core/ClientInterface.php';
require __DIR__ .'/library/ZimpleConsumerAPI/Core/Config.php';
require __DIR__ .'/library/ZimpleConsumerAPI/Core/Environments.php';
require __DIR__ .'/library/ZimpleConsumerAPI/Core/HTTP.php';
require __DIR__ .'/library/ZimpleConsumerAPI/Core/Request.php';

require __DIR__ .'/library/ZimpleConsumerAPI/Operations/OperationInterface.php';
require __DIR__ .'/library/ZimpleConsumerAPI/Operations/Operations.php';
require __DIR__ .'/library/ZimpleConsumerAPI/Operations/Auth/Login.php';

