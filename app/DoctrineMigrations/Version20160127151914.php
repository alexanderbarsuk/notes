<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160127151914 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("
            INSERT INTO `note` (`id`, `title`, `content`, `size`) VALUES
                (1, 'Masonry', 'What is Masonry?\nMasonry is a JavaScript grid layout library. It works by placing elements in optimal position based on available vertical space, sort of like a mason fitting stones in a wall. You’ve probably seen it in use all over the Internet.', 300),
                (2, 'Buttons', 'There are 3 main button types described in material design. The raised button is a standard button that signify actions and seek to give depth to a mostly flat page. The floating circular action button is meant for very important functions. Flat buttons are usually used within elements that already have depth like cards or modals.', 620),
                (3, 'Breadcrumbs', 'Breadcrumbs are a good way to display your current location. This is usually used when you have multiple layers of content.', 300),
                (4, 'Cards', 'Cards are a convenient means of displaying content composed of different types of objects. They’re also well-suited for presenting similar objects whose size or supported actions can vary considerably, like photos with captions of variable length.', 300),
                (5, 'Chips', 'Chips can be used to represent small blocks of information. They are most commonly used either for contacts or for tags.', 300),
                (6, 'Collections', 'Collections allow you to group list objects together.', 300),
                (7, 'AngularJS Masonry Directive', 'An AngularJS directive to work with David Desandro''s Masonry.', 300),
                (8, 'Registers a listener callback to be executed whenever the watchExpression changes.', 'The watchExpression is called on every call to \$digest() and should return the value that will be watched. (watchExpression should not change its value when executed multiple times with the same input because it may be executed multiple times by \$digest(). That is, watchExpression should be idempotent.\n\nThe listener is called only when the value from the current watchExpression and the previous call to watchExpression are not equal (with the exception of the initial run, see below). Inequality is determined according to reference inequality, strict comparison via the !== Javascript operator, unless objectEquality == true (see next point)\n\nWhen objectEquality == true, inequality of the watchExpression is determined according to the angular.equals function. To save the value of the object for later comparison, the angular.copy function is used. This therefore means that watching complex objects will have adverse memory and performance implications.<br />', 620),
                (9, 'Modals', 'Use a modal for dialog boxes, confirmation messages, or other content that can be called up. In order for the modal to work you have to add the Modal ID to the link of the trigger. To add a close button, just add the class .modal-close to your button.', 620);
            ");
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql("
            DELETE FROM `note` WHERE `note`.`id` >= 1 AND `note`.`id` <= 9;
        ");
    }
}
