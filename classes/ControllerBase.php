<?php
declare(strict_types = 1);

// @todo add namespace

/**
 * Class ControllerBase is the base class for all controllers.
 */
abstract class ControllerBase {
    /**
     * Default "handler" for calls to unsupported methods.
     *
     * The only public methods a controller class should have are for the HTTP
     * methods (i.e. GET, POST, etc...).  If a controller does not support
     * DELETE then the controller should not implement a Delete() method and
     * PHP will call this method which will send a 405 HTTP status to the
     * browser.
     *
     * @param string $name
     * @param array $arguments
     */
    public function __call(string $name, array $arguments) {
        http_response_code(405);
        exit;
    }
}
