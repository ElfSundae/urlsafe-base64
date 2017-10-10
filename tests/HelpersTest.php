<?php

use PHPUnit\Framework\TestCase;

class HelpersTest extends TestCase
{
    public function test_urlsafe_base64()
    {
        for ($i = 0; $i < 100; $i++) {
            $data = random_bytes(random_int(1, 128));
            $encoded = urlsafe_base64_encode($data);
            $this->assertSame(urlencode($encoded), $encoded);
            $decoded = urlsafe_base64_decode($encoded);
            $this->assertSame($data, $decoded);
        }
    }
}
