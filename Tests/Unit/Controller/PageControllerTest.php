<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Rene <typo3@rs-softweb.de>
 *  			
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class Tx_Newestcontent_Controller_PageController.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Newest Content Elements
 *
 * @author Rene <typo3@rs-softweb.de>
 */
class Tx_Newestcontent_Controller_PageControllerTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Newestcontent_Domain_Model_Page
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Newestcontent_Domain_Model_Page();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function dummyMethod() {
		$this->markTestIncomplete();
	}

}
?>