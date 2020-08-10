<?php 

/*
Test scenario: check the login functionality of the application.
Test data requirement: email input
Expected result: will show a prompt that the user is not found. 
*/

use \Codeception\Util\Locator;

$I = new AcceptanceTester($scenario);
$I->wantTo('perform login for an unregistered email');

$I->amOnPage('/');
$I->waitForElement(Locator::firstElement('//div[text()=\'LOG IN\']'));
$I->fillField(Locator::firstElement('//input[@id="userIdentifier"]'), 'test@example.com');
$I->click(Locator::firstElement('//button[text()=\'Log in\']'));
$I->waitForElement(Locator::firstElement('//div[text()=\'The specified user could not be found\']'));