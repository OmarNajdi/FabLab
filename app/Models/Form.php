<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Form extends Model {

    protected function getApprovedBrowseAttribute() {
        return $this->approved ? "YES" : "NO";
    }

    protected function getApprovedReadAttribute() {
        return $this->approved ? "YES" : "NO";
    }
}
