<?php

function GEOSVersion() : string {};

function GEOSPolygonize(GEOSGeometry $geom) {}

function GEOSLineMerge(GEOSGeometry $geom) {}

function GEOSSharedPaths(GEOSGeometry $geom1, GEOSGeometry $geom2) {}

function GEOSRelateMatch($matrix, $pattern) {}

class GEOSWKTReader {

	public function read(string $string) : GEOSGeometry {}

}

class GEOSWKTWriter {

	public function write(GEOSGeometry $geometry) : string {}

	public function setRoundingPrecision(int $int) : void {}

}