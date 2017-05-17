<?php

// need more details to enable Middleware
//use \App\Middleware\JsonResponse;

class ExampleMiddleware
{
    /**
     * Example middleware invokable class
     *
     * @param  \Psr\Http\Message\ServerRequestInterface $request  PSR7 request
     * @param  \Psr\Http\Message\ResponseInterface      $response PSR7 response
     * @param  callable                                 $next     Next middleware
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function __invoke($request, $response, $next)
    {
       $response->getBody()->write('BEFORE');
        $headers = $request->getHeaders();
        $hash = $headers['HTTP_APIKEY'][0];

        if (password_verify('srinivas', $hash)) {
            //$response = Array("STATUS"=> "ok");
            //return $response;
        } 

       $response = $next($request, $response);
       $response->getBody()->write('AFTER');

        return $response;
    }
}