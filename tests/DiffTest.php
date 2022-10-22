<?php 

namespace Nathan\TestApprovalTests\tests;

use PHPUnit\Framework\TestCase;
use ApprovalTests\Approvals;
use ApprovalTests\ApprovalMismatchException;
use ApprovalTests\Reporters\QuietReporter;

class DiffTest extends TestCase {

    public function testHelloWorldDiff(): void {
        Approvals::verifyString("Hello, World!");
    }

    public function testExpectFailureAlwaysDifferent(): void {
        // Tell php unit that this should throw an exception.s
        $this->expectException(ApprovalMismatchException::class);

        // verify the timestamp, that should always be different.
        $date = new \DateTimeImmutable();
        // Need to use the quiet reporter so we can deal with the exception.
        Approvals::verifyString($date->getTimestamp(), new QuietReporter());
    }
    
}