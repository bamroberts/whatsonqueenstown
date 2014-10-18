<?php
/**
 * Selects numerical/date content less than the input
 *
 * @todo documentation
 */
class LessThanOrEqualFilter extends SearchFilter {
	
	/**
	 * @return $query
	 */
	public function apply(SQLQuery $query) {
		$query = $this->applyRelation($query);
		return $query->where(sprintf(
			"%s <= '%s'",
			$this->getDbName(),
			Convert::raw2sql($this->getDbFormattedValue())
		));
	}
	
	public function isEmpty() {
		return $this->getValue() == null || $this->getValue() == '';
	}
}