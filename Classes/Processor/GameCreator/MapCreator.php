<?php

namespace Ps\Ki\Processor\GameCreator;

use Ps\Ki\Domain\Model\Game;
use Ps\Ki\Domain\Model\GameMapRegion;
use Ps\Ki\Domain\Model\GameMapCoordinate;
use Ps\Ki\Domain\Repository\GameRepository;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

/***
 *
 * This file is part of the "Ai" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2020 
 *
 ***/

class MapCreator extends AbstractCreator {

	/**
	 * @param \Ps\Ki\Domain\Model\Game $game
	 * @param array $options
	 * @return void
	 */
	public function create(Game $game, $options) {
	
		// Durchlaufe alle Regionen der Karte und fuege sie dem Spiel hinzu
		/** @var \Ps\Ki\Domain\Model\MapRegion $region */
		foreach($game->getMap()->getRegions() as $region) {
			
			/** @var \Ps\Ki\Domain\Model\GameMapRegion $gameMapRegion */
			$gameMapRegion = $this->objectManager->get(GameMapRegion::class);
			$gameMapRegion->setOrigin($region);

			/** @var \Ps\Ki\Domain\Model\MapCoordinate $coordinate */
			foreach($region->getCoordinates() as $coordinate) {

				/** @var \Ps\Ki\Domain\Model\GameMapCoordinate $gameMapCoordinate */
				$gameMapCoordinate = $this->objectManager->get(GameMapCoordinate::class);
				$gameMapCoordinate->setOrigin($coordinate);

				$gameMapRegion->addCoordinate($gameMapCoordinate);
			}

			$game->addRegion($gameMapRegion);
		}
	}
}