<?php

namespace AZnC\ArrayUtils;


class array_remove_test extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function shouldNotModifyHaystack()
    {
        $data = array(1, 2, 3);

        ArrayUtils::array_remove(2, $data);

        $this->assertCount(3, $data);
    }

    /** @test */
    public function shouldReturnModifiedArray()
    {
        $data = array(1, 2, 3);

        $returnData = ArrayUtils::array_remove(2, $data);

        $this->assertCount(2, $returnData);
    }

    /** @test */
    public function shouldRemoveMatchedElement()
    {
        $data = array(1, 2, 3);

        $returnData = ArrayUtils::array_remove(2, $data);

        $this->assertNotContains(2, $returnData);
    }

    /** @test */
    public function shouldRemoveOnlyOneMatchedElement()
    {
        $data = array(1, 2, 3, 2);

        $returnData = ArrayUtils::array_remove(2, $data);

        $this->assertCount(3, $returnData);
    }

    /** @test */
    public function shouldReturnUnmodifiedArrayIfNeedleNotExists()
    {
        $data = array(1, 2, 3);

        $returnData = ArrayUtils::array_remove(4, $data);

        $this->assertSame($data, $returnData);
    }
}
