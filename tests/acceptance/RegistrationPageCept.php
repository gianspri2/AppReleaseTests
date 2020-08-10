<?php 

/*
Test scenario: check the registration functionality of the application.
Test data requirement:  Country of Residence
						Email Address
						Password
						Name
						Surname
						Phone
Expected result: will show a prompt that the user is not found. 
*/

use \Codeception\Util\Locator;

$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');

$I->amOnPage('/');
$I->waitForElement(Locator::firstElement('//div[text()=\'LOG IN\']'));
$I->click(Locator::firstElement('//a[text()=\'Register now!\']'));
$I->seeElement(Locator::firstElement('//a[contains(text(),\'Personal account\')]'));
$I->click(Locator::firstElement('//a[contains(text(),\'Business account\')]'));
$I->click(Locator::firstElement('//a[contains(text(),\'Open business account\')]'));
$I->selectOption(Locator::elementAt('//select[@name=\'countryCode\']', 2),'Japan');
$I->fillField(Locator::elementAt('//input[@name=\'email\']', 2),'test@example.com');
$I->fillField(Locator::elementAt('//input[@name=\'password\']', 2),'aaa_123#');
$I->fillField(Locator::elementAt('//input[@name=\'verification\']', 2),'aaa_123#');
$I->fillField(Locator::elementAt('//input[@name=\'name\']', 2),'Test');
$I->fillField(Locator::elementAt('//input[@name=\'surname\']', 2),'Test');
$I->fillField(Locator::elementAt('//input[@name=\'phone\']', 2),'+811111111');
$I->checkOption(Locator::elementAt('//input[@type=\'checkbox\']', 2));
#$I->click(Locator::elementAt('//button[contains(text(), \'Open account\')]', 2)); 