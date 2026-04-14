<?php

use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../ViewerHelper.php';

class ViewerHelperTest extends TestCase {

    // ==================
    // NAVIGATION TESTS
    // ==================

    public function test_current_page_is_set_correctly(): void {
        $viewer = new ViewerHelper(0, 28, 5);
        $this->assertEquals(5, $viewer->getCurrent());
    }

    public function test_previous_page_is_one_less(): void {
        $viewer = new ViewerHelper(0, 28, 5);
        $this->assertEquals(4, $viewer->getPrevious());
    }

    public function test_next_page_is_one_more(): void {
        $viewer = new ViewerHelper(0, 28, 5);
        $this->assertEquals(6, $viewer->getNext());
    }

    public function test_clamps_above_last_page(): void {
        $viewer = new ViewerHelper(0, 28, 999);
        $this->assertEquals(28, $viewer->getCurrent());
    }

    public function test_clamps_below_first_page(): void {
        $viewer = new ViewerHelper(0, 28, -5);
        $this->assertEquals(0, $viewer->getCurrent());
    }

    public function test_isFirst_true_on_first_page(): void {
        $viewer = new ViewerHelper(0, 28, 0);
        $this->assertTrue($viewer->isFirst());
    }

    public function test_isFirst_false_on_other_page(): void {
        $viewer = new ViewerHelper(0, 28, 5);
        $this->assertFalse($viewer->isFirst());
    }

    public function test_isLast_true_on_last_page(): void {
        $viewer = new ViewerHelper(0, 28, 28);
        $this->assertTrue($viewer->isLast());
    }

    public function test_isLast_false_on_other_page(): void {
        $viewer = new ViewerHelper(0, 28, 5);
        $this->assertFalse($viewer->isLast());
    }

    // ==================
    // AHS TESTS
    // ==================

    public function test_ahs_page_zero_returns_front_cover_image(): void {
        $viewer = new ViewerHelper(0, 28, 0);
        $this->assertEquals("Front cover.jpg", $viewer->getAHSImageFile());
    }

    public function test_ahs_page_zero_returns_front_cover_label(): void {
        $viewer = new ViewerHelper(0, 28, 0);
        $this->assertEquals("Front Cover", $viewer->getAHSPageLabel());
    }

    public function test_ahs_page_number_builds_correct_filename(): void {
        $viewer = new ViewerHelper(0, 28, 5);
        $this->assertEquals("Page 5.jpg", $viewer->getAHSImageFile());
    }

    public function test_ahs_page_label_format(): void {
        $viewer = new ViewerHelper(0, 28, 5);
        $this->assertEquals("Page 5 of 28", $viewer->getAHSPageLabel());
    }

    // ==================
    // TLA TESTS
    // ==================

    public function test_tla_index_1_returns_correct_image(): void {
        $viewer = new ViewerHelper(1, 9, 1);
        $this->assertEquals("001Index A,B.jpg", $viewer->getTLAImageFile());
    }

    public function test_tla_index_1_returns_correct_label(): void {
        $viewer = new ViewerHelper(1, 9, 1);
        $this->assertEquals("Index A to B", $viewer->getTLALabel());
    }

    public function test_tla_index_9_returns_correct_image(): void {
        $viewer = new ViewerHelper(1, 9, 9);
        $this->assertEquals("001Index W,Y.jpg", $viewer->getTLAImageFile());
    }

    public function test_tla_clamps_to_first_index(): void {
        $viewer = new ViewerHelper(1, 9, 0);
        $this->assertEquals(1, $viewer->getCurrent());
    }
}