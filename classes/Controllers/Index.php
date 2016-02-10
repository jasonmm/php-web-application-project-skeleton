<?php
declare(strict_types = 1);

// @todo add namespace

/**
 * Class Index is the controller for the root route.
 */
class Index extends ControllerBase {
    /**
     * Handler for GET / requests.
     */
    public function Get() {
        echo 'GET method!';
    }

    /**
     * Handler for POST / requests.
     */
    public function Post() {
        echo json_encode([
            'message' => 'POST method called',
            'error'   => false,
        ]);
    }
}
