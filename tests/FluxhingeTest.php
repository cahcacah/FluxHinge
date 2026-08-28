<?php
/**
 * Tests for FluxHinge
 */

use PHPUnit\Framework\TestCase;
use Fluxhinge\Fluxhinge;

class FluxhingeTest extends TestCase {
    private Fluxhinge $instance;

    protected function setUp(): void {
        $this->instance = new Fluxhinge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Fluxhinge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
