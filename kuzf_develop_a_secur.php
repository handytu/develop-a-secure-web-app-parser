<?php

// Configuration file for Secure Web App Parser

// App Settings
const APP_NAME = 'Secure Web App Parser';
const APP_VERSION = '1.0.0';

// Database Settings
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASSWORD = 'password';
const DB_NAME = 'secure_parser';

// Security Settings
const ALLOWED_ORIGINS = ['http://localhost:8080', 'https://example.com'];
const ALLOWED_HEADERS = ['Content-Type', 'Authorization'];
const ALLOWED_METHODS = ['GET', 'POST', 'PUT', 'DELETE'];
const MAX_FILE_UPLOAD_SIZE = 1024 * 1024; // 1MB

// Parser Settings
const PARSER_ALGORITHM = 'DOMDocument'; // or 'SimpleXMLElement'
const PARSER_ALLOW_SELF_CLOSING_TAGS = true;
const PARSER_STRIP_SCRIPT_TAGS = true;

// Error Handling
const DISPLAY_ERRORS = true;
const ERROR_LOG_FILE = './error.log';

// Other Settings
const SESSION_EXPIRATION = 3600; // 1 hour
const RATE_LIMIT_MAX_REQUESTS = 100;
const RATE_LIMIT_WINDOW = 60; // 1 minute

?>