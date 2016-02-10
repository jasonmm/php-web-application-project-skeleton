# PHP Web Application Skeleton

A basic skeleton for web applications.  Includes a router, routing convention, and scripts for use
with PHP's built-in web server.

## Usage

1. Clone the repository
1. Edit the _composer.json_ file.  Note: there is a section for PSR-4 autoloading, but no paths 
have been set up.
1. Add the correct namespaces to the files in the _classes_ directory.
1. Add routes to the `Router::setup()` method.


## Routes

Each route is associated with a class that extends `ControllerBase`.  Routes are setup in the 
`Router::setup()` method by calling the `Router::addRoute()` method.  The `Router::addRoute()`
method takes the HTTP method, the route string, and an object of the controller class for this route.

The route string must conform to the rules of the 
[League\Route library](http://route.thephpleague.com/getting-started/) for parsing routes.

## Controllers

Controller classes must extend `ControllerBase` and their only public methods should correspond
to the HTTP methods (first letter capitalized) that the controller supports.  Each method outputs 
text to be sent as the body of the response.  Response headers can be set with PHP's built-in
[header() function](https://secure.php.net/manual/en/function.header.php).


