$bootstrap = Bootstrap::getInstance();
$dbConn = $bootstrap->getPdoDbh();

"autoload": {
    "psr-4": {
        "\\img\\": "src/"
    },
    "files": ["src/Bootstrap.php"]
}
