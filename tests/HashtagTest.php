<?php

namespace CodeWars\Tests;

use PHPUnit\Framework\TestCase;

use function CodeWars\generateHashtag;

class HashtagTest extends TestCase
{
    public function testThatSomethingShouldHappen()
    {
        $this->assertEquals(false, generateHashtag(''), 'Expected an empty string to return false');
        $this->assertEquals(false, generateHashtag(str_repeat(' ', 200)), "Still an empty string");
        $this->assertEquals('#Codewars', generateHashtag('Codewars'), 'Should handle a single word and add a hashtag at the beginning.');
        $this->assertEquals('#Codewars', generateHashtag('Codewars      '), 'Should handle trailing whitespace.');
        $this->assertEquals('#CodewarsIsNice', generateHashtag('Codewars Is Nice'), 'Should remove spaces.');
        $this->assertEquals('#CodewarsIsNice', generateHashtag('codewars is nice'), 'Should capitalize first letters of words.');
        $this->assertEquals('#CodeWars', generateHashtag('Code' . str_repeat(' ', 140) . 'wars'));
        $this->assertEquals(false, generateHashtag('Looooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooong Cat'), 'Should return false if the final word is longer than 140 chars.');
        $this->assertEquals("#A" . str_repeat("a", 138), generateHashtag(str_repeat("a", 139)), "Should work");
        $this->assertEquals(false, generateHashtag(str_repeat("a", 140)), "Too long");
    }
}
