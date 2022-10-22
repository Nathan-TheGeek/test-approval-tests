<?php 

namespace Nathan\TestApprovalTests\tests;

use PHPUnit\Framework\TestCase;

class SimpleTest extends TestCase {

    public function testHelloWorld(): void {
        $this->assertEquals("Hello World", "Hello World");
    }

    public function testHelloWorldFromClass(): void {
        $tempSample = new \Nathan\TestApprovalTests\Sample();
        $this->assertEquals('Hello, World!', $tempSample->getHelloWorld());
    }
    
}