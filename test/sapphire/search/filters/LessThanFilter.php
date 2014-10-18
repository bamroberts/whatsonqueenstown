<?php
/**
 * Selects numerical/date content smaller than the input
 *
 * @package sapphire
 * @subpackage search
 */
class LessThanFilter extends SearchFilter {
	
	/**
	 * @return $query
	 */
	public function apply(SQLQuery $query) {
		$query = $this->applyRelation($query);
		return $query->where(sprintf(
			"%s < '%s'",
			$this->getDbName(),
			Convert::raw2sql($this->getDbFormattedValue())
		));
	}
	
	public function isEmpty() {
		return $this->getValue() == null || $this->getValue() == '';
	}
}