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

	public function distance(GEOSGeometry $other) : float {}

	/* Relational methods */
	public function equalsExact(GEOSGeometry $other, float $epsilon) : bool {}

	public function contains(GEOSGeometry $other) : bool {}

	public function intersects(GEOSGeometry $other) : bool {}

	public function intersection(GEOSGeometry $other) : GEOSGeometry {}

	/* Linestring methods */
	public function numPoints() : int {}

	public function pointN(int $n) : GEOSGeometry {}

	public function isSimple() : bool {}

	public function isClosed() : bool {}

	public function isRing() : bool {}

	public function interpolate(float $distance) : GEOSGeometry {}

}

class GEOSWKTReader {

	public function read(string $string) : GEOSGeometry {}

}

class GEOSWKTWriter {

	public function write(GEOSGeometry $geometry) : string {}

	public function setRoundingPrecision(int $int) : void {}

}