<?php

namespace Kotchasan;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2022-09-28 at 11:40:54.
 */
class TextTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Text
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Text();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    /**
     * Generated from @assert ('สวัสดี ประเทศไทย', 8) [==] 'สวัสดี..'.
     *
     * @covers Kotchasan\Text::cut
     */
    public function testCut()
    {

        $this->assertEquals(
            'สวัสดี..',
            \Kotchasan\Text::cut('สวัสดี ประเทศไทย', 8)
        );
    }

    /**
     * Generated from @assert ('123456789', 8) [==] '123456..'.
     *
     * @covers Kotchasan\Text::cut
     */
    public function testCut2()
    {

        $this->assertEquals(
            '123456..',
            \Kotchasan\Text::cut('123456789', 8)
        );
    }

    /**
     * Generated from @assert (256) [==] '256 Bytes'.
     *
     * @covers Kotchasan\Text::formatFileSize
     */
    public function testFormatFileSize()
    {

        $this->assertEquals(
            '256 Bytes',
            \Kotchasan\Text::formatFileSize(256)
        );
    }

    /**
     * Generated from @assert (1024) [==] '1 KB'.
     *
     * @covers Kotchasan\Text::formatFileSize
     */
    public function testFormatFileSize2()
    {

        $this->assertEquals(
            '1 KB',
            \Kotchasan\Text::formatFileSize(1024)
        );
    }

    /**
     * Generated from @assert (1024 * 1024) [==] '1 MB'.
     *
     * @covers Kotchasan\Text::formatFileSize
     */
    public function testFormatFileSize3()
    {

        $this->assertEquals(
            '1 MB',
            \Kotchasan\Text::formatFileSize(1024 * 1024)
        );
    }

    /**
     * Generated from @assert (1024 * 1024 * 1024) [==] '1 GB'.
     *
     * @covers Kotchasan\Text::formatFileSize
     */
    public function testFormatFileSize4()
    {

        $this->assertEquals(
            '1 GB',
            \Kotchasan\Text::formatFileSize(1024 * 1024 * 1024)
        );
    }

    /**
     * Generated from @assert (1024 * 1024 * 1024 * 1024) [==] '1 TB'.
     *
     * @covers Kotchasan\Text::formatFileSize
     */
    public function testFormatFileSize5()
    {

        $this->assertEquals(
            '1 TB',
            \Kotchasan\Text::formatFileSize(1024 * 1024 * 1024 * 1024)
        );
    }

    /**
     * Generated from @assert ('&"\'<>\\{}$') [==] '&amp;&quot;&#039;&lt;&gt;&#92;&#x007B;&#x007D;&#36;'.
     *
     * @covers Kotchasan\Text::htmlspecialchars
     */
    public function testHtmlspecialchars()
    {

        $this->assertEquals(
            '&amp;&quot;&#039;&lt;&gt;&#92;&#x007B;&#x007D;&#36;',
            \Kotchasan\Text::htmlspecialchars('&"\'<>\\{}$')
        );
    }

    /**
     * Generated from @assert (" \tทดสอบ\r\nภาษาไทย") [==] 'ทดสอบ ภาษาไทย'.
     *
     * @covers Kotchasan\Text::oneLine
     */
    public function testOneLine()
    {

        $this->assertEquals(
            'ทดสอบ ภาษาไทย',
            \Kotchasan\Text::oneLine(" \tทดสอบ\r\nภาษาไทย")
        );
    }

    /**
     * Generated from @assert (" 0\n12   34\r\r6\t5ทดสอบ@#$&{}!?+_-=*") [==] '0123465ทดสอบ@#$&{}!?+_-=*'.
     *
     * @covers Kotchasan\Text::password
     */
    public function testPassword()
    {

        $this->assertEquals(
            '0123465ทดสอบ@#$&{}!?+_-=*',
            \Kotchasan\Text::password(" 0\n12   34\r\r6\t5ทดสอบ@#$&{}!?+_-=*")
        );
    }

    /**
     * Generated from @assert (chr(0).chr(127).chr(128).chr(255)) [==] chr(0).chr(127).
     *
     * @covers Kotchasan\Text::removeNonCharacters
     */
    public function testRemoveNonCharacters()
    {

        $this->assertEquals(
            chr(0).chr(127),
                       \Kotchasan\Text::removeNonCharacters(chr(0).chr(127).chr(128).chr(255))
        );
    }

    /**
     * Generated from @assert ('0', 10) [==] '0000000000'.
     *
     * @covers Kotchasan\Text::repeat
     */
    public function testRepeat()
    {

        $this->assertEquals(
            '0000000000',
            \Kotchasan\Text::repeat('0', 10)
        );
    }

    /**
     * Generated from @assert ("SELECT * FROM table WHERE id=:id AND lang IN (:lang, '')", array(':id' => 1, array(':lang' => 'th'))) [==] "SELECT * FROM table WHERE id=1 AND lang IN (th, '')".
     *
     * @covers Kotchasan\Text::replace
     */
    public function testReplace()
    {

        $this->assertEquals(
            "SELECT * FROM table WHERE id=1 AND lang IN (th, '')",
            \Kotchasan\Text::replace("SELECT * FROM table WHERE id=:id AND lang IN (:lang, '')", array(':id' => 1, array(':lang' => 'th')))
        );
    }

    /**
     * Generated from @assert ('&"'."'<>{}&amp;&#38;") [==] "&amp;&quot;&#039;&lt;&gt;&#x007B;&#x007D;&amp;&#38;".
     *
     * @covers Kotchasan\Text::toEditor
     */
    public function testToEditor()
    {

        $this->assertEquals(
            "&amp;&quot;&#039;&lt;&gt;&#x007B;&#x007D;&amp;&#38;",
            \Kotchasan\Text::toEditor('&"'."'<>{}&amp;&#38;")
        );
    }

    /**
     * Generated from @assert (' ทด\/สอบ$'."\r\n\t".'<?php echo \'555\'?> ') [==] 'ทด&#92;/สอบ&#36; &lt;?php echo &#039;555&#039;?&gt;'.
     *
     * @covers Kotchasan\Text::topic
     */
    public function testTopic()
    {

        $this->assertEquals(
            'ทด&#92;/สอบ&#36; &lt;?php echo &#039;555&#039;?&gt;',
            \Kotchasan\Text::topic(' ทด\/สอบ$'."\r\n\t".'<?php echo \'555\'?> ')
        );
    }

    /**
     * Generated from @assert ('&nbsp;') [==] '&amp;nbsp;'.
     *
     * @covers Kotchasan\Text::topic
     */
    public function testTopic2()
    {

        $this->assertEquals(
            '&amp;nbsp;',
            \Kotchasan\Text::topic('&nbsp;')
        );
    }

    /**
     * Generated from @assert ('&nbsp;', false) [==] '&nbsp;'.
     *
     * @covers Kotchasan\Text::topic
     */
    public function testTopic3()
    {

        $this->assertEquals(
            '&nbsp;',
            \Kotchasan\Text::topic('&nbsp;', false)
        );
    }

    /**
     * Generated from @assert (\Kotchasan\Text::htmlspecialchars('&"\'<>\\{}$')) [==] '&"\'<>\\{}$'.
     *
     * @covers Kotchasan\Text::unhtmlspecialchars
     */
    public function testUnhtmlspecialchars()
    {

        $this->assertEquals(
            '&"\'<>\\{}$',
            \Kotchasan\Text::unhtmlspecialchars(\Kotchasan\Text::htmlspecialchars('&"\'<>\\{}$'))
        );
    }

    /**
     * Generated from @assert (" http://www.kotchasan.com?a=1&b=2&amp;c=3 ") [==] 'http://www.kotchasan.com?a=1&amp;b=2&amp;c=3'.
     *
     * @covers Kotchasan\Text::url
     */
    public function testUrl()
    {

        $this->assertEquals(
            'http://www.kotchasan.com?a=1&amp;b=2&amp;c=3',
            \Kotchasan\Text::url(" http://www.kotchasan.com?a=1&b=2&amp;c=3 ")
        );
    }

    /**
     * Generated from @assert ("javascript:alert('xxx')") [==] 'alertxxx'.
     *
     * @covers Kotchasan\Text::url
     */
    public function testUrl2()
    {

        $this->assertEquals(
            'alertxxx',
            \Kotchasan\Text::url("javascript:alert('xxx')")
        );
    }

    /**
     * Generated from @assert ("http://www.xxx.com/javascript/") [==] 'http://www.xxx.com/javascript/'.
     *
     * @covers Kotchasan\Text::url
     */
    public function testUrl3()
    {

        $this->assertEquals(
            'http://www.xxx.com/javascript/',
            \Kotchasan\Text::url("http://www.xxx.com/javascript/")
        );
    }

    /**
     * Generated from @assert (' ad_min@demo.com') [==] 'ad_min@demo.com'.
     *
     * @covers Kotchasan\Text::username
     */
    public function testUsername()
    {

        $this->assertEquals(
            'ad_min@demo.com',
            \Kotchasan\Text::username(' ad_min@demo.com')
        );
    }

    /**
     * Generated from @assert ('012 3465') [==] '0123465'.
     *
     * @covers Kotchasan\Text::username
     */
    public function testUsername2()
    {

        $this->assertEquals(
            '0123465',
            \Kotchasan\Text::username('012 3465')
        );
    }
}