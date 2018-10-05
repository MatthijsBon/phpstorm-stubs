<?php

function GEOSVersion() : string {};

class GEOSGeometry {

	/* General methods */
	public function setSRID(int $int) : void {}

	public function getSRID() : int {}

	public function typeName() : string {}

	/* Geometry operations */
	public function length() : float {}

	public function area() : float {}

	public function distance() : float {}

	/* Relational methods */
	public function equalsExact(GEOSGeometry $other, float $epsilon) : bool {}

}