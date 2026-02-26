<?php
/**
 * Tests for InternalBlaze
 */

use PHPUnit\Framework\TestCase;
use Internalblaze\Internalblaze;

class InternalblazeTest extends TestCase {
    private Internalblaze $instance;

    protected function setUp(): void {
        $this->instance = new Internalblaze(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Internalblaze::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
