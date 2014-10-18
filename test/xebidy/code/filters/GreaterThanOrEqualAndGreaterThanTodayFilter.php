<?php

class GreaterThanOrEqualAndGreaterThanTodayFilter extends SearchFilter {
	
	/**
	 * @return $query
	 */
	public function apply(SQLQuery $query) {
		$query = $this->applyRelation($query);
		return $query->where(sprintf(
			"%s >= '%s' AND %s > DATE(NOW())",
			$this->getDbName(),
			Convert::raw2sql($this->getDbFormattedValue()),
			$this->getDbName()
		));
	}
	
	public function isEmpty() {
		return $this->getValue() == null || $this->getValue() == '';
	}
}