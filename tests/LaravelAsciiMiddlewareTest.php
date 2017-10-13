<?php

namespace Aviator\LaravelAsciiMiddleware\Tests;

use Aviator\LaravelAsciiMiddleware\LaravelAsciiMiddleware;
use Illuminate\Http\Request;
use PHPUnit\Framework\TestCase;

class LaravelAsciiMiddlewareTest extends TestCase
{
    /**
     * @test
     */
    public function it_transforms_strings ()
    {
        $middleware = new LaravelAsciiMiddleware();
        $request = $request = new Request(
            [
                'name' => 'Damién',
            ]
        );

        $middleware->handle($request, function (Request $request) {
            $this->assertSame('Damien', $request->get('name'));
        });
    }
}
