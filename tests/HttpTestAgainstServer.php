<?php 

namespace Nathan\TestApprovalTests\tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\HttpClient;

class HttpTestAgainstServer extends TestCase {

    public function testGoogleUsesGoogleSomewhereOnTheirPage(): void {
        $client = HttpClient::create();
        $response = $client->request('GET', 'https://www.google.com');
        $content = strtoupper($response->getContent());
        $this->assertStringContainsString("GOOGLE", $content);
    }

    public function testConstitutionStartsWithWeThePeople(): void {
        $client = HttpClient::create();
        $response = $client->request('GET', 'https://www.gutenberg.org/cache/epub/5/pg5.txt');
        $content = $response->getContent();
        $titleText = 'THE CONSTITUTION OF THE UNITED STATES OF AMERICA, 1787';
        $contentNoHeaderStart = strpos($content, $titleText);
        $contentNoHeader = ltrim(substr($content, $contentNoHeaderStart + strlen($titleText) + 1));

        $this->assertStringStartsWith('We the people of the United States', $contentNoHeader);
    }
    
}