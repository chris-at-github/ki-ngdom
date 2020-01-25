<?php

namespace Ps\Ai\Processor\GameCreator;

use Ps\Ai\Domain\Model\Game;
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
	 * @param \Ps\Ai\Domain\Model\Game $game
	 * @param array $options
	 * @return void
	 */
	public function create(Game $game, $options) {
	
		// Durchlaufe alle Regionen der Karte und fuege sie dem Spiel hinzu
		/** @var \Ps\Ai\Domain\Model\MapRegion $region */
		foreach($game->getMap()->getRegions() as $region) {
			
			// new GameMapRegion

			/** @var \Ps\Ai\Domain\Model\MapLocation $location */
			foreach($region->getLocations() as $location) {

				// new GameMapLocation
				// gameMapRegion->attachLocation(gameMapLocation)
			}
			// game->regions->attach
		}
	}
}