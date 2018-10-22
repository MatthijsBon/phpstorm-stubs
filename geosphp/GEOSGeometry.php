<?php

/**
 * GEOSGeometry class stubs.
 *
 * @see https://git.osgeo.org/gitea/geos/php-geos
 */
class GEOSGeometry {

	/**
	 * GEOSGeometry can not be constructed using new.
	 */
	private function __construct() {}


	/* Geometry Operations */
	public function project(GEOSGeometry $other, $normalized = false) : float {}

	public function interpolate($dist, $normalized = false) : GEOSGeometry {}

	public function buffer($dist, array $style = []) : GEOSGeometry {}

	public function offsetCurve($dist, array $style = []) : GEOSGeometry {}

	public function envelope() : GEOSGeometry {}

	public function intersection(GEOSGeometry $geom) : GEOSGeometry {}

	public function convexHull() : GEOSGeometry {}

	public function difference(GEOSGeometry $geom) : GEOSGeometry {}

	public function symDifference(GEOSGeometry $geom) : GEOSGeometry {}

	public function boundary() : GEOSGeometry {}

	public function union(GEOSGeometry $otherGeom = null) {}

	public function pointOnSurface() : GEOSGeometry {}

	public function centroid() : GEOSGeometry {}

	public function simplify($tolerance, $preserveTopology = false) {}

	public function normalize() : GEOSGeometry {}

	public function extractUniquePoints() : GEOSGeometry {}


	/* Geometry Relations */
	public function disjoint(GEOSGeometry $geom) : bool {}

	public function touches(GEOSGeometry $geom) : bool {}

	public function intersects(GEOSGeometry $geom) : bool {}

	public function crosses(GEOSGeometry $geom) : bool {}

	public function within(GEOSGeometry $geom) : bool {}

	public function contains(GEOSGeometry $geom) : bool {}

	public function overlaps(GEOSGeometry $geom) : bool {}

	public function covers(GEOSGeometry $geom) : bool {}

	public function coveredBy(GEOSGeometry $geom) : bool {}

	public function equals(GEOSGeometry $geom) : bool {}

	public function equalsExact(GEOSGeometry $geom, $tolerance = 0.0) : bool {}

	public function relate(GEOSGeometry $otherGeom, $pattern = '') : bool {}

	public function relateBoundaryNodeRule(GEOSGeometry $otherGeom, $rule) : bool {}


	/* Checks */
	public function isEmpty() : bool {}

	public function checkValidity() {}

	public function isSimple() : bool {}

	public function isRing() : bool {}

	public function hasZ() : bool {}

	public function isClosed() : bool {}

	public function typeName()  : string {}

	public function typeId() : int {}

	public function getSRID() : int {}

	public function setSRID($srid) {}


	/* Collection methods */
	public function numGeometries() : int {}

	public function geometryN($num) : GEOSGeometry {}

	public function delaunayTriangulation($tolerance = 0.0, $onlyEdges = false) {}

	public function voronoiDiagram($tolerance = 0.0, $onlyEdges = false, GEOSGeometry $extent = null) {}


	/* Point methods */
	public function getX() : float {}

	public function getY() : float {}


	/* LineString methods */
	public function numPoints() : int {}

	public function pointN($num) : GEOSGeometry {}

	public function startPoint() : GEOSGeometry {}

	public function endPoint() : GEOSGeometry {}

	public function node() : GEOSGeometry {}


	/* Polygon methods */
	public function numInteriorRings() : int {}

	public function interiorRingN($num) : GEOSGeometry {}

	public function exteriorRing() : GEOSGeometry {}


	/* General functions*/
	public function dimension() : int {}

	/**
	 * Returns 0 for 0 and 1 dimensional geometries.
	 */
	public function area() : float {}

	/**
	 * Returns 0 for points,
	 * Returns length for LineStrings
	 * Returns perimeter for Polygons
	 */
	public function length() : float {}

	public function numCoordinates() : int {}

	public function coordinateDimension() : int {}

	public function distance(GEOSGeometry $geom) : float {}

	public function hausdorffDistance(GEOSGeometry $geom) : float {}

	public function snapTo(GEOSGeometry $geom, $tolerance) : GEOSGeometry {}


}