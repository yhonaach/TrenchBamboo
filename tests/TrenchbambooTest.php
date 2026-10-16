<?php
/**
 * Tests for TrenchBamboo
 */

use PHPUnit\Framework\TestCase;
use Trenchbamboo\Trenchbamboo;

class TrenchbambooTest extends TestCase {
    private Trenchbamboo $instance;

    protected function setUp(): void {
        $this->instance = new Trenchbamboo(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Trenchbamboo::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
