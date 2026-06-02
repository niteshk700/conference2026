<?php

namespace Tests\Feature;

use Tests\TestCase;

class WwwRedirectTest extends TestCase
{
    use \Illuminate\Foundation\Testing\RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }
    /**
     * Test that www.conference2026.nitra.ac.in redirects to conference2026.nitra.ac.in.
     */
    public function test_www_domain_redirects_to_non_www_domain(): void
    {
        $response = $this->get('http://www.conference2026.nitra.ac.in/');

        $response->assertStatus(301);
        $response->assertRedirect('http://conference2026.nitra.ac.in/');
    }

    /**
     * Test that secure www.conference2026.nitra.ac.in redirects to secure non-www.
     */
    public function test_secure_www_domain_redirects_to_secure_non_www_domain(): void
    {
        $response = $this->get('https://www.conference2026.nitra.ac.in/about?foo=bar');

        $response->assertStatus(301);
        $response->assertRedirect('https://conference2026.nitra.ac.in/about?foo=bar');
    }

    /**
     * Test that other hosts (like localhost) do not redirect.
     */
    public function test_other_domains_do_not_redirect(): void
    {
        $response = $this->get('http://localhost/');

        $response->assertStatus(200);
    }
}
