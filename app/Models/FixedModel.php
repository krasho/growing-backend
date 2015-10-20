<?php
namespace Growing\Models;
use Illuminate\Database\Eloquent\Model;

class FixedModel extends Model {
	public function getDateFormat() {
		return 'Y-m-d H:i:s.u';
	}
}