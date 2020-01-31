<?php
namespace Ps\Ki\Domain\Model;


/***
 *
 * This file is part of the "Ai" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 
 *
 ***/
class GamePlayer extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

    /**
     * title
     * 
     * @var string
     */
    protected $title = '';

    /**
     * game
     * 
     * @var \Ps\Ki\Domain\Model\Game
     */
    protected $game = null;

    /**
     * Returns the title
     * 
     * @return string $title
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Sets the title
     * 
     * @param string $title
     * @return void
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * Returns the game
     * 
     * @return \Ps\Ki\Domain\Model\Game $game
     */
    public function getGame() {
        return $this->game;
    }

    /**
     * Sets the game
     * 
     * @param \Ps\Ki\Domain\Model\Game $game
     * @return void
     */
    public function setGame(\Ps\Ki\Domain\Model\Game $game) {
        $this->game = $game;
    }
}
