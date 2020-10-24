<?php


namespace Tests\Feature;



use Illuminate\Support\Str;

trait HasResourceRoutes
{
    public function resource($resourceParam)
    {
        return $this->get($resourceParam . '/')->assertStatus(200);
        // todo: add implementation for other routes.
    }
}
