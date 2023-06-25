<?php

return [
    'APP_NAME' => 'My Laravel App',
    'API_VERSION' => 'v1',
    'MAX_UPLOAD_SIZE' => 1024, // 1MB

    // 階層化した場合
    'APP' => [
        'name' => 'My Laravel App',
        'url' => 'https://example.com',
    ],
    'API' => [
        'version' => 'v1',
        'enabled' => true,
    ],
    'UPLOAD' => [
        'max_size' => 1024, // 1MB
        'allowed_types' => ['jpg', 'png', 'gif'],
    ],
];
